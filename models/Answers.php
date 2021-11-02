<?php
header('Access-Control-Allow-Origin: *');//resources allowed
header('Content-Type: application/json');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods');
header('Access-Control-Allow-Methods: POST');
class Answers extends QuestionAnswer{
	//receiving whole $_POST array with keys as question's id and values as user's answer
	public function getAnswersResponse($params):array{
		if ($this->method==="POST") {
			$response_array = array();
			foreach($params as $questionId => $userAnswer){
				//query for getting id of user's answer
				$userAnswerId = $this->conn->prepare("SELECT id FROM `answers` WHERE answer=:answer");
				$userAnswerId->bindParam(':answer', $userAnswer, PDO::PARAM_STR);
				$userAnswerId->execute();
				$userAnswerId = $userAnswerId->fetch(PDO::FETCH_ASSOC);
				$userAnswerId = $userAnswerId["id"];
				//query for getting response array
				$questionResponse = $this->conn->prepare("SELECT (questions.right_answer_id=:userAnswerId) AS `isTrue` FROM `questions` WHERE id=:question_id");
				$questionResponse->bindParam(':userAnswerId', $userAnswerId, PDO::PARAM_INT);
				$questionResponse->bindParam(':question_id', $questionId, PDO::PARAM_INT);
				$questionResponse->execute();
				$questionResponse = $questionResponse->fetch(PDO::FETCH_ASSOC);
				$response_array[$questionId] = $questionResponse["isTrue"];
			}
			return $this->msg($response_array);
			//in response array key is question's id and value is answer on question if user answered correctly (0,1)
			//for example: ("1"=>1, "2"=>0, "3"=>1, "4"=>0) means that user's answers for questions 1 and 3 are correct, and answers for 2 and 4 are incorrect  
		}
	}
}
?>
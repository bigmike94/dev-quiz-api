<?php
header('Access-Control-Allow-Origin: *');//resources allowed
header('Content-Type: application/json');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods');
header('Access-Control-Allow-Methods: GET');
class Questions{
	function __construct(){
		$this->method = $_SERVER['REQUEST_METHOD'];
		$this->conn = DB::getConnection();
	}
	private function msg($data){
		if (count($data)>0) {
			http_response_code(200);
			return array ("ok"=>true,"data"=>$data);
		}
		else {
			http_response_code(404);
			return array ("ok"=>true,"data"=>"Oops...Nothing was found");
		}
	}
	public function getAllQuestions(){
		if ($this->method==="GET") {
			$questions = $this->conn->prepare("SELECT q.id, q.question, subj.name AS subject FROM `questions` q INNER JOIN `subject` subj ON q.subject_id = subj.id ORDER BY rand()");
			$questions->execute();
			$questions = $questions->fetchAll(PDO::FETCH_ASSOC);
			foreach($questions as &$question){
				$answers = $this->conn->query("SELECT * FROM `answers` WHERE question_id = {$question['id']}")->fetchAll(PDO::FETCH_ASSOC);
				foreach ($answers as $answer) {
					$question["answers"][] = $answer["answer"];
				}
			}
			return $this->msg($questions);
		}
	}
	public function getQuestionsBySubject($subject){
		if ($this->method==="GET") {
			$questions = $this->conn->prepare("SELECT q.id, q.question, subj.name AS subject FROM `subject` subj INNER JOIN `questions` q ON q.subject_id=subj.id WHERE subj.name=:subject");
			$questions->bindParam(':subject', $subject, PDO::PARAM_STR);
			$questions->execute();
			$questions = $questions->fetchAll(PDO::FETCH_ASSOC);
			foreach($questions as &$question){
				$answers = $this->conn->query("SELECT * FROM `answers` WHERE question_id = {$question['id']}")->fetchAll(PDO::FETCH_ASSOC);
				foreach ($answers as $answer) {
					$question["answers"][] = $answer["answer"];
				}
			}
			return $this->msg($questions);
		}
	}
}
?>
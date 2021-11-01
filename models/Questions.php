<?php
header('Access-Control-Allow-Origin: *');//resources allowed
header('Content-Type: application/json');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods');
header('Access-Control-Allow-Methods: GET');
class Questions extends QuestionAnswer{
	public function getAllQuestions(){
		if ($this->method==="GET") {
			$questions = $this->conn->prepare("SELECT q.id, q.question, subj.name AS subject FROM `questions` q INNER JOIN `subject` subj ON q.subject_id = subj.id ORDER BY rand()");
			$questions->execute();
			$questions = $questions->fetchAll(PDO::FETCH_ASSOC);
			$questions_with_answers = $this->getQuestionsAnswers($questions);
			return $this->msg($questions_with_answers);
		}
	}
	public function getQuestionsBySubject($subject){
		if ($this->method==="GET") {
			$questions = $this->conn->prepare("SELECT q.id, q.question, subj.name AS subject FROM `subject` subj INNER JOIN `questions` q ON q.subject_id=subj.id WHERE subj.name=:subject");
			$questions->bindParam(':subject', $subject, PDO::PARAM_STR);
			$questions->execute();
			$questions = $questions->fetchAll(PDO::FETCH_ASSOC);
			$questions_with_answers = $this->getQuestionsAnswers($questions);
			return $this->msg($questions_with_answers);
		}
	}
	public function getQuestionsByStack($stack){
		if ($this->method==="GET") {
			$questions = $this->conn->prepare("SELECT subj.stack, q.id, q.question FROM `subject` subj INNER JOIN `questions` q ON q.subject_id = subj.id WHERE stack=:stack ORDER BY rand()");
			$questions->bindParam(':stack', $stack, PDO::PARAM_STR);
			$questions->execute();
			$questions = $questions->fetchAll(PDO::FETCH_ASSOC);
			$questions_with_answers = $this->getQuestionsAnswers($questions);
			return $this->msg($questions_with_answers);
		}
	}
}
?>
<?php
header('Access-Control-Allow-Origin: *');//resources allowed
header('Content-Type: application/json');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods');
header('Access-Control-Allow-Methods: GET');
class Questions extends QuestionAnswer{
	private $per_page=4;
	public function getAllQuestions($page=false){
		if ($this->method==="GET") {
			if ($page) {
				$data_start=($page-1)*$this->per_page;
				$questions = $this->conn->prepare("SELECT q.id, q.question, subj.name AS subject FROM `questions` q INNER JOIN `subject` subj ON q.subject_id = subj.id LIMIT :data_start, :per_page");
				$questions->bindParam(':data_start', $data_start, PDO::PARAM_INT);
				$questions->bindParam(':per_page', $this->per_page, PDO::PARAM_INT);
				$questions->execute();
				$questions = $questions->fetchAll(PDO::FETCH_ASSOC);
			}
			else{
				$questions = $this->conn->query("SELECT q.id, q.question, subj.name AS subject FROM `questions` q INNER JOIN `subject` subj ON q.subject_id = subj.id ORDER BY rand()")->fetchAll(PDO::FETCH_ASSOC);
			}
			
			$questions_with_answers = $this->getQuestionsAnswers($questions);
			return $this->msg($questions_with_answers);
		}
	}
	public function getQuestionsBySubject($param){
		if ($this->method==="GET") {
			if(is_array($param)){
				$subject = $param["subject"];
				$page = $param["page"];
				$data_start=($page-1)*$this->per_page;
				$questions = $this->conn->prepare("SELECT q.id, q.question, subj.name AS subject FROM `subject` subj INNER JOIN `questions` q ON q.subject_id=subj.id WHERE subj.name=:subject LIMIT :data_start, :per_page");
				$questions->bindParam(':data_start', $data_start, PDO::PARAM_INT);
				$questions->bindParam(':per_page', $this->per_page, PDO::PARAM_INT);
			}
			else{
				$subject = $param;
				$questions = $this->conn->prepare("SELECT q.id, q.question, subj.name AS subject FROM `subject` subj INNER JOIN `questions` q ON q.subject_id=subj.id WHERE subj.name=:subject ORDER BY rand()");
			}
			$questions->bindParam(':subject', $subject, PDO::PARAM_STR);
			$questions->execute();
			$questions = $questions->fetchAll(PDO::FETCH_ASSOC);
			$questions_with_answers = $this->getQuestionsAnswers($questions);
			return $this->msg($questions_with_answers);
		}
	}
	public function getQuestionsByStack($param){
		if ($this->method==="GET") {
			if(is_array($param)){
				$stack = $param["stack"];
				$page = $param["page"];
				$data_start=($page-1)*$this->per_page;
				$questions = $this->conn->prepare("SELECT subj.stack, q.id, q.question FROM `subject` subj INNER JOIN `questions` q ON q.subject_id = subj.id WHERE stack=:stack LIMIT :data_start, :per_page");
				$questions->bindParam(':data_start', $data_start, PDO::PARAM_INT);
				$questions->bindParam(':per_page', $this->per_page, PDO::PARAM_INT);
			}
			else {
				$stack = $param;
				$questions = $this->conn->prepare("SELECT subj.stack, q.id, q.question FROM `subject` subj INNER JOIN `questions` q ON q.subject_id = subj.id WHERE stack=:stack ORDER BY rand()");
			}
			$questions->bindParam(':stack', $stack, PDO::PARAM_STR);
			$questions->execute();
			$questions = $questions->fetchAll(PDO::FETCH_ASSOC);
			$questions_with_answers = $this->getQuestionsAnswers($questions);
			return $this->msg($questions_with_answers);
		}
	}
}
?>
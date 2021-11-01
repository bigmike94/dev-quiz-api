<?php
class QuestionsController{
	function __construct(){
		$this->questions = new Questions();
	}
	public function actionGetAll(){
		$response = $this->questions->getAllQuestions();
		echo json_encode($response);
		return true;
	}
	public function actionGetBySubject($subject){
		$response = $this->questions->getQuestionsBySubject($subject);
		echo json_encode($response);
		return true;
	}
}
?>
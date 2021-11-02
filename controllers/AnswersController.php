<?php
class AnswersController{
	function __construct(){
		$this->answers = new Answers();
	}
	public function actionGetAnswersResponse(){
		$response = $this->answers->getAnswersResponse($_POST);
		echo json_encode($response);
		return true;
	}
}
?>
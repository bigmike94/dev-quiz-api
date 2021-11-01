<?php
class QuestionsController{
	public static function getJsonResponse($methodName, $param=false){
		$questions = new Questions();
		if ($param) $response = $questions->$methodName($param);
		else $response = $questions->$methodName();
		echo json_encode($response);
		return true;
	}
	public function actionGetAll($page=false){
		self::getJsonResponse("getAllQuestions", $page?$page:false);
	}
	public function actionGetBySubject($subject, $page=false){
		self::getJsonResponse("getQuestionsBySubject", $page?array("subject"=>$subject, "page"=>$page):$subject);
	}
	public function actionGetQuestionsByStack($stack, $page=false){
		self::getJsonResponse("getQuestionsByStack", $page?array("stack"=>$stack, "page"=>$page):$stack);
	}
}
?>
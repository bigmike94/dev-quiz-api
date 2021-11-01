<?php
class QuestionsController{
	public static function returnJsonResponse($methodName, $param=false){
		$questions = new Questions();
		if ($param) $response = $questions->$methodName($param);
		else $response = $questions->$methodName();
		echo json_encode($response);
		return true;
	}
	public function actionGetAll(){
		self::returnJsonResponse("getAllQuestions");
	}
	public function actionGetBySubject($subject){
		self::returnJsonResponse("getQuestionsBySubject", $subject);
	}
	public function actionGetQuestionsByStack($stack){
		self::returnJsonResponse("getQuestionsByStack", $stack);
	}
}
?>
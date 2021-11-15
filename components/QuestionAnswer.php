<?php
abstract class QuestionAnswer{
	function __construct(){
		$this->method = $_SERVER['REQUEST_METHOD'];
		$this->conn = DB::getConnection();
	}
	public function msg($data){
		if (count($data)>0) {
			http_response_code(200);
			return array ("ok"=>true,"data"=>$data);
		}
		else {
			http_response_code(404);
			return array ("ok"=>false,"data"=>"Oops...Nothing was found");
		}
	}
	public function getQuestionsAnswers($questions){
		foreach($questions as &$question){
			$answers = $this->conn->query("SELECT * FROM `answers` WHERE question_id = {$question['id']}")->fetchAll(PDO::FETCH_ASSOC);
			foreach ($answers as $answer) {
				$question["answers"][] = $answer["answer"];
			}
		}
		return $questions;
	}
}
?>

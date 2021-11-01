<?php 
return array (
	"questions/stack/([a-z]{4,})"=>"questions/getQuestionsBySubjectGroup/$1",
	"questions/([a-z]+)"=>"questions/getBySubject/$1",
	"questions"=>"questions/getAll"
)
?>
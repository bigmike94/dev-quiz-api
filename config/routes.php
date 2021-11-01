<?php 
return array (
	"^questions/stack/([a-z]{3,})$"=>"questions/getQuestionsByStack/$1",
	"^questions/([a-z]{3,})$"=>"questions/getBySubject/$1",
	"^questions$"=>"questions/getAll"
)
?>
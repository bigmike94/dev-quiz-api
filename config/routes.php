<?php 
return array (
	"^questions/stack/([a-z]{3,})/p/([0-9]{1,})$"=>"questions/getQuestionsByStack/$1/$2",
	"^questions/stack/([a-z]{3,})$"=>"questions/getQuestionsByStack/$1",
	"^questions/([a-z]{3,})/p/([0-9]{1,})$"=>"questions/getBySubject/$1/$2",
	"^questions/([a-z]{3,})$"=>"questions/getBySubject/$1",
	"^questions/p/([0-9]{1,})$"=>"questions/getAll/$1",
	"^questions$"=>"questions/getAll"
)
?>
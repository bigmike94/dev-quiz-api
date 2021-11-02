<?php 
return array (
	"^answers-response$"=>"answers/getAnswersResponse",
	"^questions/stack/([a-z]{3,})/p/([0-9]{1,})$"=>"questions/getQuestionsByStack/$1/$2",//by stack(paged)
	"^questions/stack/([a-z]{3,})$"=>"questions/getQuestionsByStack/$1",//by stack
	"^questions/([a-z]{3,})/p/([0-9]{1,})$"=>"questions/getBySubject/$1/$2",//by subject(paged)
	"^questions/([a-z]{3,})$"=>"questions/getBySubject/$1",//by subject
	"^questions/p/([0-9]{1,})$"=>"questions/getAll/$1",//get all (paged)
	"^questions$"=>"questions/getAll",//get all
)
?>
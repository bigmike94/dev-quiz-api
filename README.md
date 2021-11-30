<h1>Api with basic quizzes for developers</h1>
<hr>
<h2>Api contains questions in</h2>
<ul>
<li>HTML</li>
<li>CSS</li>
<li>Javascript</li>
<li>PHP</li>
<li>MySQL</li>
</ul>
<hr>
<h2>Usage</h2>
<hr>
<h3>Getting questions</h3>
<p>GET https://dev-quiz-api.000webhostapp.com/questions - <b>Getting all questions (randomized)</b></p>
<p>GET https://dev-quiz-api.000webhostapp.com/questions/p/1 - <b>Getting all questions per page</b> (pagination)</p>
<p>GET https://dev-quiz-api.000webhostapp.com/questions/php - <b>Getting questions by subject</b>. Values acceptable: html, css, javascript, php, mysql</p>
<p>GET https://dev-quiz-api.000webhostapp.com/questions/html/p/1 - <b>Getting questions by subject per page</b> (pagination). Values acceptable: html, css, javascript, php, mysql</p>
<p>GET https://dev-quiz-api.000webhostapp.com/questions/stack/backend - <b>Getting questions by stack: frontend/backend (randomized)</b>. Values acceptable: frontend, backend.</p>
<p>GET https://dev-quiz-api.000webhostapp.com/questions/stack/frontend/p/1 - <b>Getting questions by stack per page</b> (pagination)</p>
<br>
<hr>
<h3>Getting reponse on user's answer</h3>
<p>POST https://dev-quiz-api.000webhostapp.com/answers-response - <b>Pass object with key as question's id and value as users'answer</b> and get response in the form of key-value pairs where key is question's id and value is answers on question whether user answered correctly
</p>
<br>
<h4>Pattern:</h4>
<p><b>Passed:</b> {"1":"Home tool Markup Language"}</p>
<p><b>Received:</b> {"1":"0"}</p>

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
<h2>Basic usage</h2>
<div>GET domain.name/questions - <b>Getting all questions (randomized)</b></div>
<div>GET domain.name/questions/p/1 - <b>Getting all questions per page</b> (pagination)</div>
<div>GET domain.name/questions/php - <b>Getting questions by subject</b>. Values acceptable: html, css, javascript, php, mysql</div>
<div>GET domain.name/questions/html/p/1 - <b>Getting questions by subject per page</b> (pagination). Values acceptable: html, css, javascript, php, mysql</div>
<div>GET domain.name/questions/stack/backend - <b>Getting questions by stack: frontend/backend (randomized)</b>. Values acceptable: frontend, backend.</div>
<div>GET domain.name/questions/stack/frontend/p/1 - <b>Getting questions by stack per page</b> (pagination)</div>

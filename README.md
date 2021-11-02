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
<div>GET domain.name/questions - get all questions (randomized)</div>
<div>GET domain.name/questions/p/1 - get questions per page (pagination)</div>
<div>GET domain.name/questions/php - get questions by subject. Values acceptable: html, css, javascript, php, mysql</div>
<div>GET domain.name/questions/php/p/1 - get questions by subject per page (pagination). Values acceptable: html, css, javascript, php, mysql</div>
<div>GET domain.name/questions/stack/backend - Getting questions by stack: frontend/backend (randomized). Values acceptable: frontend, backend.</div>
<div>GET domain.name/questions/stack/frontend/p/1 - Getting questions by stack per page (pagination)</div>

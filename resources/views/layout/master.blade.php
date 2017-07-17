<!DOCTYPE html>
<html>
<head>
	<title>@yield("title")</title>
</head>
<body>
	<h1>Heading</h1>
	<div>
		<h2>Navigation	</h1>
		<ul>
			<li>Link 1</li>
			<li>Link 2</li>
		</ul>
	</div>

	<div>
		<h2>Contents Here</h2>
		@yield("main_content")
	</div>

	<div>
		<h2>Footer</h2>
	</div>
</body>
</html>
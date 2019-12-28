<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title> Scholly </title>
	<link rel="stylesheet" href="/css/app.css">
</head>

<body class="font-sans">
	<div id="app">

						<router-view></router-view>
				
				
	</div>

	<script src="/js/app.js"></script>
</body>
</html>

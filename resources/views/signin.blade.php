<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Inscription</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="/css/app.css">
    <style>
body {
  background-image: url('/images/bg.JPG');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
</head>

<body class="font-sans " >
	<div id="app">
		<header class=" section ml-8" >
			<h1>
				<router-link to="/">
					<img alt="logo" src="/images/ghost-white.png" height="150" width="150" >
				</router-link>
			</h1>
		</header>
        <div class="flex items-center h-screen w-full ">     
  <div class="w-full bg-white rounded shadow-lg p-8 m-4 md:max-w-lg md:mx-auto">
    <h1 class="block w-full text-center text-grey-darkest mb-6">Inscription</h1>
    <form class="mb-4 md:flex md:flex-wrap md:justify-between" action="http://127.0.0.1:8000/api/login" method="post">
      <div class="flex flex-col mb-4 md:w-1/2">
        <label class="mb-2  tracking-wide font-bold text-lg text-grey-darkest" for="name">Nom</label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest md:mr-2" type="text" name="name" id="name">
      </div>
      <div class="flex flex-col mb-4 md:w-1/2">
        <label class="mb-2  font-bold text-lg text-grey-darkest md:ml-2" for="last_name">Prénom</label>
        <input class=" rounded-lg border py-2 px-3 text-grey-darkest md:ml-2" type="text" name="last_name" id="last_name">
      </div>
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2  font-bold text-lg text-grey-darkest" for="email">Email</label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest" type="email" name="email" id="email">
      </div>
      <div class="flex flex-col mb-6 md:w-full">
        <label class="mb-2  font-bold text-lg text-grey-darkest" for="password">Mot de passe</label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest" type="password" name="password" id="password">
      </div>
      <button class="rounded-lg block bg-blue-dark hover:bg-red text-white uppercase text-lg mx-auto p-4 rounded" type="submit">Crée un compte </button>
    </form>
    <a class="block w-full text-center no-underline text-sm text-grey-dark hover:text-grey-darker" href="/login">Connexion ?</a>
  </div>
</div>
	
	</div>

	<script src="/js/app.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

        <title>Projet SI</title>

    </head>
    <body>
        <div class="mainzone" style="margin-top:15%">
        <h1 style="text-align: center;"> Projet Miage </h1>
        <ul class="list-group">
            <li class="list-group-item">
  	            <a href="/inscription"> Page d'inscription </a>
            </li>
            <li class="list-group-item">
  	            <a href="/connexion"> Page de connexion </a>
            </li>
        </ul>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
</head>
<body>
    <p><a href="{{ url('/Home') }}">Accueil</a></p> - <a href="{{ url('/ToAddArticle') }}">Ajouter un nouvel article</a>
    <h1>{{ $article->titre}}</h1>
    <p>{{ $article->getAuteur()->nom }} {{ $article->getAuteur()->prenom }}</p>
    <p><img src="<?php echo asset($article->image);?>" style="max-width: 150px;"></p>
    <p>Résumé : {{ $article->resume }}</p>
    <p>{{ $article->contenu }}</p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <p><a href="{{ url('/') }}">Déconnnexion</a> - <a href="{{ url('/ToAddArticle') }}">Ajouter un article</a></p>
    <h1>Liste des articles</h1>
    <table>
        <tr>
            <th>Titre</th>
            <th>Auteur</th>
        </tr>

        @foreach($liste_article as $article)
            <tr>
                <td>{{ $article->titre }}</td>
                <td>{{ $article->getAuteur()->nom }} {{ $article->getAuteur()->prenom }}</td>
                <td><a href="{{ url('/Details') }}/{{ $article->id }}">Details</a> - <a href="{{ url('/ToUpdateArticle') }}/{{ $article->id }}">Modifier</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>
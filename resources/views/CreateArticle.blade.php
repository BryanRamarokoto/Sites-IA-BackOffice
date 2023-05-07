<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJout d'article</title>
</head>
<body>
    <p><a href="{{ url('/Logout') }}">Déconnexion</a> - <a href="{{ url('/Home') }}">Accueil</a></p>
    <h1>Ajouter un article</h1>
    <form action="{{ url('/addArticle') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        @if(!empty($categorie))
            Catégorie : <select name="categorie" id="select-categorie">
                @foreach($categorie as $categories)
                    <option value="{{ $categories }}">{{ $categories }}</option>
                @endforeach
                <option value="another">Autre...</option>
            </select>
            <input type="hidden" name="none" id="input-categorie">
        @else 
            Catégorie : <input type="text" name="categorie" placeholder="Catégorie">
        @endif<br>
        Titre : <input type="text" name="titre" placeholder="Titre"><br>
        Image : <input type="file" name="image" required><br>
        Resume : <textarea name="resume"></textarea><br>
        Contenu : <textarea name="contenu"></textarea><br>
        Date publication : <input type="datetime-local" name="datepublication"><br>
        <button type="submit">Enregistrer</button>
        @if(session()->has('success'))
            <p>{{ session('success') }}</p>
        @endif
    </form>
</body>
<script>
    function toggle(select, input) {
        if(select.value == "another") {
            input.name = "categorie";
            input.type = "text";
            input.placeholder = "Catégorie";
            input.required = true;
            select.name = "none";
        }
        else {
            input.type = "hidden";
            input.name = "none";
            input.placeholder = "";
            input.required = false;
            select.name = "categorie";
        }
    }
    document.getElementById("select-categorie").addEventListener("change",function() {
        toggle(document.getElementById("select-categorie"),document.getElementById("input-categorie"));
    });
</script>
</html>
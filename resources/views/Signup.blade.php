<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
</head>
<body>
    <h1>S'inscrire</h1>
    <a href="{{ url('/') }}">Connexion</a>
    <form action="{{ url('/Signup') }}" method="POST">
        {{ csrf_field() }}
        Nom : <input type="text" name="nom" placeholder="Nom"><br>
        Prénom : <input type="text" name="prenom" placeholder="Prénom"><br>
        Email : <input type="email" name="email" placeholder="Ex: xxx@gmail.com"><br>
        Mot de passe : <input type="password" name="password" placeholder="Mot de passe"><br>
        Retapez votre mot de passe : <input type="password" name="password_repeat" placeholder="Retapez votre mot de passe"><br>
        <button type="submit">S'inscrire</button>
    </form>
    @if(session()->has('success'))
        <p>{{ session('success') }}</p>
    @elseif(session()->has('Error'))
        <p>{{ session('Error') }}</p>
    @endif
</body>
</html>
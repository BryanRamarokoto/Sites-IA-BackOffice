<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réinitialisation de mot de passe</title>
</head>
<body>
    <a href="{{ url('/') }}">Connexion</a>
    <h1>Mot de passe oublié ? </h1>
    <form action="{{ url('/ResetPass') }}" method="POST">
        {{ csrf_field() }}
        Email : <input type="email" name="email" palceholder="Votre adresse Mail"><br>
        Nouveau mot de passe : <input type="password" name="password" placeholder="Nouveau mot de passe"><br>
        Retapez votre mot de passe : <input type="password" name="password_repeat" placeholder="Retapez votre mot de passe"><br>
        <button type="submit">Enregistrer</button>
    </form>
    @if(session()->has('success'))
        <p>{{ session('success') }}</p>
    @elseif(session()->has('Error'))
        <p>{{ session('Error') }}</p>
    @endif
</body>
</html>
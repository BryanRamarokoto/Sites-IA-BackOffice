<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrateur</title>
</head>
<body>
    <h1>Bonjour admin</h1>
    <a href="{{ url('/ForgetPass') }}">Mot de passe oublié?</a> - <a href="{{ url('/ToSignup') }}">S'inscrire</a>
    <form action="{{ url('/Signin') }}" method="POST">
        {{ csrf_field() }}
        Email : <input type="email" name="email" placeholder="Votre adresse mail"><br>
        Mot de passe : <input type="password" name="password" placeholder="Mot de passe"><br>
        <button type="submit">Se Connecter</button>
    </form>
    @if(session()->has('Error'))
        <p>{{ session('Error') }}</p>
    @endif
</body>
</html>
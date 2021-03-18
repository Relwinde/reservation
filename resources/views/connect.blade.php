<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url ('materialize/css/materialize.css')}}">
    <link rel="stylesheet" href="{{url ('css/register.css')}}">
    <title>Document</title>
</head>
<body>
<?php
if (isset($default)){
  echo ($default);
}

?>
<div class="main">
<div class="illus hide-on-med-and-down">
<h1>La fabrique numérique de Simplon</h1>
<img src="{{url ('images/team-work.png')}}" alt="image illustrant le travail en équipe" srcset="">
</div>

<div class="regist">
<form action="{{route('login-control')}}" method="POST" role="form" class="z-depth-2">
       @csrf
        <div class="input-field">
          <input required name="mail" type="email" class="validate">
          <label for="mail">Mail</label>
          <span class="helper-text" data-error="Invalide" data-success="Valide">Entrez votre addresse mail</span>
        </div>
        <div class="input-field">
          <input required name="pass" type="password" class="validate">
          <label for="pass">Mot de passe</label>
          <span class="helper-text" data-error="Invalide" data-success="Valide">Entrez un mot de passe</span>
        </div>
    <button type="submit" class="btn blue waves-effect waves-light">Se connecter</button>
<p>Vous n'avez pas de compte inscrivez-vous <a href="{{route('register-page')}}">ici</a></p>
</form>
</div>
</div>
    




<script src="{{url ('materialize/jquery.js')}}"></script>
<script src="{{url ('materialize/js/materialize.js')}}"></script>
</body>
</html>
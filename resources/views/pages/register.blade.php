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
    
<div class="main">
<div class="regist">
<form action="{{route('register')}}" method="POST" role="form" class="z-depth-2">
        <div class="input-field">
          <input name="fname" type="text" class="validate">
          <label for="fname">Nom</label>
          <span class="helper-text" data-error="Valide" data-success="Invalide">Entrez votre nom de famille</span>
        </div>
        <div class="input-field">
          <input name="lname" type="text" class="validate">
          <label for="lname">Prénom</label>
          <span class="helper-text" data-error="Invalide" data-success="Invalide">Entrez votre prénom</span>
        </div>
        <div class="input-field">
          <input name="mail" type="email" class="validate">
          <label for="mail">Mail</label>
          <span class="helper-text" data-error="Invalide" data-success="Valide">Entrez votre addresse mail</span>
        </div>
        <div class="input-field">
          <input name="pass" type="password" class="validate">
          <label for="pass">Mot de passe</label>
          <span class="helper-text" data-error="Invalide" data-success="Valide">Entrez un mot de passe</span>
        </div>
        <div class="input-field">
          <input name="passRepeat" type="password" class="validate">
          <label for="passRepeat">Confirmation de mot de passe</label>
          <span class="helper-text" data-error="Invalide" data-success="Valide">Confirmez votre mot de passe</span>
        </div>

    <button type="submit" class="btn blue waves-effect waves-light">S'inscrire</button>

</form>
</div>
<div class="illus hide-on-med-and-down">
<h1>La fabrique numérique de Simplon</h1>
<img src="{{url ('images/team-work.png')}}" alt="image illustrant le travail en équipe" srcset="">
</div>


</div>
    




<script src="{{url ('materialize/jquery.js')}}"></script>
<script src="{{url ('materialize/js/materialize.js')}}"></script>
</body>
</html>
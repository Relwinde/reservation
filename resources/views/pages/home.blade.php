<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url ('materialize/css/materialize.css')}}">
    <link rel="stylesheet" href="{{url ('css/home.css')}}">
    <title>Home</title>
</head>
<body>
    <?php
if(isset($_GET)){
}

?>

<div class="navBar blue lighten-2 z-depth-2">
    <img src="{{url ('images/index.png')}}" alt="" id="logo">
    <h1>Tableau de bord</h1>
    <div >
        <h2>Admin NAME</h2>
        <button class="btn red waves-effect waves-light lighten-2">Déconnexion</button>
    </div>
</div>

<center>
    <div class="memberDiv">
        <div class="table z-depth-1">
            <h4>Compte en attente de réservation</h4>
            <div class="accounts"> 
                <h5>User NAME</h5>
                <div class="buttons">
                    <button class="btn blue lighten-3 white-text">Valider</button>
                    <button class="btn white blue-text">Réfuser</button>
                </div>
            </div>

        </div>
        <div class="table z-depth-1">
        <h4>Compte en attente de réservation</h4>
            <div class="accounts"> 
                <h5>User NAME</h5>
                <div class="buttons">
                    <button class="btn blue lighten-3 white-text">Valider</button>
                    <button class="btn white blue-text">Réfuser</button>
                </div>
            </div>

        </div>

    </div>
</center>

<script src="{{url ('materialize/jquery.js')}}"></script>
<script src="{{url ('materialize/js/materialize.js')}}"></script>
</body>
</html>
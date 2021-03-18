<h1>Bonjour {{$data['userName']}}</h1>
<h2>Bienvenue sur la platform de la Fabrique Simplon</h2>

<p>Afin de que votre compte soit soumis à la validation 
vous devez d'abord vérifier votre addresse mail.</p>
<p>cliquez sur <a href="/verify?code{{$data['verificationCode']}">ce lien</a> pour le faire</p>
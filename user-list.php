<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1> Travail Pratique 4 </h1>
<h2> Ariba abdelkader 2195300 </h2>
    </br></br>
<h3> C'est bien connecté</h3>

<?php
//var_dump($_POST);
//die();
require ('include/connex.php');


// $username = mysqli_real_escape_string($con, $_POST['username']);
// $password = mysqli_real_escape_string($con, $_POST['password']);

require_once('include/security-session.php');


// hacher le mot de passe (crupter)

$password_hash = password_hash($password, PASSWORD_BCRYPT);
echo '<br><br> Mot de passe chiffré '.$password_hash;

 ?>

</br></br>
<a href="logout.php">Déconnexion - Retour à la page d'acceuil</a>


</body>
</html>



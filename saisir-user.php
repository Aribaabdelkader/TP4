<?php

//var_dump($_POST);
//die();
require ('include/connex.php');
//
// $name = mysqli_real_escape_string($con, $_POST['name']);
// $email = mysqli_real_escape_string($con, $_POST['email']);
// $username = mysqli_real_escape_string($con, $_POST['username']);
// $password = mysqli_real_escape_string($con, $_POST['password']);
// $birthday = mysqli_real_escape_string($con, $_POST['birthday']);
// $userCityId = mysqli_real_escape_string($con, $_POST['userCityId']);


foreach ($_POST as $key => $value) {
  $$key = mysqli_real_escape_string($con, $value);
}

$password_hash = password_hash($password, PASSWORD_BCRYPT);

//echo "mot de pass saisit ".$password.'<br> Mot de pass chiffrée '.$password_hash;



$sql = "INSERT INTO user (name, email, username, password, birthday, userCityId) VALUES ('$name', '$email', '$username', '$password_hash', '$birthday', '$userCityId')";

if(mysqli_query($con, $sql)){
  echo "Merci bonsoir";
}else{
  echo "pas encore :( - ". mysqli_error($con);
}
 ?>
 

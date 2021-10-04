<?php
session_start();
require ('include/connex.php');


foreach ($_POST as $key => $value) {
  $$key = mysqli_real_escape_string($con, $value);
}

// $username = mysqli_real_escape_string($con, $_POST['username']);
// $password = mysqli_real_escape_string($con, $_POST['password']);


// etape 1 - Rechercher un utilisateur :
$sql = "SELECT * FROM user WHERE username = '$username'";
$result = mysqli_query($con, $sql);

//2) Compter les résultats :

$rowcount = mysqli_num_rows($result);

//3) verifier le mot de pass

if($rowcount == 1){
   //$user =  mysqli_fetch_row($result);
   $user =  mysqli_fetch_assoc($result);
  //var_dump($user);

  $dbPassword = $user['password'];

  //echo "input password : ".$password."<br> BD password : ".$dbPassword;
  // die();

  if(password_verify($password, $dbPassword)){

      //4 creer la Session
      session_regenerate_id();
      $_SESSION['userId'] = $user['userId'];
      $_SESSION['name'] = $user['name'];
      $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR']);

      header("Location: user-list.php");


  }else{
    //pas le bon mot de pass
    header("Location: login.php?msg=2");
  }

}else{
  //pas le bon utilisateur
   header("Location: login.php?msg=1");
}




 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Login</title>

    <style>

      .text-red{
        color: red;
      }
    </style>

  </head>
  <body>
<h1> Travail Pratique 4 </h1>
<h2> Ariba abdelkader 2195300 </h2>
    </br></br>
  



<?php



$msg = null;
if(isset($_GET['msg'])){
  if($_GET['msg']==1)
  $msg = 'Utilisateur inexistant ';
  
  else if($_GET['msg']==2){
    $msg = 'Mot de passe erroné  ';
  }
}

echo "<span class='text-red'>".$msg."</span>";

?>

    <form action="authentication.php" method="post">
      <label> Username </label>
      <input type="email" name="username" required></br>
      <label> Password </label>
      <input type="password" name="password" required></br>
      

      <input type="submit" value="Se connecter"/>

    </form>
       


  </body>
</html>







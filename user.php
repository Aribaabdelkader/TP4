<?php
require_once('include/security-session.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> User</title>
  </head>
  <body>
    <form action="saisir-user.php" method="post">
      <label> Nom </label>
      <input type="text" name="name" maxlength="5" required></br>
      <label> email </label>
      <input type="email" name="email" maxlength="45"></br>
      <label> Nom utilisateur </label>
      <input type="email" name="username" maxlength="45"></br>
      <label> Mot de pass </label>
      <input type="password" name="password" maxlength="12"></br>
      <label> Naissance </label>
      <input type="text" name="birthday" maxlength="10" placeholder="aaaa-mm-jj"></br>
      <label> Ville </label>

      <?php
require ('include/connex.php');

      $sql="SELECT cityId, cityName FROM city ORDER BY cityName ASC;";

      $result = mysqli_query($con, $sql);
      ?>

      <select name="userCityId">
        <option value="">Selectionner la ville</option>
          <!-- à la ancienne
          <option value="1">Canada</option>
          <option value="2">USA</option> -->
        <?php
        foreach($result as $row){

          ?>
        <option value="<?php echo $row['cityId'];?>"><?php echo $row['cityName'] ?></option>
        <?php

        }
        mysqli_close($con);
        ?>


      </select></br>
      <input type="submit" value="Save"/>
    </form>
  </body>
</html>

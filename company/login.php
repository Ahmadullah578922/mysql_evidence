<?php


    if(isset($_POST['submit'])){
      extract($_POST);
      include "config.php";
      $sql = "SELECT * FROM user WHERE username= '$username' AND password='$password'";
      $result = mysqli_query($conn, $sql);
      $queryResult = mysqli_num_rows($result);
      if($queryResult > 0 ){
        echo "<h1>You are registered.</h1>";
      }else{
        echo "<h1>You are not registered.</h1>";
      }

    }

 ?>

<form  action="#" method="post">
  <p>Username: <input type="text" name="username"></p>
  <p>password: <input type="password" name="password"></p>
  <input type="submit" name="submit" value="SUBMIT">
</form>



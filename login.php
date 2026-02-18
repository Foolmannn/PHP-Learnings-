<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- for reloading page every  2 seconds  -->
    <meta http-equiv="refresh" content="2">

    <title>Document</title>
    <link rel="stylesheet" href="./css/global.css">

</head>
<body>
        <form action="redirect.php" method="POST">
        <div class="signuptable">
         <h2>Login Page</h2>
    <table class="main">
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" ></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Login" ></td>
        </tr>
      
    </table>

</form>
<?php 
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $password=$_POST["password"];

  }


?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="2">

    <title>Register Page </title>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="./css/navbar.css">

    <style>
        
    </style>
</head>
<body>
    <header>
            <div class="navbar">


        <div class="left">
            <a href="./index.php">Home</a>
            <!-- Using_DatabaseinPHP\addproductform.html -->
         <a href="../Using_DatabaseinPHP/redirect.php">Product</a>

            <a href="./contact.php">Contact</a>
            <a href="./about.php">About Us</a>
        </div>
        <div class="signin">
            <a href="./login.php">Login</a>
            <a href="./register.php">Register</a>
    </div>
    </header>
    <div class="registertable">
        <h2>Register page</h2>
        <form action="redirect.php" method="POST">
    
    <table class="main">
           <tr>
            <td>Register As:</td>
            <td>
                <select name="userRole" id="">
                    <option value="" selected disabled >Select</option>

                    <option value="shoper">Shoper</option>
                    <option value="seller">Seller</option>
                </select>
            </td>
        </tr>
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
            <td><input type="submit" name="submit" value="Register" ></td>
        </tr>
      
    </table>

</form>
</body>
</html>
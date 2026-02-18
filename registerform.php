<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="2"> -->

    <title>Register Page </title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/navbar.css">

    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: sans-serif ;
        }
h2{
    font-size: 45px;
    color: var(--text-dark);
    padding: 16px;
}
.main{
    display: flex;
    justify-content: center;
    /* padding: 20px; */

    /* display: flex; */
    /* flex-direction: column; */
    /* justify-content: center; */
    /* align-items: center; */


}
.registertable{
    font-size: 27px;
    
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 60vw;
        background-color: var(--sectionbg-light-blue);
    padding: 20px;
    border: 2px solid var(--border-gray);
    border-radius: 15px;
}
.registertable td{
    margin: 50px;
    padding: 10px;
}
.registertable select , input{
    width: 250px;
    height: 27px;
  font-size: 20px;

}

.registertable .btn{
    width: 150px;
    height: 30px;
    background-color: var(--mainbg-dark-blue);
    border-radius: 4px;
    color: white;
    border: none;
    cursor: pointer;



}
    </style>
</head>
<body>
    <header>

        <?php include("includes/navbar.php");?>

    </header>
    <div class="main" >
        <!-- <form action="register.php" method="POST">  -->
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])  ?>" method="POST">
                <div class="registertable">
        <h2>Register page</h2>

    <table >
           <tr>
            <td>Register As:</td>
            <td>
                <select name="userRole" id="" required>
                    <option value="" selected disabled >Select</option>

                    <option value="shoper">Shoper</option>
                    <option value="seller">Seller</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username" required></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" required></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input class="btn" type="submit" name="submit" value="Register"></td>
        </tr>
      
    </table>
    </div>

    
</form>
<?php include("includes/register.php");?>
    </div>
</body>
</html>
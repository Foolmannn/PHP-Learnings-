<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
session_unset();   // remove session variables
session_destroy(); // destroy session
    header("Location: loginform.php");
    exit();

?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/global.css">
    
    <link rel="stylesheet" href="./css/navbar.css">
    
</head>
<body>
    customer dashboard
    <?php
session_start();

// If not logged in OR not shopper
if (!isset($_SESSION["role"]) || $_SESSION["role"] != "customer") {
    header("Location: loginform.php");
    exit();
}
?>
<?php include("includes/navbar.php"); ?>
</body>
</html>
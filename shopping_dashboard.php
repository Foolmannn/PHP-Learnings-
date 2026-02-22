<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1">
    <title>Document</title>
    <link rel="stylesheet" href="./css/global.css">
    
    <link rel="stylesheet" href="./css/navbar.css">
    <style>
        .card{
            background-color: lightblue;
            height: 300px;
            width: 300px;

        }
    </style>
    
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
<header>


    <?php include("includes/navbar.php"); ?>

</header>

<div class="cards">
    <div class="card">
        <div class="image"><img src="uploads\prod_699a6d4ccdbb46.14559493.jpg" alt="" width="299"></div>

        <div class="title">
HP victus laptop
        </div>
        <div class="price">
Rs. 1100000
        </div>
        <div class="description">
        
        </div>
</div>


</div>
</body>
</html>
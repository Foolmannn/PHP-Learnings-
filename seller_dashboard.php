<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="2">

    <title>Document</title>
        <link rel="stylesheet" href="./css/global.css">
    
    <link rel="stylesheet" href="./css/navbar.css">

        <style>
        div{
            display:flex;
            justify-content:center;
        }
        a{
            text-decoration:none;
            color:blue;
        }
        button{
            padding:10px;
            margin:20px;
        }
    </style>
</head>
<body>
    seller_dashboard  
    <header>  

        <?php
session_start();
         include("includes/navbar.php"); ?>

    </header>
<div>

<button><a href="addproductform.html">Add Products</a></button>
<button><a href="addproduct.php">View Products</a></button>
<button><a href="addcategoryform.html">Add Category</a></button>


</div>

</body>
</html>
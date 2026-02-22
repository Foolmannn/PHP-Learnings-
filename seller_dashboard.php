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
          * {
            padding: 0;
            margin: 0;
            font-family: sans-serif;
        }
               h2 {
            font-size: 45px;
            color: var(--text-dark);
            padding: 16px;
        text-decoration: underline;

        }
        .features {
            display: flex;
            justify-content: center;
            flex-direction: column;
            width: 60vw;
            background-color: var(--sectionbg-light-blue);

            align-items: center;
            border: 2px solid var(--border-gray);

        }
        .main{
            display: flex;
            justify-content: center;
            align-items: center;
            
        }

        a {
            text-decoration: none;
            color: blue;
        }

        button {
            padding: 10px;
            margin: 20px;
                     width: 150px;
            height: 40px;
            background-color: var(--mainbg-dark-blue);
            border-radius: 4px;
           
            border: none;
            cursor: pointer;
            font-size: 20px;

        }
        button a{
             color: white;
        }
    </style>
</head>

<body>
    <!-- seller_dashboard   -->
    <header>

        <?php
        session_start();
        include("includes/navbar.php"); ?>

    </header>
    <div class="main">
        <div class="features">
            <h2>Seller Dashboard</h2>

            <button><a href="addproductform.html">Add Products</a></button>
            <button><a href="addproduct.php">View Products</a></button>
            <button><a href="addcategoryform.html">Add Category</a></button>
        </div>
    </div>



</body>

</html>
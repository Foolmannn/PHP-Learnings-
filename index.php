<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="2">

    <title>Home Page</title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/navbar.css">

    <style>


    </style>
</head>
<body> <header>
    <?php include("includes/navbar.php");?>
<img src="" alt="">
</header>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shopsathi";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("connection failed." . $conn->connect_error);
    }
     $sql1 = "SELECT * FROM products";
    $result1 = $conn->query($sql1);

while($row = $result1->fetch_assoc()) {
    echo "<div>";
    echo "<img src='" . $row['image'] . "' width='200px'>";
    echo "</div>";
}

    // echo "<section>
    //     <div class="card">
    //         <div class="image"><img src=".$row["image"]." alt=""></div>
            
    //        </div>
    //        </section>
            
    //         </div>";

           $conn->close();
           
?>
   

</body>
</html>
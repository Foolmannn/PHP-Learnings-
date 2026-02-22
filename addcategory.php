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
    $userid = $_SESSION['userid']; // logged in seller

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shopsathi";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("connection failed." . $conn->connect_error);
    }
    // echo ("connected succesfully");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // print_r($_FILES); for debugging 
     
        $categoryname = $_POST["categoryname"];






        // $sql = "INSERT INTO `products` (`title`, `price`, `description`, `categoryid`) 
        //         VALUES ('$title', $price, '$description', $categoryid)";
        // $result = $conn->query($sql);
        //         if ($sql->execute()) {
        //     echo "<p style='color:green;'>Product inserted successfully!</p>";
        // } else {
        //     echo "<p style='color:red;'>Error inserting product: " . $sql->error . "</p>";
        // }
        //     $sql->close();
        $stmt = $conn->prepare("INSERT INTO categories (categoryname) VALUES (?)");
        $stmt->bind_param("s",$categoryname);

        if ($stmt->execute()) {
            echo "<p style='color:green;'>Category inserted successfully!</p>";
        } else {
            echo "<p style='color:red;'>Error inserting category: " . $stmt->error . "</p>";
        }

        $stmt->close();
    }






    $sql0 = "SELECT * FROM categories";
    $result0 = $conn->query($sql0);

    echo "<table border='1'>";
    echo "<th>CategoryID</th><th>Category Name</th></tr>";

    if ($result0->num_rows > 0) {
        while ($row = $result0->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["categoryid"] . "</td>";
            echo "<td>" . $row["categoryname"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No data found</td></tr>";
    }

    echo "</table>";




    $sql1 = "SELECT * FROM products";
    $result1 = $conn->query($sql1);

    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Title</th><th>Price</th><th>Category</th><th>Description</th><th>Userid</th><th>Image_path</th></tr>";

    if ($result1->num_rows > 0) {
        while ($row = $result1->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["productid"] . "</td>";
            echo "<td>" . $row["title"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "<td>" . $row["categoryid"] . "</td>";
            echo "<td>" . $row["description"] . "</td>";
            echo "<td>" . $row["userid"] . "</td>";
            echo "<td>" . $row["image"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No data found</td></tr>";
    }

    echo "</table>";


    $conn->close();
    ?>
</body>

</html>
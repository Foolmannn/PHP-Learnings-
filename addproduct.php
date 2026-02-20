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
        $title = $_POST["title"];
        $price = $_POST["price"];
        $category = $_POST["category"];
        $description = $_POST["description"];

        switch ($category) {
            case "electronic":
                $categoryid = 1;
                break;
            case "stationary":
                $categoryid = 3;
                break;
            case "food":
                $categoryid = 7;
                break;
            case "fashion":
                $categoryid = 2;
                break;

            case "cosmetic":
                $categoryid = 6;
                break;
            case "sport":
                $categoryid = 5;
                break;
            case "home":
                $categoryid = 4;
                break;
            default:
                $categoryid = NULL;
        }


// Check if file was uploaded
if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] == 0) {

    $uploadDir = "uploads/";
    if (!is_dir($uploadDir)) {
       if (mkdir($uploadDir, 0755, true)) {
        echo "Folder created successfully!";
    } else {
        echo "Folder creation failed! PHP cannot write here.";
    }
    }

    $fileTmpPath = $_FILES['product_image']['tmp_name'];
    $fileName = $_FILES['product_image']['name'];
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    $newFileName = uniqid('prod_', true) . "." . $fileExt;
    $destPath = $uploadDir . $newFileName;

    if (move_uploaded_file($fileTmpPath, $destPath)) {
        $imagePath = $destPath; // save this in DB
    } else {
        $imagePath = NULL;
        echo "<p style='color:red;'>Error uploading image</p>";
    }
} else {
    $imagePath = NULL;
}


        // $sql = "INSERT INTO `products` (`title`, `price`, `description`, `categoryid`) 
        //         VALUES ('$title', $price, '$description', $categoryid)";
        // $result = $conn->query($sql);
        //         if ($sql->execute()) {
        //     echo "<p style='color:green;'>Product inserted successfully!</p>";
        // } else {
        //     echo "<p style='color:red;'>Error inserting product: " . $sql->error . "</p>";
        // }
        //     $sql->close();
        $stmt = $conn->prepare("INSERT INTO products (title, description, price, categoryid, userid, image) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssdiss", $title, $description, $price, $categoryid, $userid, $imagePath);

        if ($stmt->execute()) {
            echo "<p style='color:green;'>Product inserted successfully!</p>";
        } else {
            echo "<p style='color:red;'>Error inserting product: " . $stmt->error . "</p>";
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
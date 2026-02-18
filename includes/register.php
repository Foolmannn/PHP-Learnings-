 <?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname ="shopsathi";

    $conn = new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("connection failed.".$conn->connect_error);

    }
    // echo("connected succesfully");


    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $username=$_POST["username"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $userRole=$_POST["userRole"];
        switch ($userRole){
            case "Shoper":
                $role ="customer";
                break;
            case "Seller":
                $role ="seller";
            default:
                $role= NULL;
        }


    

        $sql = "INSERT INTO `users`(`name`, `email`, `password`, `role`) VALUES ('$username','$email','$password','$role')";
        $result =$conn->query($sql);        
    //         if ($sql->execute()) {
    //     echo "<p style='color:green;'>Product inserted successfully!</p>";
    // } else {
    //     echo "<p style='color:red;'>Error inserting product: " . $sql->error . "</p>";
    // }
    //     $sql->close();
    
    if ($result === TRUE) {
    echo "<p style='color:green;'>".$username ." ! You are successfully registered as" .$userRole ."! </p>";
} else {
    echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
}
    
    }

    $conn->close();
    ?>
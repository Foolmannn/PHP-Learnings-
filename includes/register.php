 <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shopsathi";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("connection failed." . $conn->connect_error);
    }
    // echo("connected succesfully");


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $userRole = $_POST["userRole"];
        switch ($userRole) {
            case "shoper":
                $role = "customer";
                break;
            case "seller":
                $role = "seller";
            default:
                $role = NULL;
        }



        // it is better to store password in hashed form 
        //   $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        // $sql = "INSERT INTO `users`(`name`, `email`, `password`, `role`) VALUES ('$username','$email','$password','$role')";
        // $result =$conn->query($sql);        
        //         if ($sql->execute()) {
        //     echo "<p style='color:green;'>Product inserted successfully!</p>";
        // } else {
        //     echo "<p style='color:red;'>Error inserting product: " . $sql->error . "</p>";
        // }
        //     $sql->close();



        //     if ($result === TRUE) {
        //     echo "<p style='color:green;'>".$username ." ! You are successfully registered as " .$userRole ." ! </p>";
        // } else {
        // echo "<p style='color:red;'>Error: " . $conn->error . "</p>"; this is unsafe as user can view sensative info of the database 
        // echo "<p style='color:red;'> Error: Could not register the user. Please try again.</p>"; 
        //this also doesnot work we need to specifiy and catch the specific error 
        try {
            // Attempt insert
            $sql = "INSERT INTO `users`(`name`, `email`, `password`, `role`) VALUES ('$username','$email','$password','$role')";
            $conn->query($sql);

            echo "<p style='color:green;'>{$username}! You are successfully registered as {$userRole}!</p>";
        } catch (mysqli_sql_exception $e) {
            // Log the detailed error for debugging (in server logs)
            error_log("Database error: " . $e->getMessage());

            // Show a safe, generic message to the user
            if ($e->getCode() == 1062) { // Duplicate entry
                echo "<p style='color:red;'>This email is already registered!</p>";
            } else {
                echo "<p style='color:red;'>Error: Could not register the user. Please try again later.</p>";
            }
        }
    }

    $conn->close();
    ?>
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
        $password = $_POST["password"];
        // $userRole = $_POST["userRole"];
        
        $sql ="SELECT * FROM users WHERE name= '$username'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $user = $result->fetch_assoc();
            if($password== $user["password"]){

                echo "<p style='color:green;'>" .$username .", Your user id is " . $user["userid"] ." and you are a " .$user["role"]." </p>";
            }
            else{
                echo "<p style='color:red;' > Enter the valid username and password </p>";
            }
        }
    }

    $conn->close();
    ?>
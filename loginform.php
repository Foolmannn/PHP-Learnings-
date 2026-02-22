<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- for reloading page every  2 seconds  -->
    <!-- <meta http-equiv="refresh" content="2"> -->

    <title>Document</title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: sans-serif;
        }

        .signuptable {
            display: flex;
            justify-content: center;
            align-items: center;

            font-size: 27px;

            flex-direction: column;
            background-color: var(--sectionbg-light-blue);
            padding: 20px;
            border: 2px solid var(--border-gray);
            border-radius: 15px;
            width: 60vw;


        }



        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            /* flex-direction: column; */




        }

        h2 {
            font-size: 45px;
            color: var(--text-dark);
            padding: 16px;
        text-decoration: underline;

        }





        .signuptable td {
            margin: 50px;
            padding: 10px;
        }

        .signuptable select,
        input {
            width: 250px;
            height: 27px;
            font-size: 20px;
            padding: 5px;

        }

        .signuptable .btn {
            width: 150px;
            height: 40px;
            background-color: var(--mainbg-dark-blue);
            border-radius: 4px;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 30px;



        }

        .message {
            /* background-color: green; */
            /* width: 60vw; */
            height: 10vw;
            display: flex;
            font-size: 30px;
            justify-content: center;
            align-items: center;

        }
    </style>

</head>

<body>
    <header>
        <?php include("includes/navbar.php"); ?>

    </header>
    <div class="main">
        <!-- <form action="./includes/login.php" method="POST"> -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])  ?>" method="POST">
            <div class="signuptable">
                <h2>Login Page</h2>

                <table>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input class="btn" type="submit" name="submit" value="Login"></td>
                    </tr>

                </table>
            </div>


        </form>
    </div>
    <div class="message">
        <?php include("includes/login.php"); ?>

    </div>
</body>

</html>
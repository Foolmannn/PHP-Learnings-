    <div class="navbar">


        <div class="logo">
            <img src="./shopsathilogo5.png" alt="ShopSathi Logo">
        </div>
        <div class="left">
            <a href="./index.php">Home</a>
            <!-- Using_DatabaseinPHP\addproductform.html -->
            <!-- <a href="../Using_DatabaseinPHP/redirect.php">Product</a> -->
            <a href="shopping_dashboard.php">Shop</a>

            <a href="./contact.php">Contact</a>
            <a href="./about.php">About Us</a>
        </div>
        <div class="signin">
            <!-- <a href="./loginform.php">Login</a> -->
        
                <!-- <a href="index.php"></a> -->

                <?php if (isset($_SESSION["username"])): ?>


                    <span style="font-size:25px; font-family:sans-serif;color:rgb(53, 11, 240); font-weight:bold;">
                        Welcome, <?php echo ucwords($_SESSION["username"]); ?>
                    </span>

                    <a href="logout.php">Logout</a>

                <?php else: ?>

                    <a href="./loginform.php">Login</a>

                    <a href="./registerform.php">Register</a>
                <?php endif; ?>
            
        </div>
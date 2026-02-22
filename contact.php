<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="2">

    <title>contact</title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <style>

        *{
            padding: 0;
            margin: 0;
            font-family: sans-serif ;
        }
h2{
    font-size: 45px;
    color: var(--text-dark);
        text-decoration: underline;

}
.main{
    display: flex;
    justify-content: center;
    /* padding: 20px; */
    
}
.box{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: var(--sectionbg-light-blue);
    padding: 20px;
    width: 60vw;
    border: 2px solid var(--border-gray);
    border-radius: 15px;

}
.contacts{
    font-size: 30px;

        display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.contacts a{
    text-decoration: none;
    color: var(--navbg-secondary-blue);
}
.contacts td{
    margin: 50px;
    padding: 10px;
}

    </style>
</head>
<body>
    <header>
        <?php include("includes/navbar.php");?>

    </header>
    <div class="main">
        <div class="box">

        <h2>
            Contact US
        </h2>
        <div class="contacts">
            <table>
                <tr>
                    <td>Phone:</td>
                    <td>01 0234732</td>
                </tr>
                <tr>
                    <td>Facebook:</td>
                    <td> <a href="#">www.facebook.com/ShopSathi</a></td>
                </tr>
                <tr>
                    <td>Whatsapp: </td>
                    <td>9755655664</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>shopsathi@gmail.com</td>
                </tr>
            </table>
       
        </div>

        </div>

    </div>
</body>
</html>
<!DOCTYPE html>
<?php include 'general.php'; ?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/logo_bas.png" >
    <link rel="stylesheet" type="text/css" href="MyStyle.css">
    <script  src="Headscript.js"></script>
    <title>myNotes</title>
    <style>

    </style>
    <script>
        // function linken() {
        //     document.location = 'index.php';
        //     }


    </script>

</head>
<body>
    <div class="header">
        <h1>MyNotes</h1>
    </div>

    <ul>


        <li><a href=login.php>Sign in</a></li>
        <li><a href=CreateAccount.php>Sign up</a></li>

    </ul>




    <div class="LogForm"> 
        <form method="POST" action="Login.php">
            <br><br>
            <b>Login into your account:</b>
            <br><br> 
            <input type="text" placeholder="Username" name="Uname" value="" > 
            <br><br>
            <input type="password" placeholder="password" name="password" value=""> 
            <br><br>
            <input class="knop" type="submit" value="Submit">
            <br><br>
        </form>
        <button class="knop" onclick="linken()">back</button>
        <br>
    </div>



    <?php
    if (isset($_REQUEST['Uname']) && isset($_REQUEST['password'])) {
        $testUser = $_REQUEST['Uname'];
        $testpassWord = $_REQUEST['password'];
    }

    $conn = connectDB();
    // checken of data ingevult is
    if (isset($_REQUEST['Uname']) && isset($_REQUEST['password'])) {
        // variabele vullen query string om input op te halen van database
        $sql = "SELECT `id`, `username`, `password` FROM `user` WHERE `username`='" . $testUser . "'";

        $result = $conn->query($sql);            // uitvoeren query string voor ophalen tabel user en resultset in variable zetten
        for ($x = 0; $x < $result->num_rows; $x++) {
            $huidigeRecord = $result->fetch_assoc();
        }

        if ($testUser == $huidigeRecord['username'] && $testpassWord == $huidigeRecord['password']) {
            echo "<div class=LogForm2>login succesfull<div>";
        }
    }
    ?>


</body>
</html>
<!DOCTYPE html>
<?php include 'general.php'; ?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/logo_bas.png" />
        <link rel="stylesheet" type="text/css" href="MyStyle.css">
        <script  src="Headscript.js"></script>
        <title>myNotes</title>
        <style>

        </style>
        <script>function validate() {
            alert ("in functie validate");
            var un = document.getElementById("username").value;
            alert(un + "un is leeg");
            var pw = document.getElementById("password").value;
            alert(pw +" pw = leeg");
            if (un = "" && pw = "") {
                   alert("all fields are empty");
                    return false;
                } else {
                    return true;
                }
            }
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

            <form action="CreateAccount.php" method="POST" onsubmit="validate()">
                <br><br>
                <b>Create a new account:</b><br><br>    
                <input type="text" placeholder="username" name="Uname" value="" >
                <br><br>
                <input type="password" placeholder="password" name="password" value="">
                <br><br>
                <input type="text" placeholder="firstname" name="fname" value="" >
                <br><br> 
                <input type="text" placeholder="lastname" name="lname" value="" >
                <br><br>  
                <input type="email" placeholder="e-mail" name="usremail" >
                <br><br>
                <input class="knop" type="submit" value="Submit">
                <br><br>   
            </form>
            <button class="knop" onclick="linken()">back</button>
            <br>  
        </div>
        <?php
        // connecten met database aantekening_bas
//        $hostname = 'localhost';
//        $databasenaam = 'aantekening_bas';
//        $username = 'root';
//        $password = '';
//        //object connectie maken
//        $conn = new mysqli($hostname, $username, $password, $databasenaam);
        $conn = connectDB();
        // checken of data ingevult is

        if (isset($_REQUEST['Uname']) && isset($_REQUEST['password'])) {
            // variabele vullen query string om input weg te schrijven naar database
            $sql = "INSERT INTO `user`(`username`, `password`)VALUES('" . $_REQUEST['Uname'] . "','" . $_REQUEST['password'] . "')";
            $conn->query($sql);                                             // uitvoeren query string voor tabel user
            $sql2 = "INSERT INTO `personalia`(`Firstname`, `Lastname`,`E-mail`)VALUES('" . $_REQUEST['fname'] . "','" . $_REQUEST['lname'] . "','" . $_REQUEST['usremail'] . "')";
            $conn->query($sql2);                                            // uitvoeren query string voor tabel personalia
        }
        ?> 
    </body>
</html>
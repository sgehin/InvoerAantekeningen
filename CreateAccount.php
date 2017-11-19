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
        <script>
            function validate(form) {
                fail = validateUname(form.Uname.value)
                fail += validatepassword(form.password.value)
                fail += validatefname(form.fname.value)
                fail += validatelname(form.lname.value)
                fail += validateusremail(form.usremail.value)
                if (fail == "")
                    return true
                    
                else {
                    alert(fail)
                    return false       
                }
            }
            function validateUname(field) {
                return(field == "") ? "No username was entered.\n" : ""
            }
            function validatepassword(field) {
                return(field == "") ? "No password was entered.\n" : ""
            }
            function validatefname(field) {
                return(field == "") ? "No firstname was entered.\n" : ""
            }
            function validatelname(field) {
                return(field == "") ? "No lasttname was entered.\n" : ""
            }
            function validateusremail(field) {
                return(field == "") ? "No e-mail was entered.\n" : ""
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

            <form action="CreateAccount.php" method="POST" onsubmit=" return validate(this)">
                <br><br>
                <b>Create a new account:</b><br><br>    
                <input type="text" placeholder="username" name="Uname" value="">
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
            <button class="knop" onclick="document.location ='Login.php'">back</button>
            <br>  
        </div>
        <?php
        $conn = connectDB();
        // checken of data ingevult is
        

        if (isset($_REQUEST['Uname']) && isset($_REQUEST['password'])) {
            $uname = mysql_fix_string($conn, $_REQUEST['Uname']);
            $password = mysql_fix_string($conn, $_REQUEST['password']);
            
            // variabele vullen query string om input weg te schrijven naar database
            $sql = "INSERT INTO `user`(`username`, `password`)VALUES('" . $uname . "','" . $password . "')";
            $conn->query($sql);                                             // uitvoeren query string voor tabel user
            $sql2 = "INSERT INTO `personalia`(`Firstname`, `Lastname`,`E-mail`)VALUES('" . $_REQUEST['fname'] . "','" . $_REQUEST['lname'] . "','" . $_REQUEST['usremail'] . "')";
            $conn->query($sql2);                                            // uitvoeren query string voor tabel personalia
        
            echo "<div class =LogForm2>Account created<div>";
        }
        
        
        ?> 
    </body>
</html>
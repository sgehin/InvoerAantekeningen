<!DOCTYPE html>
<?php include 'general.php'; ?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/inlogpic.png">
        <link rel="stylesheet" type="text/css" href="MyStyle.css">
        <script  src="headscript.js"></script>
        <title>@ YOUR SERVICE</title>
        <style>

        </style>
        <script>

        </script>

    </head>
    <body>
        <div class="header">
            <h1 id="head">@ YOUR SERVICE  </h1>
        </div>

        <ul>
            <li><a class="active" href=index.php>Home</a></li>
            <li><a href=workplace.php>Workplace</a></li>
            <li><a href=login.php>Sign in</a></li>
            <li><a href=createAccount.php>Sign up</a></li>
        </ul>

        <div class="LogForm">

            <form action="createAccount.php" method="POST" onsubmit=" return validate(this)">
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
            <button class="knop" onclick="inlog()">login</button>
            <br>  
        </div>
        <?php
            formInsert();    
        ?> 
    </body>
</html>
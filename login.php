<!DOCTYPE html>
<?php include 'general.php'; ?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/logo_bas.png" >
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
        <h1 id="head">@ YOUR SERVICE</h1>   
    </div>
    <ul>
        <li><a class="active" href=index.php>Home</a></li>
        <li><a href=workplace.php>Workplace</a></li>
        <li><a href=login.php>Sign in</a></li>
        <li><a href=createAccount.php>Sign up</a></li>
    </ul>
    <div class="LogForm"> 
        <form method="POST" action="login.php">
            <br><br>
            <b>Login into your account:</b>
            <br><br> 
            <input type="text" placeholder="Username" name="Uname" value="" required> 
            <br><br>
            <input type="password" placeholder="password" name="password" value="" required> 
            <br><br>
            <input class="knop" type="submit" value="Submit">
            <br><br>
        </form>
        <button class="knop" onclick="home()">back</button>
        <br>
    </div>
    <?php login(); ?>


</body>
</html>

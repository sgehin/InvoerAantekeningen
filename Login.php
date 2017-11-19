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
            <input type="text" placeholder="Username" name="Uname" value="" required> 
            <br><br>
            <input type="password" placeholder="password" name="password" value="" required> 
            <br><br>
            <input class="knop" type="submit" value="Submit">
            <br><br>
        </form>
        <button class="knop" onclick="document.location ='index.php'">back</button>
        <br>
    </div>
    <?php login();?>
    
        
</body>
</html>

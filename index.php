<!DOCTYPE html>

<?php include 'general.php'; ?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="notes">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="author" content="John Doe">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/inlogpic.png">
        <link rel="stylesheet" type="text/css" href="MyStyle.css">
        <title>@ YOUR SERVICE</title>
        <style>

        </style>
        <script>
            document.cookie = "username=Basie; Expires=mon, 11 Dec 2017 08:00:00 UTC;";
            domain = localhost;
            alert(document.cookie);
        </script>

    </head>
    <body>

        <div class="header">
            <h1 id="head" >@ YOUR SERVICE</h1>
        </div>
        <nav>
            <ul>
                <li><a class="active" href=index.php>Home</a></li>
                <li><a href=workplace.php>Workplace</a></li>
                <li><a href=login.php>Sign in</a></li>
                <li><a href=CreateAccount.php>Sign up</a></li>
            </ul>
        </nav>
        <div>
            <div id="welkom"><h1>Welcome
                <br>to the notes organisor
                </h1></div>
            <div id="pen">
                <br>
                <br>
                <img id="pen" src="img/inlogpic.png" alt="pen" >
            </div>
        </div>
    </body>
</html>

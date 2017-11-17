<!DOCTYPE html>
<!--
Doel website maken waar je op inlog en aantekeningen kunt invoeren op je personlijke pagina.
Deze worden opgeslagen in een database. 
Zoek functie om aantekeningen op te halen en te displayen.

Ssubdoel: improving layout setup
-->
<?php include 'general.php'; ?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="notes">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="author" content="John Doe">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/logo_bas.png" />
        <link rel="stylesheet" type="text/css" href="MyStyle.css">
        <script src="myscripts.js"></script>
        <title>myNotes</title>
        <style>

        </style>
        <script>

        </script>

    </head>
    <body>

        <header class="header"> <h1>MyNotes</h1></header>
        <nav>
            <ul>
                <li><a class="active" href=index.php>Home</a></li>
                <li><a href=login.php>Sign in</a></li>
                <li><a href=CreateAccount.php>Sign up</a></li>
                <li><a href=workplace.php>Workplace</a></li>
            </ul>
        </nav>

    </body>
</html>

<!DOCTYPE html>
<!--
Doel website maken waar je op inlog en aantekeningen kunt invoeren op je personlijke pagina.
Deze worden opgeslagen in een database. 
Zoek functie om aantekeningen op te halen en te displayen.

Subdoel: pagina maken met knoppen voor sign in en sign up
subdoel: formulier maken voor Create new account
subdoel: input wegschrijven naar twee verschillende tabellen in de database namelijke user en personalia (zie CreateAccount.php)
subdoel: improving layout setup
-->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
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
        <div class="header">
            <h1>MyNotes</h1>
        </div>

        <ul>
            <li><a class="active" href=index.php>Home</a></li>
            <li><a href=login.php>Sign in</a></li>
            <li><a href=CreateAccount.php>Sign up</a></li>
            <li><a href="#about">Workplace</a></li>
        </ul>

    </body>
</html>

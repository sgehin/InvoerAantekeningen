<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/logo_bas.png" />
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        <script src="myscripts.js"></script>
        <title>myNotes</title>
        <style>

        </style>
        <script>

        </script>

    </head>
    <body>

        <div>
            <table>
                <tr>
                    <td >
                        <img src="img/ogo bas.png" width="130px" Height="130px">
                    </td>
                    <td></td>
                    <td>
                        <h1 id="banner">MyNotes</h1>
                    </td>   
                    <?php
                    for ($x = 1; $x < 4; $x++) {
                        echo "<td></td>";
                    }
                    ?>
                    <td><form action="Login.php"><input type="submit" class="button" value="sign in"></form></td><br>
                <td></td><br>
                <td><form action="CreateAccount.php"><input type="submit" class="button" value="sign up"></form></td><br>
                </tr>
            </table>
        </div>
        <table>
            <tr>
                <td>
                    <pre>
                            <form method="GET">
                                <br><br>
                                                <b>Create a new account:<br>
                                                                 <input type="hidden" name="hidden" value="bas">                         
                            Username:   <input type="text" name="Uname" value="" >     password:   <input type="password" name="password" value=""><br>
                            Firstname:  <input type="text" name="fname" value="" ><br> 
                            Lastname:   <input type="text" name="lname" value="" ><br> 
                            E-mail:     <input type="email" name="usremail" ></b><br>
                            
                                        <input type="submit">       <button id="knop" type="submit" formaction="index.php">back</button>
                            </form>
                                                             
                    </pre>
                </td>
            </tr>
        </table>
        <?php
        // connecten met database aantekening_bas
        $hostname = 'localhost';
        $databasenaam = 'aantekening_bas';
        $username = 'root';
        $password = '';
        //object connectie maken
        $conn = new mysqli($hostname, $username, $password, $databasenaam);
        // checken of data ingevult is
        if (isset($_GET['Uname']) && isset($_GET['password'])) {
            // variabele vullen query string om input weg te schrijven naar database
            $sql = "INSERT INTO `user`(`username`, `password`)VALUES('" . $_GET['Uname'] . "','" . $_GET['password'] . "')";
            $conn->query($sql);                                             // uitvoeren query string voor tabel user
            $sql2 = "INSERT INTO `personalia`(`Firstname`, `Lastname`,`E-mail`)VALUES('" . $_GET['fname'] . "','" . $_GET['lname'] . "','" . $_GET['usremail'] . "')";
            $conn->query($sql2);                                            // uitvoeren query string voor tabel personalia
        }
        ?> 
    </body>
</html>
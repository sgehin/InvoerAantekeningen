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

      
        <table>
            <tr>
                <td>
                    <pre>
                            <form method="GET">
                                <br><br>
                                                <b>login into account:<br>
                                                                 <input type="hidden" name="hidden" value="bas">                         
                            Username:   <input type="text" name="Uname" value="" >     password:   <input type="password" name="password" value=""><br>
                                                    
                                        <input id="knop" type="submit">                                  <button id="knop" type="submit" formaction="index.php">back</button>     
                            </form>
                                                          
                    </pre>
                </td>
            </tr>
        </table>


        <?php
        if (isset($_REQUEST['Uname']) && isset($_REQUEST['password'])) {
            $testUser = $_REQUEST['Uname'];
            $testpassWord = $_REQUEST['password'];
        }
        // connecten met database aantekening_bas
        $hostname = 'localhost';
        $databasenaam = 'aantekening_bas';
        $username = 'root';
        $password = '';
        //object connectie maken
        $conn = new mysqli($hostname, $username, $password, $databasenaam);
        // checken of data ingevult is
        if (isset($_REQUEST['Uname']) && isset($_REQUEST['password'])) {
            // variabele vullen query string om input op te halen van database
            $sql = "SELECT `id`, `username`, `password` FROM `user` WHERE `username`='" . $testUser . "'";

            $result = $conn->query($sql);            // uitvoeren query string voor ophalen tabel user en resultset in variable zetten
            for ($x = 0; $x < $result->num_rows; $x++) {
                $huidigeRecord = $result->fetch_assoc();
                if ($testUser == $huidigeRecord['username'] && $testpassWord == $huidigeRecord['password']) {
                    echo "login succesfull";
                } else if ($testUser != $huidigeRecord['username'] xor $testpassWord != $huidigeRecord['password']) {
                    echo "Username or password is incorrect";
                }
            };
        };
        ?>
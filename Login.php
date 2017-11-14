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
                                                <b>login into account:<br>
                                                                 <input type="hidden" name="hidden" value="bas">                         
                            Username:   <input type="text" name="Uname" value="" >     password:   <input type="password" name="password" value=""><br>
                                                    
                                        <input type="submit">                                  <button id="knop" type="submit" formaction="index.php">back</button>     
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
                                        if($testUser==$huidigeRecord['username'] && $testpassWord==$huidigeRecord['password']){
                                            echo "login succesfull";
                                        }else if($testUser!=$huidigeRecord['username'] xor $testpassWord!=$huidigeRecord['password']){
                                            echo "Username or password is incorrect";
                                        }
                                    };
                                };    
                                ?>
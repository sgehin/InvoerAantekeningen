<html>
    <head>
        <script>
            function workplace() {
                document.location = "workplace.php";
            }
        </script>   

    </head>



    <body>
        <?php
        function connectDB() {
        $hostname = 'localhost';
        $databasenaam = 'aantekening_bas';
        $username = 'root';
        $password = '';
        //object connectie maken
        $conn = new mysqli($hostname, $username, $password, $databasenaam);
        //error in connect stop instructie
    if ($conn->connect_error) die($conn->connect_error);
        return $conn;
        }

        function login() {
        if (isset($_REQUEST['Uname']) && isset($_REQUEST['password'])) {
        $testUser = $_REQUEST['Uname'];
        $testpassWord = $_REQUEST['password'];
        }

        $conn = connectDB();
        // checken of data ingevult is
        if (isset($_REQUEST['Uname']) && isset($_REQUEST['password'])) {
        // variabele vullen query string om input op te halen van database
        $sql = "SELECT `id`, `username`, `password` FROM `user` WHERE `username`='" . $testUser . "'";

        $result = $conn->query($sql);            // uitvoeren query string voor ophalen tabel user en resultset in variable zetten
        for ($x = 0;
        $x < $result->num_rows;
        $x++) {
        $huidigeRecord = $result->fetch_assoc();
        }
        if (isset($_REQUEST['Uname']) && isset($_REQUEST['password'])) {
        $testUser = $_REQUEST['Uname'];
        $testpassWord = $_REQUEST['password'];
        
        }
        if ($testUser == $huidigeRecord['username'] && $testpassWord == $huidigeRecord['password']) {
          echo "<div class =LogForm2><button class=knop onclick=document.location='workplace.php'>To your workplace</button><div>";                  

        //echo "<div class=LogForm2 id=loginSuccesfull>login succesfull<div>";
        } else if ($testUser != $huidigeRecord['username'] or $testpassWord != $huidigeRecord['password']) {
        echo "<div class =LogForm2 >login failed<div>";
        }
        }
        }
        ?>
    </body>
</html>


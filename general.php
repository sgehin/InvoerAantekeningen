<?php


function connectDB(){
        $hostname = 'localhost';
        $databasenaam = 'aantekening_bas';
        $username = 'root';
        $password = '';
        //object connectie maken
        $conn = new mysqli($hostname, $username, $password, $databasenaam);
        return $conn;

}
function login(){
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
        for ($x = 0; $x < $result->num_rows; $x++) {
            $huidigeRecord = $result->fetch_assoc();
        }

        if ($testUser == $huidigeRecord['username'] && $testpassWord == $huidigeRecord['password']) {
            echo "<div class=LogForm2 id=loginSuccesfull>login succesfull<div>";
        } else if ($testUser /=$huidigeRecord['username'] or $testpassWord == $huidigeRecord['password']) {
            echo "<div class =LogForm2>login failed<div>";
            
        }
    }
    }
?>




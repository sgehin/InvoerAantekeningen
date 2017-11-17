<?php

// temp opslag username en password
//    function tempVar(){
//            $username=$_GET['username'];
//            $password=$_GET['password']; 
//            $Date=$_GET['DateOfBirth'];       
//        $handle = fopen('fileTemp.txt','w');
//            fwrite($handle,.$username."\n");
//            fwrite($handle,.$password."\n");
//            fwrite($handle,.$lname."\n");
//            fwrite($handle,.$Date."\n");
//        fclose($handle);
//return echo "Test for filling out the form.";
//   }
// navigationbar
// connecten met database aantekening_bas
function connectDB(){
        $hostname = 'localhost';
        $databasenaam = 'aantekening_bas';
        $username = 'root';
        $password = '';
        //object connectie maken
        $conn = new mysqli($hostname, $username, $password, $databasenaam);
        return $conn;

}
?>




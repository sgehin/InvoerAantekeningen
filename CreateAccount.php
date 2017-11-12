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
                    <img src="img/ogo bas.png" width="200px" Height="200px">
                  </td>
                       <td></td>
                  <td>
                      <h1 id="banner">MyNotes</h1>
                  </td>    
                        <?php
                            for ($x=1;$x<4;$x++){
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
                            <form method="POST">
                                <br><br>
                                                <b>Create a new account:<br>
                                                                 <input type="hidden" name="hidden" value="bas">                         
                            Username:   <input type="text" name="Uname" value="" required><br>
                            Firstname:  <input type="text" name="fname" value="" required><br>
                            Lastname:   <input type="text" name="lname" value="" required><br>
                            E-mail:     <input type="email" name="usremail" required></b><br>
                            
                                        <input type="submit">
                            </form>                                   
                        </pre>
                    </td>
                </tr>
            </table>
                     <?php
                    $ID=$_POST['hidden'];
                    $Uname=$_POST['Uname'];$fname=$_POST['fname'];$lname=$_POST['lname'];$usremail=$_POST['usremail'];
                        $Handle = fopen('fileTest.txt','a');
                        fwrite($Handle,'IDnr       : '.$ID."\n");
                        fwrite($Handle,'Username   : '.$Uname."\n");
                        fwrite($Handle,'Firstname  : '.$fname."\n");
                        fwrite($Handle,'Lasttname  : '.$lname."\n");
                        fwrite($Handle,'E-mail     : '.$usremail."\n");
                        fwrite($Handle,'-----------------------------------------'."\n");
                        fclose($Handle);
                        
           ?> 
    </body>
</html>

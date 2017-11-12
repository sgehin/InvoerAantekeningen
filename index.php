<!DOCTYPE html>
<!--
Doel website maken waar je op inlog en aantekeningen kunt invoeren op je personlijke pagina.
Deze worden opgeslagen in een database. 
Zoek functie om aantekeningen op te halen en te displayen.

Subdoel: pagina maken met knoppen voor sign in en sign up
-->
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
                        }
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

                                                           
                    </pre>
                </td>
            </tr>
        </table>
           
    </body>
</html>

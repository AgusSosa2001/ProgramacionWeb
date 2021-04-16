<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="EstilosPracticos.css" rel="stylesheet" type="text/css">
</head>

<body>

  <h2>ITS</h2>
  <h3>3°IA</h3>
  <h3>Sosa, Agustina</h3>


  <table border="1" align="center">
    <?php
     echo "<tr>";
     for ($cabecera="0";$cabecera<=10;$cabecera++){
                 echo "<th>";
                 echo $cabecera;
                 echo "</th>";
     }
     echo "</tr>";
     for ($x = 1; $x <=10; $x++){
                echo "<tr>";
                echo "<th>";
                echo $x;
                echo "</th>";
                     for ($y=1;$y<=10;$y++){                      
                             $resultado= pow($x,$y);                    
                             echo "<td>";                      
                             echo $resultado;                      
                             echo "</td>";              
                     }              
             echo "</tr>";          
             }      
?>
  </table>


</body>

</html>
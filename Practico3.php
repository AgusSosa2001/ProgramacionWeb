<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="Practico3.css" rel="stylesheet" type="text/css">
</head>

<body>

  <h2>ITS</h2>
  <h3>3°IA</h3>
  <h3>Sosa, Agustina</h3>

  <table border="1" align="center">
    <?php
      
      $num=0;
      $s=0;
      $c=0;
      echo "<tr>";
      echo "<th class='background'> Valor </th>";
      echo "<th class='background'> Seno </th>";
      echo "<th class='background'> Coseno </th>";
      echo "</tr>";
     
      for($m=1; $m<=25; $m++){
           
            $s= sin ( deg2rad ($num));
            $c= cos ( deg2rad ($num)); 
            echo"<tr>";  
            
            echo"<td class='background'>$num</td>";
            if ($s < 0) {
            echo"<td class='negativo'>$s</td>";
          }else {
            echo"<td>$s</td>";
          }
          if ($c < 0) {
            echo"<td class='negativo'>$c</td>";
          }else {
            echo"<td>$c</td>";
          }
           
            echo"</tr>";
            $num+=15;
           } 
?>

  </table>
</body>

</html>
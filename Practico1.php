<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practico 1</title>
</head>

<body>

  <h2>ITS</h2>
  <h3>3°IA</h3>
  <h3>Sosa, Agustina</h3>

  <h1>Primer secuencia:</h1>
  <?php
  $a = 0;
  while ($a < 20) {
    $a++;
    if ($a % 2 ==1) {
      echo "$a ";
  }
} 
?>

  <h1>Segunda secuencia:</h1>
  <?php 
    $b = 0;
    while ($b < 125) {
      echo "$b ";
      $b = $b+5;
    }
  ?>

  <h1>Tercera secuencia:</h1>

  <?php 
    $seven_counter = 1;
    $direction = 'asc';
    $count = true;

    while ($count) {
      echo "$seven_counter ";

      if ($direction == 'asc') {
        $seven_counter += 7;
      }
      if ($direction == 'desc') {
        $seven_counter -= 7; 
      }
      if ($seven_counter == 57) {
        $direction = 'desc';
      }
      if ($seven_counter < 1) {
        $count = false;
      }
    }
  ?>

  <h1>Cuarta secuencia:</h1>
  <?php

$num=1;
$num2=1;
$fila= 6;
$ast =" * ";

while($num<$fila){
    $resultado = $num++;
    if($num2<$resultado){
        $resultado++;
            echo $ast." ";
        }
    echo "";
}

?>
  <br>
  <?php

$num=1;
$num2=1;
$fila= 5;
$ast =" * ";

while($num<$fila){
    $resultado = $num++;
    if($num2<$resultado){
        $resultado++;
            echo $ast." ";
        }
    echo "";
}

?>
  <br>
  <?php

$num=1;
$num2=1;
$fila= 4;
$ast =" * ";

while($num<$fila){
    $resultado = $num++;
    if($num2<$resultado){
        $resultado++;
            echo $ast." ";
        }
    echo "";
}

?>
  <br>
  <?php

$num=1;
$num2=1;
$fila= 3;
$ast =" * ";

while($num<$fila){
    $resultado = $num++;
    if($num2<$resultado){
        $resultado++;
            echo $ast." ";
        }
    echo "";
}

?>
  <br>

  <?php

$num=1;
$num2=1;
$fila= 4;
$ast =" * ";

while($num<$fila){
    $resultado = $num++;
    if($num2<$resultado){
        $resultado++;
            echo $ast." ";
        }
    echo "";
}

?>
  <br>
  <?php

$num=1;
$num2=1;
$fila= 5;
$ast =" * ";

while($num<$fila){
    $resultado = $num++;
    if($num2<$resultado){
        $resultado++;
            echo $ast." ";
        }
    echo "";
}

?>
  <br>
  <?php

$num=1;
$num2=1;
$fila= 6;
$ast =" * ";

while($num<$fila){
    $resultado = $num++;
    if($num2<$resultado){
        $resultado++;
            echo $ast." ";
        }
    echo "";
}

?>
  <br>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Prueba diagnostica</title>
</head>
<header>
  <h1>Soluciones</h1>
</header>
<div>
  <h2>Ejercicio N°6</h2>

  <body>
    <h1>Parte A</h1>
    <?php 
  $a=1; //valor inicial
  while($a <= 10){
    echo " $a ";
    $a++;
  }
  ?>
    <br>
    <h1>Parte B</h1>
    <?php
  $b=100;
  while ($b >= 10){
    echo " $b "; 
    $b -=10;
  }
?>
    <br>
    <h1>Parte C</h1>
    <?php 
$c=2;
$dif=2;
while ($c >=2){
if($c==12){
$dif=-2;
}
echo "$c ";
$c+=$dif;
}
?>
</div>
</body>

</html>
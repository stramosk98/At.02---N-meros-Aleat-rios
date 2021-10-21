<!DOCTYPE html>
<?php
  $pc = rand(1, 6);
  $pc1 = rand(1, 6);
  
  $user = rand(1, 6);
  $user1 = rand(1, 6);

  $computador = ($pc + $pc1);
  $usuario = ($user + $user1);
?>
<html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Dados</title>
</head>
<body>
  <form action="" method="post">
    <input type="submit" name="dados" value="Jogar Dados">
  </form>
  <?php
  
 if (isset($_POST ['dados'])) : ?>

 <?php
 echo "Computador: ";
 echo "<img src='dados/$pc.png' alt=''>";
 echo "<img src='dados/$pc1.png' alt=''>";
 echo "Soma dos dados do Computador: ".$computador;
 ?><br /><?php

 
 echo "Usuário: ";
 echo "<img src='dados/$user.png' alt=''>";
 echo "<img src='dados/$user1.png' alt=''>";
 echo "Soma dos dados do Usuário: ".$usuario;
 ?><br /><?php


if($usuario < $computador){
    ?><br /><?php
    echo "Computador ganhou.";
}
if($usuario > $computador){
    ?><br /><?php
    echo "Usuário ganhou.";
}
if($usuario === $computador){
    ?><br /><?php
    echo "Empate.";
}
 endif
 ?>
</body>

</html>
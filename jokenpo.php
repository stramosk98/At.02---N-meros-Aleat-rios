<!DOCTYPE html>
<?php
  $pc = rand(1, 3);
?>
<html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Jokenpo</title>
</head>
<body>
  <form action="" method="post">
  <input type="radio" name="mao" value="pedra" required/>Pedra
    <input type="radio" name="mao" value="papel" required/> Papel
    <input type="radio" name="mao" value="tesoura" required/>Tesoura
    <input type="submit" name="jokenpo" value="Jogar">
  </form>
  <?php
 if (isset($_POST ['jokenpo'])) : ?>

 <?php
 echo "Computador: ";
 echo "<img src='maos/$pc.png' alt=''>";
 ?><br /><?php

 echo "Usuário: ";
if((isset($_POST ['mao']) ? $_POST['mao'] : "") == "pedra"){
   $user= 2;
 echo "<img src='maos/$user.png' alt=''>";
}
if((isset($_POST ['mao']) ? $_POST['mao'] : "") == "tesoura"){
   $user= 1;
    echo "<img src='maos/$user.png' alt=''>";
   }
   if((isset($_POST ['mao']) ? $_POST['mao'] : "") == "papel"){
   $user= 3;
    echo "<img src='maos/$user.png' alt=''>";
   }
   ?><br /><?php

 if($user === 1 and $pc === 1){
    ?><br /><?php 
    echo "Empatou.";
 }
 if($user === 2 and $pc === 2){
    ?><br /><?php
    echo "Empatou.";
}
if($user === 3 and $pc === 3){
    ?><br /><?php
    echo "Empatou.";
}
 if($user === 2 and $pc === 1){
    ?><br /><?php
    echo "Usuário ganhou.";
}
if($user === 3 and $pc === 1){
    ?><br /><?php
    echo "Computador ganhou.";
}
if($user === 1 and $pc === 2){
    ?><br /><?php
    echo "Computador ganhou.";
}
if($user === 1 and $pc === 3){
    ?><br /><?php
    echo "Usuário ganhou.";
}
if($user === 2 and $pc === 3){
    ?><br /><?php
    echo "Computador ganhou.";
}
if($user === 3 and $pc === 2){
    ?><br /><?php
    echo "Usuário ganhou.";
}

endif;
 ?>

</body>

</html>
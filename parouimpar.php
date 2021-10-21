<!DOCTYPE html>
<?php
  $pc = rand(1, 10);

?>
<html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>ParouÍmpar</title>
</head>
<body>
  <form action="" method="post">
  <input type="radio" name="name" value="par" required/>Par
    <input type="radio" name="name" value="impar" required/>Ímpar<br>
    <input type="number" name="num" value="num">
    <input type="submit" name="parouimpar" value="Jogar">
  </form>
  <?php
 if (isset($_POST ['parouimpar'])) : ?>
 
 <?php

   

 echo "Computador: ";
 echo "<img src='dedos/$pc.png' alt=''>";
 ?><br /><?php

 echo "Usuário: ";
if((isset($_POST ['num']) ? $_POST['num'] : "") == "1"){
   $user= 1;
 echo "<img src='dedos/$user.png' alt=''>";
}
if((isset($_POST ['num']) ? $_POST['num'] : "") == "2"){
   $user= 2;
    echo "<img src='dedos/$user.png' alt=''>";
}
 if((isset($_POST ['num']) ? $_POST['num'] : "") == "3"){
 $user= 3;
    echo "<img src='dedos/$user.png' alt=''>";
   }
   if((isset($_POST ['num']) ? $_POST['num'] : "") == "4"){
    $user= 4;
     echo "<img src='dedos/$user.png' alt=''>";
    }
    if((isset($_POST ['num']) ? $_POST['num'] : "") == "5"){
        $user= 5;
         echo "<img src='dedos/$user.png' alt=''>";
        }
        if((isset($_POST ['num']) ? $_POST['num'] : "") == "6"){
            $user= 6;
             echo "<img src='dedos/$user.png' alt=''>";
            }
            if((isset($_POST ['num']) ? $_POST['num'] : "") == "7"){
                $user= 7;
                 echo "<img src='dedos/$user.png' alt=''>";
                }
                if((isset($_POST ['num']) ? $_POST['num'] : "") == "8"){
                    $user= 8;
                     echo "<img src='dedos/$user.png' alt=''>";
                    }
                    if((isset($_POST ['num']) ? $_POST['num'] : "") == "9"){
                        $user= 9;
                         echo "<img src='dedos/$user.png' alt=''>";
                        }
                        if((isset($_POST ['num']) ? $_POST['num'] : "") == "10"){
                            $user= 10;
                             echo "<img src='dedos/$user.png' alt=''>";
                            }
                            $soma = ($pc + $user);
                            echo "A soma dos dois jogadores: ".$soma;
                           ?><br /><?php
   
 if(($soma % 2 == 0) && (isset($_POST ['name']) ? $_POST['name'] : "") == "par"){ 
    ?><br /><?php 
    echo "Usuário Ganhou!.";
 }
 if(($soma % 2 == 1) && (isset($_POST ['name']) ? $_POST['name'] : "") == "impar"){
    ?><br /><?php 
    echo "Usuário Ganhou!.";
}
else {
    ?><br /><?php
    echo "Computador Ganhou!.";
}

endif;
 ?>

</body>

</html>
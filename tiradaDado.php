<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tirada de dado</title>
  </head>
  <body>
    <?php
    //incluimos la clase
    include 'claseDado.php';

    //generación de objetos
    $dado1=new claseDado();

    //tiramos 12 veces
     echo 'TIRAMOS EL DADO 12 VECES';
     echo '<br>';
    echo 'Los numeros aleatorios que han salido son:';
     for ($i=1; $i <= 12; $i++) {
      echo '<br>';
      echo $dado1->tirarDado();

    }

    ?>





  </body>
</html>

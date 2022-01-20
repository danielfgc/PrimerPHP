<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SitioWeb</title>
</head>
<body>
    <?php
        echo "<h2>Variables y constantes.</h2>";
        define("Const1","dato de ejemplo");
        const pi = 3.14159;
        //echo "La constante Const1 es: ".constant("Const1");
        echo "La constante Const1 es: ".Const1;
        
        $numero = 5;
        $numero++;
        echo "<p>El numero es ".$numero."</p>";//pinta 6
        echo "<p>El numero es ".$numero++."</p>";//pinta 6 y luego incrementa
        echo "<p>El numero es ".++$numero."</p>";//pinta 8
        
        echo"<hr>";
        echo "<h3>Operadores.</h3>";

        $numero1 = 10;
        $numero2 = 15;

        if($numero1>=$numero2){
            echo "<p>El primer numero es mayor </p>";
        }else{
            echo "<p>El primer numero es menor </p>";
        }

        $aprobado = true;

        if(!$aprobado){
            echo "<p>Has aprobado.</p>";
        }else{
            echo "<p>NA: no apto por no se que.</p>";
        }
        $nota="8";

        if($nota == 8){
            echo "<p>Tu nota es un 8 - notable </p>";
        }else{
            echo "<p>Tu nota no es un 8.</p>";
        }

        echo"<hr>";
        echo "<h3>Estructuras de control.</h3>";
        for($i=0; $i<=10; $i++){
            echo "<span>".$i."</span>";
        }
        echo "<br>";
        $a = 0;

        while($a<=10){
            echo "<span>".$a++."</span>";
        }
        


    
    
    ?>
</body>
</html>
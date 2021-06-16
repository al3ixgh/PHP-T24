<?php
    //Ejercicio 1
    echo "Ejercicio 1";
    $entero = 10;
    $real = 5.5;
    $cadena = "esto es una cadena";
    $booleano = true;
    echo "<br>";
    echo $entero;
    echo "<br>";
    echo $real;
    echo "<br>";
    echo $cadena;
    echo "<br>";
    echo $booleano;
    echo "<br>";

    //Ejercicio 2
    echo "<br> Ejercicio 2 <br>";
    $n1 = 1;
    $n2 = 3;
    $n3 = 5;
    $cad = "el primer numero es $n1, el segundo es $n2 y el tercero es $n3";
    echo $cad;
    echo "<br>";
    //Ejercicio 3
    echo "<br> Ejercicio 3 <br>";
    $random=random_int(1, 3);
    switch ($random){
        case 1:
            echo "uno";
            break;
        case 2:
            echo "dos";
            break;
        case 3:
            echo "tres";
            break;
    }
    echo "<br>";

    //Ejercicio 4
    echo "<br> Ejercicio 4 <br>";
    $numero1 = random_int(1,50);
    $numero2 = random_int(1,50);

    $suma = $numero1+$numero2;
    $resta = $numero1-$numero2;
    $mult = $numero1*$numero2;
    $div = $numero1/$numero2;
    $mod = $numero1%$numero2;
    echo "los numeros son $numero1 y $numero2 <br>";
    echo "la suma de los numeros es $suma <br>";
    echo "la resta de los numeros es $resta <br>";
    echo "la multiplicación de los numeros es $mult <br>";
    echo "la division de los numeros es $div <br>";
    echo "El resto de los numeros es $mod <br>";
    echo "<br>";

    //Ejercicio 5
    echo "<br> Ejercicio 5 <br>";
    $N = 5;
    $A = 4.56;
    $C = "a";
    echo "N = $N <br>";
    echo "A = $A <br>";
    echo "C = $C <br>";
    echo "$N + $A = ".$N+$A;
    echo "<br>";
    echo "$A - $N = ".$A-$N;
    echo "<br>";
    echo ord($C);
    echo "<br>";

    //Ejercicio 6
    echo "<br> Ejercicio 6 <br>";
    $X = random_int(1,50);
    $Y = random_int(1,50);
    $N = 10.55;
    $M = 31.123;

    echo $X;
    echo "<br>";
    echo $Y;
    echo "<br>";
    echo $N;
    echo "<br>";
    echo $M;
    echo "<br>";
    echo $X + $Y;
    echo "<br>";
    echo $X-$Y;
    echo "<br>";
    echo $X*$Y;
    echo "<br>";
    echo $X/$Y;
    echo "<br>";
    echo $X%$Y;
    echo "<br>";
    echo $N+$M;
    echo "<br>";
    echo $N-$M;
    echo "<br>";
    echo $N*$M;
    echo "<br>";
    echo $N/$M;
    echo "<br>";
    echo $N%$M;
    echo "<br>";
    echo $X+$N;
    echo "<br>";
    echo $Y/$M;
    echo "<br>";
    echo $Y%$M;
    echo "<br>";
    echo $X*2 . $Y*2 . $M*2 . $N*2;
    echo "<br>";
    echo $X+$Y+$M+$N;
    echo "<br>";
    echo $X*$Y*$M*$N;
    echo "<br>";

    //Ejercicio 7
    echo "<br> Ejercicio 7 <br>";
    $N=random_int(1,50);
    $N=$N+77;
    $N=$N-3;
    $N=$N*2;
    echo $N;
    echo "<br>";

    //Ejercicio 8
    echo "<br> Ejercicio 8 <br>";
    $A=random_int(1,50);
    $B=random_int(1,50);
    $C=random_int(1,50);
    $D=random_int(1,50);
    $B=$C;
    $C=$A;
    $A=$D;
    $D=$B;

    echo $A;
    echo "<br>";
    echo $B;
    echo "<br>";
    echo $C;
    echo "<br>";
    echo $D;
    echo "<br>";

?>
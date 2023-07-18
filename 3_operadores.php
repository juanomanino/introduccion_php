<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <h1>Operadores</h1>

    <?php
    /*Operadores aritméticos
    Suma (+): Se utiliza para sumar dos valores.
    Ejemplo: $resultado = 5 + 3; // El valor de $resultado será 8.

    Resta (-): Se utiliza para restar un valor de otro.
    Ejemplo: $resultado = 7 - 2; // El valor de $resultado será 5.

    Multiplicación (*): Se utiliza para multiplicar dos valores.
    Ejemplo: $resultado = 4 * 2; // El valor de $resultado será 8.

    División (/): Se utiliza para dividir un valor entre otro.
    Ejemplo: $resultado = 10 / 2; // El valor de $resultado será 5.

    Módulo (%): Devuelve el resto de la división de un valor por otro.
    Ejemplo: $resultado = 7 % 3; // El valor de $resultado será 1.

    Exponenciación (**): Se utiliza para elevar un valor a una potencia.
    Ejemplo: $resultado = 2 ** 3; // El valor de $resultado será 8.
-----------------------------------------------------------------
    Operadores de comparación
    Igual (==): Compara si dos valores son iguales, sin tener en cuenta el tipo de dato.
    Ejemplo: $resultado = (10 == '10'); // El valor de $resultado será true.

    Idéntico (===): Compara si dos valores son iguales, teniendo en cuenta el tipo de dato.
    Ejemplo: $resultado = (10 === '10'); // El valor de $resultado será false.

    Diferente (!= o <>): Compara si dos valores son diferentes, sin tener en cuenta el tipo de dato.

    $numero1 = 5;
    $numero2 = '5';
    $resultado = $numero1 != $numero2; // El valor de $resultado será false


    No idéntico (!==): Compara si dos valores son diferentes, teniendo en cuenta el tipo de dato.
    $numero1 = 5;
    $numero2 = '5';
    $resultado = $numero1 !== $numero2; // El valor de $resultado será true


    Mayor que (>), Mayor o igual que (>=), Menor que (<), Menor o igual que (<=): Comparan si un valor es mayor, mayor o igual, menor o menor o igual que otro valor, respectivamente.
    $numero1 = 10;
    $numero2 = 5;
    $resultado = $numero1 > $numero2; // El valor de $resultado será true


-----------------------------------------------------------------

    Operadores lógicos
    Y lógico (&&): Devuelve true si ambas condiciones son verdaderas.
    Ejemplo: $resultado = (5 > 3 && 2 < 4); // El valor de $resultado será true.

    O lógico (||): Devuelve true si al menos una de las condiciones es verdadera.
    Ejemplo: $resultado = (5 > 3 || 2 > 4); // El valor de $resultado será true.

    Negación lógica (!): Niega el valor de una condición, si es verdadero devuelve false y viceversa.
    Ejemplo:$condicion = true;
    $resultado = !$condicion; // El valor de $resultado será false

-----------------------------------------------------------------

    Operadores de unión de cadenas
    Punto (.) : Se utiliza para concatenar dos cadenas de texto.
    Ejemplo: $nombreCompleto = 'Juan' . ' ' . 'Pérez'; // El valor de $nombreCompleto será 'Juan Pérez'.
    */

    

    echo "<h1>Aritmético</h1>";
    /*Aritmetico Operadores 
    Suma:+
    Resta:-
    Multiplicación:*
    División:/
    Módulo:%
    Incremento:++
    Decremento:--
    Exponenciación:**
    */
    echo "<b><h1>";

    
    $x=9;
    echo ("x=".$x."<br>");
    $y=3;
    echo ("y=".$y."<br>");

    $z=5;
    echo ("z=".$z."<br>");

    $suma=$x+$y;
    echo ("suma=".$suma."<br>");

    $resta=$x-$z;
    echo ("resta=".$resta."<br>");

    $multiplicacion=$suma*$resta;

    echo ("multiplicacion=".$multiplicacion."<br>");

    $final=$multiplicacion++;
    echo ("final=".$final."<br>");

    echo ("multiplicacion=".$multiplicacion."<br>");


    echo "</b></h1>";
    
    
    $a=4;
    $b=2;
    
    echo "<b><h1>";

    echo($a);

    echo(" y ". $b);
    echo "<br>";


    echo("Suma:" .$a+$b ." </br>Resta: ". $a-$b. "</br>Multiplicación:" .$a*$b ."</br>División:" .$a/$b );
    echo "</br></h1>";
    
    echo "<br>--------------------------------------------------------------";


    echo "<h1>Operadores de Comparación</h1>";
    //Igual:==
    //Identico:===
    //Diferente:!=
    //Mayor:>
    //Menor:<
    //Menor o igual:<=
    //Mayor o igual:>=

    $x=5;
    $y=4;
    echo ($x==$y);
    echo ($x>=$y);



    




    $a=10;
    $b="10";

    echo "<b><h1>";

    echo($a);
    echo "<br>";

    echo($b);
    echo "<br>";

    $c=($a==$b);

    echo "El resultado es: " . ($c ? "true" : "false");


    echo "</br></h1>";
    

    echo "<br>--------------------------------------------------------------";


    echo "<h1>Lógico</h1>";
    // AND o &&: $a && $b es True si $a y $b sn verdaders
    // OR o ||:$a || $b es True si $a o $b sn verdaders
    //XOR: $a XOR $b es True si si $a es verdadero o $b es verdadero, no los dos.
    //!:!$a es True si $a es False
    $x=4;
    $y=5;

    if(($x==4)&&($y==5)){
        print("Estás en lo correcto");
    }
    echo "<br>";
    if(($x==4) OR ($y==3)){
        print("La segunda es correcta");
    }
    echo "<br>";







    echo "<b><h1>";

    $c = (5 > 3 && 2 < 4);
    echo($c ? "true" : "false");
    echo "</b></h1>";

    echo "<br>---------------------------------------------------------------";



    echo "<h1>Unión (concatenación) de cadenas</h1>";

    //Para la unión de cadenas se emplea el punto (.)

    $t="Ejemplo";
    $w='union';
    $x='de';
    $y='cadenas';
    $z=' ';
    $resultado1=$t;
    $resultado2=$t.$z.$x.$z.$w.$z.$x.$z.$y;
    echo '<b><h1>';
    echo $resultado1;
    echo '<hr>';
    echo $resultado2;
    echo '</b></h1>';









    $a="Ho";
    $b="la ";
    $c="Mundo";



    echo "<b><h1>";
    echo($a.$b.$c);
    echo "</b></h1>";



    ?>



</body>
</html>
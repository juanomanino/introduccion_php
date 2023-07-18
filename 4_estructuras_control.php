<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras de control</title>
</head>
<body>
    <h1>Estructuras de control</h1>

    <?php
    /*Mi parte

    If , else and If-else:
        If permite la ejecución condicional de fragmentos de código.if ($x > $y) {

        Las sentencias if se pueden incluir unas dentro de otras indefinidamente.
        Ejemplo:
        if ($x > $y) {
            echo "$x es mayor que $y";
        }    

        Else permite ejecutar una sentencia cuando otra no se cumple. else extiende una sentencia if, 
        y se ejecuta cuando ésta es false.
        Por ejemplo:
        if ($x > $y) {
            echo "$x es mayor que $y";
        } else {
            echo "$y es mayor que $x";
        }


        el Else If Es una combinación entre if y else. Se ejecuta cuando if es false, pero sólo si 
        la expresión condicional del elseif es true.
        Ejemplo: 
        if ($x > $y) {
            echo "$x es mayor que $y";
        } elseif ($x == $y) {
            echo "$x es igual que $y";
        } else {
            echo "$y es mayor que $x";
        }

    
    While and Do-While
        Es el tipo más sencillo de loop en PHP. Se ejecutan las sentencias dentro del while siempre y 
        cuando se evalúen como true. El valor de la expresión se comprueba cada vez al inicio del loop.
        Ejemplo: 
        $i = 1;
        while($i <= 10){
            echo $i;
            $i++;
        }
        
        Do While es muy similares a los loops while, simplemente aquí la expresión para el loop se verifica 
        al final en lugar de al principio, esto garantiza que el código se ejecute por lo menos la primera vez.
        Ejemplo:
        $i = 0;
        do {
            echo $i;
        } while ($i > 0);

    For
        Las expresiones o conjunto de expresiones van separadas por punto y coma ; y sólo hay 3.
        La primera expresión, $i = 1, se ejecuta una vez incondicionalmente al comienzo del bucle.
        La segunda expresión, $i <= 10, es una condición, si es true, se ejecutará la tercera expresión.
        La tercera expresión, $i++, es la acción a realizar si se cumple la segunda expresión.
        Cada una de las expresiones pueden estar vacías o contener múltiples expresiones, lo que resulta útil en ciertas ocasiones. Si la expresión 2 está vacía, el loop será definido como true.
            Ejemplo:
            for ($i = 1; $i <= 10; $i++) {
            echo $i;
        } // Devuelve 123456789

    
    Include 
        include incluye y ejecuta un archivo.

        Los archivos se incluyen en base a la ruta de acceso dada, y si no se proporciona ninguna, se utiliza 
        el include_path. Si el archivo tampoco se encuentra en el include_path se mirará en el propio 
        directorio desde donde se hace la llamada, antes de devolver un mensaje warning. Es en el tipo 
        de mensaje donde difiere con require, que devuelve un error fatal.
        Ejemplo:
        // archivo1.php
        $color = 'azul';
        // archivo2.php
        echo $color; // Devuelve un Notice: Undefined variable: color
        include 'archivo1.php';
        echo $color; // Devuelve azul




    Require
        require hace lo mismo que include pero en caso de fallar devuelve un error fatal de
        nivel E_COMPILE_ERROR, por lo que no puede continuar el script. include sólo emite
        un E_WARNING que permite continuar el script.

    
    
    Switch
        switch es como una serie de sentencias if. Es útil para comparar una misma variable o 
        expresión con valores direrentes y ejecutar un código diferente a otro dependiendo de esos valores.
        Ejemplo:
            switch ($i) {
                case "perro":
                    echo "\$i es un perro";
                    break;
                case "gato":
                    echo "\$i es un gato";
                    break;
                case "avestruz":
                    echo "\$i es un avestruz";
                    break;
            }

        
    
    
    */



    //if, if-else
    
    

    echo "<h1>If</h1>";

    //If-if else
    //Ejemplo 1
    $color="rojo";
    if($color="rojo"){
        print(("Efectivamente, el color es rojo"));
    }

    //Ejemplo 2
    echo "<br>";
    $x= 10;
    $y=15;
    if($x==$y){
        print("Son iguales");
    }elseif($x>$y){
        print("X es mayor que y");
    }elseif($x<$y){
        print("X es menor que y");
    }
    echo "<br>";

    

    //while
    //Indica que mientras no se cumpla una determinada condicion, no se saldra del bucle y no saltará a la
    //siguiente linea de codigo.
    //Ejemplo
    echo "<h1>While</h1>";

    $x=10;
    while(--$x)
    {
        echo "<big>";
        echo "<b>";
        print("Numero:".$x);
        echo"<br>";
        echo "<hr>";

    }


    //do-while
    //for
    //Sera utilizado para ejecutar un bucle un determinado numero de veces hasta que se cumpla una condicion
    echo"<br>";
    echo "<h1>For</h1>";

    for($x=5;$x<=10;$x++){
        print("Numero". $x."<br>");
    }

    //require
    //Sirve para incluir archvos en nuestras paginas y solo será necesario hacer referencia a este archivo
    //con la instruccion que se requiere. Se usa principalmente para definir variables, y estas estarán listas
    //una vez hagamos la llamada ala rchivo donde esten guardadas


    //include
    //Funciona igual que la función require(), con al diferencia de que si puede procesar el codigo 
    //tantas veces como la llamemos a esa pagina externa. Ejemplo:
    echo "<h1>Include</h1>";

    include("variables.php");
    echo "<br>";
    print("$x"."$z"."$y");

    //switch
    //Se utiliza para comprobar un dato entre varias posibilidades
    echo "<h1>Switch</h1>";

    

    $color="negro";
    echo "<br>";


    switch($color){
        case "blanco":
            $sector="claro";
            break;
        case "naranja":
            $sector="normal";
            break;

        case "negro":
            $sector="oscuro";
            break;
    }
    print($sector);







    ?>
    
</body>
</html>

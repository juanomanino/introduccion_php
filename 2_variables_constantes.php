<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables y Constantes</title>
</head>
<body>
    <h1>Varables y Constantes</h1>
    <!-- script php -->
    <?php
        /*1. La forma de representar las variables en php es anteponiendo el simbolo $ a la palabra
        que utilizaremos como variable. Ejemplo: $edad*/

        /*2. Debemos prestar atención a las mayúsculas y minúsculas, ya que PHP reconoce la diferencia 
        entre las dos. $valor es diferente de $VALOR */

        /*3. ¿Para qué se utilizank las variables? Gracias aellas podemos realizar operaciones 
        aritméticas y operaciones con cadenas, etc. */

        /*4. Las variables las utilizaremos cuando y como queramos en una misma página, ya que no 
        existe limitación e cuanto a su uso */

        /*5. Hay que prestar atención a no provocar errores por utilizar como variables palabras 
        reservadas por el lenguaje. Ejemplo: $os se genera un error, porque es una variable predifinida */

        /*6. También se debe evitar el error de empezar una variable por un número. Ejemplo: $35var=45
        es un error */

        /*En PHP no es necesario especificar el tipo de variable, pero si debemos saber cuando utilizar
        las comillas a la hora de definirlas, ya que su uso indicariaque se esta hablandode una cadena.
        Ejemplo: $cuenta=7, $nombre="nestor"*/

        /*Podemos mostrar las variables en pantalla de varias maneras: una de ellas puede ser 
        utilizando la opcion echo(); otra puede ser mediante print(); */

        $a=5;
        $b="7";
        echo "<b><h1>";
        echo($a);
        echo "<br>";
        echo($b);
        echo "</b></h1>";

        //Constantes
        //La formad e definir una constante es mediante la función define
        // Sintaxis: define("nombre_variable, valor_variable")


        define("capital_colombia", "Bogota");
        define("habitantes",7000000)

    ?>
    
</body>
</html>
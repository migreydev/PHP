<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios 2 Arrays</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
        <h2>Ejercicio 1</h2>

        <form action="" method="GET">
            <div class="form-group">
                    <label for="age">Edad</label>
            <input type="number" id="age" name="age" placeholder="Indica tu edad">
            <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>

        <?php

        /*
        1. Mostrar por pantalla el valor de cada elemento multiplicado por vuestra edad. 
        La edad debe pedirla por un formulario.
        */

        $arrayNumeros = [3,7,11,8,1,4];

        if(isset($_GET['age'])){
            $edad = intval($_GET["age"]);

            foreach ($arrayNumeros as $numero) {
                $resultado = $numero * $edad;
                echo "<p>Total: $numero x $edad = $resultado</p>";
            }

        }

        ?>

        <h2>Ejercicio 2</h2>

        <?php
        /*
        2) Modificar el valor de cada elemento del array por el resto de dividir cada elemento entre 2.
        */

        foreach ($arrayNumeros as $elemento => $numero) {
            $arrayNumeros[$elemento] = $numero % 2; 
        }

        $resultadoArrayNumerosString = implode(", ", $arrayNumeros);
        print_r($resultadoArrayNumerosString);

        ?>
        <h1><b>Array</b></h1>
        <h2>Ejercicio 1 y 2</h2>

        <?php
        /*
        Dado el string = "Jurado, Alberto, Marcelo, Pablo, Maria"
        1) Definir un array en cuya cada posición esté cada nombre del string anterior.
        */

        $arrayString = ["Jurado", "Alberto", "Marcelo", "Pablo", "Maria"];


        /*
        2) Dado el array anterior, mostrar por pantalla en que posición se encuentra la letra 
        a en cada elemento del array.
        */

        for ($i = 0; $i < count($arrayString); $i++) {
            $nombres = $arrayString[$i];
    
            for ($j = 0; $j < strlen($nombres); $j++) {
                if ($nombres[$j] === 'a') {
                    echo "La letra 'a' se encuentra en la posición $j en la palabra $nombres <br>";
                }
            }
        }

        ?>

        <h2>Ejercicio 3</h2>

        <?php
        /*
        3) Dado el array anterior, cambiar en cada elemento del array anterior la letra a por la e.
        */

        $nuevoArray = [];

        for ($i = 0; $i < count($arrayString); $i++) {
            $nombres = $arrayString[$i];
            
            $nombres = str_replace(['a', 'A'], ['e', 'E'], $nombres);
            array_push($nuevoArray, $nombres);
        }

        $resultadoArrayString = implode(", ", $nuevoArray);
        echo $resultadoArrayString;

        ?>

        <h2>Ejercicio 4</h2>

        <?php

        /*
        4) Crear una función que dado un array devuelva el array al revés (la posición 0 ahora tendrá el valor de la última posición y viceversa). 
        Crearla como función normal y como función flecha.
        */

        function arrayReves($array){
            $arrayReves = [];

            for ($i = count($array) - 1; $i >= 0; $i--) {
                $nombres = $array[$i];
                array_push($arrayReves, $nombres);
            }
            return $arrayReves;
        }

        $resultadoFlechaString = implode(", ", arrayReves($arrayString));
        echo $resultadoFlechaString;

        ?>

        <br>

        <?php

        $arrayRevesFlecha = fn($array) => array_reverse($array);

        $resultadoFlecha = $arrayRevesFlecha($arrayString);

        $resultadoFlechaString = implode(", ", $resultadoFlecha);

        echo $resultadoFlechaString;

        ?>

        <h2>Ejercicio 5</h2>
        <br>

        <?php

        //5) Dado el array de nombres, poner cada nombre en mayúsculas y al revés

        $arrayMayus = [];

        for($i = count($arrayString) -1; $i>=0; $i--){
            $nombres = strtoupper($arrayString[$i]);

            array_push($arrayMayus, $nombres);

        }
        $arrayMayusString = implode(", ", $arrayMayus);
        echo $arrayMayusString;
        ?>

        <h2>Ejercicio 1</h2>

        <?php

        /*
        1)Crea un array de números de 100 posiciones, que contendrá los números del 1 al 100.
        Partiendo del array ya creado y completamente relleno, obtener la suma de todos ellos 
        y la media.   
        */

        $arrayNum = [];
        for($i =0; $i<=100; $i++){
            array_push($arrayNum, $i);
        }

        ?>

        <h3>Suma</h3>

        <?php
        $map = array_sum($arrayNum);

        echo $map;

        ?>

        <h2>Ejercicio 2</h2>

        <?php

        /*
        2)Crear un array de enteros donde indicamos por teclado el tamaño del array, 
        rellenamos el array con números aleatorios entre 0 y 9, 
        y mostramos por pantalla el valor de cada posición y la suma de todos los valores.
        */

        ?>

        <form action="" method="GET">
            <div class="form-group">
                <label for="tamano">Tamaño</label>
                <input type="number" id="tamano" name="tamano" placeholder="Indica el tamaño del array">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>

        <?php

        $arrayNumber = [];
        $sumaValores = 0;

        if(isset($_GET["tamano"])){
            $tamanoNumber = intval($_GET["tamano"]);

            for($i = 0; $i<$tamanoNumber; $i++){
                array_push($arrayNumber, rand(0,9));
            }

        }

        print_r($arrayNumber);

        for($i = 0; $i< count($arrayNumber); $i++){
            $sumaValores += $arrayNumber[$i];
        }

        echo "Suma total del array ".$sumaValores;

        ?>

        <h2>Ejercicio 3</h2>

        <form method="GET">
            <div class="form-group">
                <label for="tamano">Tamaño del array:</label>
                <input type="number" name="tamano" required>
                <br>
                <label for="numero">Número entre 0 y 9:</label>
                <input type="number" name="numero" required>
                <br>
                <input type="submit" class="btn btn-primary" value="Generar Array">
            </div>
        </form>

        <?php

        /*
        3)Pedir por formulario  un numero entero y crear un array de ese tamaño, con valores aleatorios entre 1 y 300.
        A continuación, pedir un número entero entre 0 y 9, e imprimir todas las posiciones del array que tengan un número acabado en ese dígito.
        Esos números, además de imprimirlos, almacenarlos en un array de salida con el tamaño adecuado.
        */

        $arrayNumberform = [];
        $arrayOutput = [];

        if (isset($_GET["tamano"]) && isset($_GET["numero"])) {
            $tamanoNumber = intval($_GET["tamano"]);
            $positiveNumber = intval($_GET["numero"]);

            if ($tamanoNumber <= 0) {
                echo "Debes introducir un tamaño positivo.";
            }

            if ($positiveNumber < 0 || $positiveNumber > 9) {
                echo "Debes introducir un número entre 0 y 9.";
            }

            for ($i = 0; $i < $tamanoNumber; $i++) {

                array_push($arrayNumberform, rand(1, 300));
            
            }

            echo "Array generado: " . implode(", ", $arrayNumberform);

            foreach ($arrayNumberform as $index => $value) {

                if($value % 10 === $positiveNumber){
                    array_push($arrayOutput,$value);
                }
            }

            ?>

            <br>

            <?php

            if(empty($arrayOutput)){
                echo "No se encontraron números acabados en $positiveNumber";
            }else {

                echo "Números acabados en $positiveNumber : " . implode(", ", $arrayOutput);
            }


        }

        ?>

        <h2>Ejercicio 4</h2>

        <form method="GET">
            <div class="form-group">
                <label for="dni">DNI:</label>
                <input type="number" name="dni" placeholder="Introduce tu DNI" required>
                <input type="submit" class="btn btn-primary" value="Calcular Letra">
            </div>
        </form>

        <?php

        /*
        Introduce por un formulario el número de tu DNI, y vuelve a imprimirlo seguido de la letra. 
        Para calcular la letra, cogeremos el resto de dividir nuestro dni entre 23, el resultado debe estar entre 0 y 22.
        Tendrás que crear un array que contenga (ver imagen)
        */

        $letrasDNI = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];
        $dniCompleto = "";

        if(isset($_GET["dni"])){
            $dni = intval($_GET["dni"]);

            if ($dni >= 0 && $dni <= 99999999) {

                $letra = $letrasDNI[$dni%23];
                $dniCompleto = $dni . $letra;
                echo "DNI completo: $dniCompleto";  

            }else {
                echo "Introduce un dni valido, 8 números";
            }

        }

        ?>

        <h2>Ejercicio 1</h2>

        <?php

        /*
        1) Define una función que reciba un número n y devuelva si es primo o no
        */

        ?>
</body>
</html>
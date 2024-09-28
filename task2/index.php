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

        <h1>Ejercicio Primos</h1>
        <h2>Ejercicio 1</h2>

        <?php

        /*
        1) Define una función que reciba un número n y devuelva si es primo o no
        */

        function isPrimo($n){

            if ($n <= 1) {
                return false;
            }

            for ($i = 2; $i < $n; $i++) {
                if ($n % $i === 0) {
                    return false;
                }
            }

            return  true;
        }

        $numero = 17;

        if(isPrimo($numero)){
            echo "El número $numero es primo";
        }else {
            echo "El número $numero no es primo";
        }

        ?>

        <br>

        <?php
        $numero = 15;

        if(isPrimo($numero)){
            echo "El número $numero es primo";
        }else {
            echo "El número $numero no es primo";
        }

        ?>

        <h2>Ejercicio 2</h2>

        <?php

        /*
        2) Dado el array [5,1,7,8,2,4,6,3,9], comprueba si hay algún número primo
        */

        $arrayPrimos = [5,1,7,8,2,4,6,3,9];
        echo "Array: " . implode(", ", $arrayPrimos);

        foreach($arrayPrimos as $primo){
            $isPrimo = true; 

            if($primo <= 1){
                $isPrimo = false;
            }

            for ($i = 2; $i < $primo; $i++) {
                if ($primo % $i === 0) {
                    $isPrimo = false;
                }
            }

            ?>

            <br>

            <?php

            if ($isPrimo) {
                echo "$primo es primo";
            }
        }

        ?>

        <h2>Ejercicio 3</h2>

        <?php

        /*
        3/Dado el array [5,1,7,8,2,4,6,3,9], comprueba si todos son números primos
        */

        foreach($arrayPrimos as $primo){

            $isPrimo = true; 

            if($primo <= 1){
                $isPrimo = false;
                break;
            }

            for ($i = 2; $i < $primo; $i++) {
                if ($primo % $i === 0) {
                    $isPrimo = false;
                    break;
                }
            }

        }

        if($isPrimo){
            echo "Todos son primos";
        }else {
            echo "todos no son primos";
        }

        ?>

        <h2>Ejercicio 4 y 5</h2>

        <?php

        /*

        4 y 5-Dado el array [5,1,7,8,2,4,6,3,9], comprueba en que posición está el primer número primo
        */

        for($i = 0; $i < count($arrayPrimos); $i++){

            $isPrimo = true; 
            $primo = $arrayPrimos[$i];

            if($primo <= 1){
                $isPrimo = false;
            }

            for ($j = 2; $j < $primo; $j++) {
                if ($primo % $j === 0) {
                    $isPrimo = false;
                }
            }

            if($isPrimo){
                echo "En la posicion $i se encuentra el primer número primo, siendo el número $primo";
                break;
            }

        }

        ?>

        <h2>Ejercicio 6</h2>

        <?php

        //6) Dado el array [5,1,7,8,2,4,6,3,9], quédate sólo con los números primos

        $arrayNumPrimos = [];

        for($i = 0; $i < count($arrayPrimos); $i++){

            $isPrimo = true; 
            $primo = $arrayPrimos[$i];

            if($primo <= 1){
                $isPrimo = false;
            }

            for ($j = 2; $j < $primo; $j++) {
                if ($primo % $j === 0) {
                    $isPrimo = false;
                }
            }

            if($isPrimo){
                array_push($arrayNumPrimos, $primo);
            }

        }

        echo "Array de números primos: " . implode(", ", $arrayNumPrimos);

        ?>

        <h2>Ejercicio 7</h2>

        <?php

        //7)  Dado el array de números primos, dame el producto de todos los elementos del array

        $producto = 1;

        foreach( $arrayNumPrimos as $primos){

            $producto *= $primos;
        }

        echo "El producto total del array de números primos seria $producto";

        ?>

        <h1>Ejercicio Palíndromo</h1>
        <h2>Ejercicio 1</h2>

        <?php

        //8)  Define una función que reciba un String y devuelva si es palíndromo o no

        function isPalindromo ($string){
            $length = strlen($string); //devuelve el número de caracteres de la cadena, ya que a través de un string el count no funcionaría

            for($i = 0; $i< $length; $i++){
                $palindromo = $string[$i];

                for($j = $length -1; $j>=0; $j--){
                    $palindromoReves = $string[$j];
        
                    if($palindromoReves === $palindromo){
                        return true;
                    }else{
                        return false;
                    }
                }
            }
        }

        $palabra = "ana";
        if(isPalindromo($palabra)){
            echo "La palabra $palabra es palindromo";
        }else{
            echo "La palabra $palabra no es palindromo";
        }

        ?>

        <h2>Ejercicio 2</h2>

        <?php

        //9) Dado el array ["ana", "mesa", "radar","seres","folio","sudoku","amor a roma", "sol", "mar", "oso", "salas"], comprueba si hay algún palíndromo

        $arrayString = ["ana", "mesa", "radar","seres","folio","sudoku","amor a roma", "sol", "mar", "oso", "salas"];

        foreach ($arrayString as $cadena) {
            $length = strlen($cadena);
            $palabraReves = "";

            for ($j = $length - 1; $j >= 0; $j--) {
                $palabraReves .=  $cadena[$j];
            }
            
            if ($cadena === $palabraReves) { 
                echo "$cadena es palindromo, "; 
            }
        }

        ?>

        <h2>Ejercicio 3</h2>

        <?php

        //10) Dado el array ["ana", "mesa", "radar","seres","folio","sudoku","amor a roma", "sol", "mar", "oso", "salas"], comprueba si todos son palíndromos


        foreach ($arrayString as $cadena) {
            $length = strlen($cadena);
            $palabraReves = "";

            for ($j = $length - 1; $j >= 0; $j--) {
                $palabraReves .=  $cadena[$j];
            }
            
            if ($cadena !== $palabraReves) { 
                echo "Todos no son palindromo"; 
                break;
            }
        }

        ?>

        <h2>Ejercicio 4 y 5</h2>

        <?php

        //11) y 12 Dado el array ["ana", "mesa", "radar","seres","folio","sudoku","amor a roma", "sol", "mar", "oso", "salas"], comprueba en que posición está el primer palíndromo


        for($i = 0; $i<$arrayString; $i++){
            $cadena = $arrayString[$i];
            $length = strlen($arrayString[$i]);
            $palabraReves = "";

            for ($j = $length - 1; $j >= 0; $j--) {
                $palabraReves .= $cadena[$j];
            }
            
            if ($cadena === $palabraReves) { 
                echo "Se encuentra en la posicion $i y el palindromo es la palabra $cadena"; 
                break;
            }
        }

        ?>

        <h2>Ejercicio 5</h2>

        <?php

        //13) Dado el array ["ana", "mesa", "radar","seres","folio","sudoku","amor a roma", "sol", "mar", "oso", "salas"], quédate sólo con los palíndromos

        $arrayPalabrasPalindromos = [];
        foreach ($arrayString as $palindromo) {
            $length = strlen($palindromo);
            $palindromoReves = "";
        
            for ($j = $length - 1; $j >= 0; $j--) {
                $palindromoReves .= $palindromo[$j];
            }
        
            if ($palindromo === $palindromoReves) {
                array_push($arrayPalabrasPalindromos, $palindromo);
            }
        }

        echo "Array de palabras palindromos ". implode(", ", $arrayPalabrasPalindromos);

        ?>

        <h2>Ejercicio 6</h2>

        <?php

        //Dado el array de números palíndromos, dame la concatenación de todos los elementos del array

        $arrayNumerosPalindromos = [121, 123, 454, 567, 789];

        $sumerosConcatenacion = implode("", $arrayNumerosPalindromos);

        echo "Array de numeros palindromos ". implode(",", $arrayNumerosPalindromos);
        ?>

        <br>

        <?php
        echo "Concatenación de todos los números palindromos del array $sumerosConcatenacion";

        ?>

        <h1>Otros</h1>
        <h2>Ejercicio 1</h2>

        <?php

        //1) Dado un array de números, verifica si hay algún número negativo


        $arrayNumerosOtros= [10, -5, 7, 3, -1];

        foreach ($arrayNumerosOtros as $numero) {

            if($numero < 0){
                echo "$numero es un número negativo, ";
            }
        }

        ?>

        <h2>Ejercicio 2</h2>

        <?php
        //2) Dado un array de Strings, encuentra el índice del primer String que empiece por la letra 'A'

        $arrayStrings = ["manzana", "plátano", "cereza", "aguacate", "kiwi", "higo"];

        foreach ($arrayStrings as $index => $fruta) {
            if ($fruta[0] === 'a' || $fruta[0] === 'A') {
                echo "El índice del primer String que empieza por la letra 'A' es: $index";
                break; // Salimos del bucle después de encontrar la primera coincidencia
            }
        }

        ?>

        <h2>Ejercicio 3</h2>

        <?php
        //3) Dado un array de números de 3 o más cifras, calcula la suma de las últimas cifras de cada número

        

        ?>

        <h2>Ejercicio 4</h2>

        <?php
        //4) Dado un array de arrays, filtra el array para que sólo queden los arrays de longitud 5


        $arrayDeArrays = [
            ["manzana", "plátano", "cereza"],
            ["aguacate", "kiwi", "higo"],
            ["naranja", "pera", "melón", "fresa", "platano"]
        ];
        $hayArrayLongitud5 = false;

        foreach($arrayDeArrays as $array){

            if(count($array) === 5){
                $hayArrayLongitud5 = true;
                echo "Array de longitud 5: ". implode(",", $array);
            }
        }

        if(!$hayArrayLongitud5){
            echo "No hay arrays de longitud 5";
        }

        ?>

        <h2>Ejercicio 5</h2>

        <?php
        //5) Dado un array de Strings, encuentra el primer string de longitud 3

        $arrayStringsFruta = ["manzana", "plátano", "cereza", "uva", "kiwi","higo"];
        $encontrado = false;

        foreach($arrayStringsFruta as $fruta){
            $length = strlen($fruta);

            if($length === 3){
                echo "El primer string de longitud 3 es $fruta";
                $encontrado = true;
                break;
            }
        }

        if (!$encontrado) {
            echo "No hay string de longitud 3";
        }
        

        ?>

        <h2>Ejercicio 6</h2>

        <?php
        //6) Dado un array de números, verifica que todos los números sean de 2 cifras o más

        $arrayNumeros = [3, 12, 7, 25, 8, 19];

        foreach($arrayNumeros as $numero){

            if($numero >= 10){
                echo "Todos los numeros son de 2 o mas cifras";
            }else {
                echo "Todos los numeros no son de 2 o mas cifras";
                break;
            }
        }

        ?>

</body>
</html>
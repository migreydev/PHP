<?php

require ("./SerVivo.php");
require ("./Animal.php");
require ("./Gato.php");
require ("./Humano.php");

//instancias
$planta = new SerVivo("ficus", "árbol", 5);
$zorro = new Animal("zorro", "bosque");
$gato = new Gato("Garfield", 3, "gato común");
$humano = new Humano("Miguel Ángel", 30, "Español");

// métodos
echo $planta->respirar() ."<br>";
echo $zorro->sonido() ."<br>";
echo $gato->maullar() ."<br>";
echo $humano->hablar() ."<br>";

?>

<br>

<?php

// métodos estáticos
echo SerVivo::descripcionGeneral() ."<br>";
echo Animal::descripcionGeneral() ."<br>";
echo Gato::descripcionGeneral() ."<br>";
echo Humano::descripcionGeneral() ."<br>";

?>



<?php

echo "\n***************************************************\n";
echo "*             Retos de programación - PHP         *\n";
echo "*         Curso de fundamentos de PHP de Platzi   *\n";
echo "***************************************************\n";
echo "\nEstudiante: Daniel Contreras\n\n\n";

#Reto 1
echo"*******************\n";
echo"*      Reto #1    *\n";
echo"*******************\n\n";

$nombre = readline('Ingresar nombre: >');
echo "\nHola, " . $nombre . "\n\n";


#Reto 2
echo"*******************\n";
echo"*      Reto #2    *\n";
echo"*******************\n\n";

$nombre = readline('Ingresar nombre: >');
$apellido = readline('Ingresar apellido: >');
echo "\nHola, " . $nombre ." ". $apellido . "\n\n";

#Reto 3
echo"*******************\n";
echo"*      Reto #3    *\n";
echo"*******************\n\n";

$categorias = array("Desarrollo e ingeniería", "Marketing", "Producción Audiovisual",
                    "Startups", "Diseño y UX", "Negocios y empredimiento", "Crecimiento Profesional");

echo "\nPlatzi cuenta con cursos de:\n";
foreach ($categorias as $x) {
    echo "[" . $x . "]\n";
}
echo "\n";                  

#Reto 4
echo"*******************\n";
echo"*      Reto #4    *\n";
echo"*******************\n\n";

$num1 = readline('Ingresar Primer número: >');
$num2 = readline('Ingresar Segundo número: >');
$suma = $num1 + $num2;

echo "\n" . $num1 ." + ". $num2 . " = " . $suma . "\n\n";

#Reto 5
echo"*******************\n";
echo"*      Reto #5    *\n";
echo"*******************\n\n";

$num1 = readline('Ingresar Primer número: >');
$num2 = readline('Ingresar Segundo número: >');
$num3 = readline('Ingresar Tercer número: >');
$suma = $num1 + $num2;
$mult = $suma * $num3;

echo "\nDatos de entrada: " . $num1 .", ". $num2 . ", " . $num3 . "\n";
echo "Resultado: " . $mult. "\n\n";

#Reto 6
echo"*******************\n";
echo"*      Reto #6    *\n";
echo"*******************\n\n";

echo"Llegaste a una fiesta!\n";
$rest = 1;
do{
    $num1 = readline('¿Cuantas rebanadas de pizza trajiste?: >');
    echo"\n** Pasan las horas en la fiesta.......... **\n";
    $num2 = readline('¿Cuantas rebanadas de pizza se comieron?: >');
    $rest = $num1 - $num2; 

    if ($rest < 0) {
        echo chr(27).chr(91).'H'.chr(27).chr(91).'J';   //^[H^[J  
        echo "\nERROR! - No es posible que se hayan comido mas rebanadas de las que llevaste\n";
        echo "Por favor ingrese los datos nuevamente....\n\n";
    }
} while ($rest < 0);

if ($rest == 0){
    echo "\n╚(•⌂•)╝ ¡No quedó nada de pizza! ╚(•⌂•)╝\n\n";
} elseif ($rest == 1) {
    echo "\n╚(•⌂•)╝ ¡Queda 1 sola rebanada de pizza! ╚(•⌂•)╝\n\n";
} else {
    echo "\n╚(•⌂•)╝ ¡Quedan solo " . $rest . " rebanadas! ╚(•⌂•)╝\n\n";
}

function EdadFutura(int $edad, int $anio) {
    return $edad + $anio;
  }

#Reto 7
echo"*******************\n";
echo"*      Reto #7    *\n";
echo"*******************\n\n";

$nombre = readline('Ingresar nombre: >');
$edad = readline('Ingresar edad: >');

echo "\n[" . $nombre . "]" . " el año pasado tenías " . EdadFutura($edad, -1) . " y el próximo año cumplirás " . EdadFutura($edad, 1) . " años.\n\n";

//$suma = $num1 + $num2;
//$mult = $suma * $num3;

#Reto 8
echo"*******************\n";
echo"*      Reto #8    *\n";
echo"*******************\n\n";

echo "* Vas con tus amigos a tu restaurante favorito y luego de una buena comida, deben pagar la cuenta *\n\n";
$total = readline('Ingrese total a pagar: >');
$personas = readline('Ingrese cantidad de personas en la que se dividirá la cuenta: >');
$propina = readline('Porcentaje de propina a incluir: >');
$iva = readline('Porcentaje del IVA: >');
echo"\n\n";

//Calcular cuenta
$final = ($total + ($total * ($propina * 0.01) + ($total * ($iva * 0.01))));

echo "El total a pagar incluyendo impuestos y propina serían $" . $final . "\n";
echo "Cada persona debe pagar $" . $final / $personas . "\n\n"; 



#Reto 9
echo"*******************\n";
echo"*      Reto #9    *\n";
echo"*******************\n\n";

$dias = readline('Ingrese cantidad de días: >');

echo "\nEn " . $dias . " días hay " . $dias * 24 . " horas " . ($dias * 24) * 60 . " minutos y " . ((($dias * 24) * 60) * 60) . " segundos.\n\n";







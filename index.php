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
echo "Resultado: " . $mult;
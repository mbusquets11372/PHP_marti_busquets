<?php
function missatge($argument)
{
    echo "$argument<br>";
}
//--------------------------------//
function suma($valor1, $valor2)
{
    return ($valor1 + $valor2);
}
//--------------------------------//
function resta($valor1, $valor2)
{
    return ($valor1 - $valor2);
}
//--------------------------------//
function divisio($valor1, $valor2)
{
    return ($valor1 / $valor2);
}
//--------------------------------//
function multiplicacio($valor1, $valor2)
{
    return ($valor1 * $valor2);
}
//--------------ECHO------------------//
missatge("Aquets són els exercicis de Functions - Martí Busquets");

echo " <br><b>Suma de 4 i 6</b> <br>";
  echo suma(4, 6);
echo " <br><br><b>Resta de 60 i 10</b> <br>";
  echo resta(60, 10);
echo " <br><br><b>Divisio de 10 i 2</b> <br>";
  echo divisio(10, 2);
echo " <br><br><b>Multiplicacio de 5 i 5</b> <br>";
  echo multiplicacio(5, 5);

//--------------MD5------------------//
$nom = 'Marti';

echo ("<br><br>La codificació md5 de <b>$nom</b> és:<br>");
echo md5($nom);

?>

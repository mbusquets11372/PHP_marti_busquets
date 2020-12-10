<?php
//visusi corrections - OK
/*
1. Given the matrix below,
develop the code you need to show the city and its assigned IES each one in one different line
exemple of what is expected in the screen:
Manacor: IES Manacor
......
*/

echo "1.<br><br>";

$citiesIES=array(
"Manacor"=>"IES Manacor",
"Palma"=>"IES Borja Moll",
"Inca"=> "IES Pau de Cases Noves",
"Porto Cristo"=>"IES Porto Cristo de la Mar",
"Calvia"=>"IES Son Ferrer");

foreach ($citiesIES as $IES => $value) {
  echo "$IES: $value<br>";
}
 echo "<hr>";

/*
2. Orden in alphabetical order the array of the exercise 1 using the php function
asort($array);
Show the same info than in exercise 1 but in alphabetical order
*/

echo "2.<br><br>";

echo asort ($citiesIES);
            //----asort-----sorts an associative array in ascending order, according to the value---
foreach ($citiesIES as $IES => $value) {
  echo "$IES: $value<br>";
}
 echo "<hr>";

/*
3. Transform the exercise 1 into a matrix using the structure of Associative matrixes:
$array['stringKey']=elementvalue;
and show the same info than in exercise 1
*/
echo "3.<br><br>";

$citiesIES_3['Manacor']="IES Manacor";
$citiesIES_3['Palma']="IES Borja Moll";
$citiesIES_3['Inca']="IES Pau de Cases Noves";
$citiesIES_3['Porto Cristo']="IES Porto Cristo de la Mar";
$citiesIES_3['Calvia']="IES Son Ferrer";

foreach ($citiesIES_3 as $IES_3 => $value3) {
  echo "$IES_3: $value3 <br>";
}

 echo "<hr>";
 ?>

<?php
//visusi corrections - KO
//Les posicions als vectors / matrius multidimensionals son numeros, no cadenes de caracters. Ver comentaris baix.
//Les posicions als vectors / matrius comencen en 0, sino emprem aquesta posició es un espai de memoria que s'esta desperdiciant.
//1er vector
echo "<strong>1 Vector: window time of a day</strong><br>";
$vecto1["1"]="Morning";//visusi - canviar a $vecto1[0]="Morning";
$vecto1["2"]="Noon";
$vecto1["3"]="Afternoon";
$vecto1["4"]="Evening";
$vecto1["5"]="Night";

$counts1=sizeof($vecto1);

echo "Number of elements: $counts1<br>";

foreach ($vecto1 as $value1) {
  echo "$value1<br>";
}

//2n vector
echo "<br><strong>2 Vector: Dishes of a restaurant</strong><br>";
$vecto2["1"]="Beef with mushroom sauce";//visusi canviar segons els comentaris de la linia 7
$vecto2["2"]="Spaghetti carbonara";
$vecto2["3"]="Spanish omelette";

$counts2=sizeof($vecto2);

echo "Number of elements: $counts2<br>";

foreach ($vecto2 as $value2) {
  echo "$value2<br>";
}

//3er vector
echo "<br><strong>3 Vector: Times when an alarm sounds</strong><br>";
$vector3[]=array("8", "12", "14", "16", "20");//visusi - si aquest fora el multidimensional, seria millor posar cada element en una posicio diferent
                                                                    //visusi - exemple - $vector3[]=8; $vector3[]=12; $vector3[]=14; ; $vector3[]=16; $vector3[]=20;
                                                                    //visusi - si emprem instrucció array("8", "12", "14", "16", "20")   no caldria posar els corchetes a $vector3[]
                                                                    // visusi - ho comente a classe per a tots
foreach ($vector3 as $value_3) {
  foreach ($value_3 as $value_4) {
  echo "$value_4 <br>";}
}
        //Posam es contador aqui perque mes adalt sa variable value_3 no existeix.
$counts3=sizeof($value_3);

echo "Number of elements: $counts3<br>";

//4t vector
echo "<br><strong>4 Vector: List of components</strong><br>";
$vector4[]=array("PC", "Mouse", "Keyboard", "i3core", "8GB RAM", "1TB");

foreach ($vector4 as $value_5) {
  foreach ($value_5 as $value_6) {
  echo "$value_6 <br>";}
}
        //Posam es contador aqui perque mes adalt sa variable value_5 no existeix.
$counts4=sizeof($value_5);

echo "Number of elements: $counts4<br>";

?>

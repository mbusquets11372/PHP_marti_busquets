<?php
//visusi corrections 2 - KO - Els indexes de numeros han de ser numeros, no cadenes de caracters. Si son cadenes de caracters estem fent un vector/matriu associativa
//visusi corrections 2 - KO - Canviar els indexes que sin numeros de cadenes de caracters a numero
//visusi corrections 2 - KO - Canviar els numeros de les hores a les que sona l'alarma a numeros també. Al $vector3
//visusi corrections - KO
//Les posicions als vectors / matrius multidimensionals son numeros, no cadenes de caracters. Ver comentaris baix.
//Les posicions als vectors / matrius comencen en 0, sino emprem aquesta posició es un espai de memoria que s'esta desperdiciant.
//1er vector
echo "<strong>1 Vector: window time of a day</strong><br>";
$vecto1[0]="Morning"; // visusi corrections 2 - KO
$vecto1[1]="Noon";
$vecto1[2]="Afternoon";
$vecto1[3]="Evening";
$vecto1[4]="Night";

$counts1=sizeof($vecto1);

echo "Number of elements: $counts1<br>";

foreach ($vecto1 as $value1) {
  echo "$value1<br>";
}

//2n vector
echo "<br><strong>2 Vector: Dishes of a restaurant</strong><br>";
$vecto2[0]="Beef with mushroom sauce";//visusi corrections 2 - KO
$vecto2[1]="Spaghetti carbonara";
$vecto2[2]="Spanish omelette";

$counts2=sizeof($vecto2);

echo "Number of elements: $counts2<br>";

foreach ($vecto2 as $value2) {
  echo "$value2<br>";
}

//3er vector
echo "<br><strong>3 Vector: Times when an alarm sounds</strong><br>";

$vector3=array(8, 12, 14, 16, 20);// visusi corrections 2 - KO
                                                                   //visusi - si aquest fora el multidimensional, seria millor posar cada element en una posicio diferent
                                                                    //visusi - exemple - $vector3[]=8; $vector3[]=12; $vector3[]=14; ; $vector3[]=16; $vector3[]=20;
                                                                    //visusi - si emprem instrucció array("8", "12", "14", "16", "20")   no caldria posar els corchetes a $vector3[]
                                                                    // visusi - ho comente a classe per a tots
$counts3=sizeof($vector3);
echo "Number of elements: $counts3<br>";

foreach ($vector3 as $value_3){
  echo "$value_3 <br>";
}

//4t vector
echo "<br><strong>4 Vector: List of components</strong><br>";
$vector4=array("PC", "Mouse", "Keyboard", "i3core", "8GB RAM", "1TB");

$counts4=sizeof($vector4);
echo "Number of elements: $counts4<br>";

foreach ($vector4 as $value_5){
  echo "$value_5 <br>";
}

?>

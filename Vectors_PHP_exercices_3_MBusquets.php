<?php
//1er vector
echo "<strong>1 Vector: window time of a day</strong><br>";
$vecto1["1"]="Morning";
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
$vecto2["1"]="Beef with mushroom sauce";
$vecto2["2"]="Spaghetti carbonara";
$vecto2["3"]="Spanish omelette";

$counts2=sizeof($vecto2);

echo "Number of elements: $counts2<br>";

foreach ($vecto2 as $value2) {
  echo "$value2<br>";
}

//3er vector
echo "<br><strong>3 Vector: Times when an alarm sounds</strong><br>";
$vector3=array("8", "12", "14", "16", "20");

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

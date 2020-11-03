<?php

//1er vector
echo "<strong>1 Associative array: January month days</strong><br>";
echo "<strong>String key:</strong> January<br>";
$vector1['January']=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);

    // ficam es contador dins es 1er foreach. Per cada vector fará i mostrará un contador
foreach ($vector1 as $value_1) {
  $counts1=sizeof($value_1);
  echo "<strong>Number of elements:</strong> $counts1<br>";

  foreach ($value_1 as $value_2) {
  echo "$value_2 <br>";}
}

//2n vector
echo "<br><strong>2 Associative array: Menu Food</strong><br>";
echo "<strong>String key:</strong> Menu<br>";
$vector2['Menu']=array('Beef with mushroom sauce', 'spaghetti carbonara', 'Spanish omelette');

    // ficam es contador dins es 1er foreach. Per cada vector fará i mostrará un contador
foreach ($vector2 as $value_2) {
  $counts2=sizeof($value_2);
  echo "<strong>Number of elements:</strong> $counts2<br>";

  foreach ($value_2 as $value_3) {
  echo "$value_3 <br>";}
}


//3er vector
echo "<br><strong>3 Associative array: Clock Alarm</strong><br>";
echo "<strong>String key:</strong> Alarm times<br>";
$vector3['Alarm times']=array(8,12,14,16,20);

    // ficam es contador dins es 1er foreach. Per cada vector fará i mostrará un contador
foreach ($vector3 as $value_3) {
  $counts3=sizeof($value_3);
  echo "<strong>Number of elements:</strong> $counts3<br>";

  foreach ($value_3 as $value_4) {
  echo "$value_4 <br>";}
}


//4t vector
echo "<br><strong>4 Associative array: PC Components</strong><br>";
echo "<strong>String key:</strong> Product 123<br>";
$vector4['Product 123']=array("PC", "Mouse", "Keyboard", "i3core", "8GB RAM", "1TB");

    // ficam es contador dins es 1er foreach. Per cada vector fará i mostrará un contador
foreach ($vector4 as $value_4) {
  $counts4=sizeof($value_4);
  echo "<strong>Number of elements:</strong> $counts4<br>";

  foreach ($value_4 as $value_5) {
  echo "$value_5 <br>";}
}

?>

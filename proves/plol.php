<?php
//2n vector
echo "<br><strong>1 Associative array: Menu Food</strong><br>";
echo "<strong>String key:</strong> Menu<br>";
$vector2['January']=array('Beef with mushroom sauce', 'spaghetti carbonara', 'Spanish omelette');

    // ficam es contador dins es 1er foreach. Per cada vector fará i mostrará un contador
foreach ($vector2 as $value_2) {
  $counts2=sizeof($value_2);
  echo "<strong>Number of elements:</strong> $counts2<br>";

  foreach ($value_2 as $value_3) {
  echo "$value_3 <br>";}
}

?>

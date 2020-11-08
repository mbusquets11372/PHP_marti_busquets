<?php
//multidimensional empleant variables

$days_31 = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
$days_29 = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29);
$days_30 = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30);

echo "Número de dies de cada mes. Multidimensional empleant variables <br><br>";

$mes=array(
    "Gener"=> $days_31,
    "Febrer"=> $days_29,
    "Març"=> $days_30,
    "Abril"=>$days_30,
    "Maig"=> $days_31,
    "Juny"=> $days_30,
    "Juliol"=> $days_31,
    "Agost"=> $days_31,
    "Septembre"=> $days_30,
    "Octubre"=> $days_31,
    "Novembre"=> $days_30,
    "Desembre"=> $days_31,
  );

foreach ($mes as $mesnom => $dies)
{
  echo "<strong>$mesnom:</strong> ";
  foreach ($dies as $value_3 => $value_4)
  {
    echo "$value_4, ";
  }
echo "<br><br>";
}

?>

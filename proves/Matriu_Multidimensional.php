
<?php

echo "estic a multidimensional<br><br>";
/*
$students = array(
    array(
      "name"=>"Mike",
      "subject"=>"0376-IAW",
      "mark"=>7
    ),
    array(
      "name"=>"John",
      "subject"=>"0376-IAW",
      "mark"=>5
    )
);
//MOSTRANT NOMES CONTINGUT
foreach ($students as $value_1)
{
  foreach ($value_1 as $value_2)
  {
  echo "$value_2 ";
  }
  echo "<br>";
}*/


$cursos = array(
  //asignatures
    array(
      "Code"=>"0123",
      "Name"=>"Databases",
    ),
    array(
      "Code"=>"4567",
      "Name"=>"Xarxes",
    ),
    array(
      "Code"=>"8910",
      "Name"=>"Aplicacions Web",
    ),
    array(
      "Code"=>"9534",
      "Name"=>"Sistemes Operatius",
    )
);

//MOSTRANT TOT ARRAY
foreach ($cursos as $value_1)
{
  foreach ($value_1 as $value_2 => $value_3)
  {
  echo "<b>$value_2:</b> $value_3 ";
  }
  echo "<br>";
}



?>

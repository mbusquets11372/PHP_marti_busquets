
<?php
/*array asociativa*/
/*$weekdays["Gener"]="Happy New Year";
$weekdays["Febrer"]="28 dies";*/

$weekdays["Març"]=array("Matí","Tarda");
/*$weekdays["Wednesday"]=array(0,1);
$weekdays["Wednesday"]=array(5,"Bon cap de setmana");
*/

foreach ($weekdays as $value_1) {
  foreach ($value_1 as $value_2) {
    // code...
  echo "$value_2 <br>";}
}

/*Per mostrar tots els valors array*/
/*  foreach ($value_1 as $value_2) {
  echo "$value_2 <br>";}
}
*/

/*echo $weekdays['Gener'];
echo '<br>'.$weekdays['Febrer'];
*/

?>

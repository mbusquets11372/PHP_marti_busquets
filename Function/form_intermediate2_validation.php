<?php
//visusi  corrections - OK
//---------------------1-----------------------//
$nom="Marti Busquets Prohens";
function fullNameSplit($nom)
{
  return explode (" ",$nom);
}
$res=fullNameSplit($nom);
foreach ($res as $res2)
  {
  echo $res2, "<br>";
  }

echo "<hr>";
//---------------------2-----------------------//

function pwdHash($password)
{
return password_hash($password, PASSWORD_DEFAULT);
}

echo pwdHash("patatatata");
?>

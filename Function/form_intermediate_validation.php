<?php
//-------------1----------------//
echo "<b>Function 1</b><br>";
function emailValidation($email)
{
return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if (emailValidation("martibp2000@gmail.com"))
{
  echo "El correu és valid<br><br>";
}
else
{
  echo "El correu no és valid<br><br>";
}

//-------------2----------------//
echo "<b>Function 2</b><br>";
function passwordValidation($pwd1,$pwd2)
{
  if (strcmp($pwd1,$pwd2) !==0)
  return true;
  return false;
}

echo passwordValidation('avemaria', 'avemaria');
?>

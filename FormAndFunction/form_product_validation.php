<?php
//viusi corrections - OK - look moodle rubric
function messageReplacement($capitalisedName,$finalPrice){
  $message="PRODUCTNAME final price is FINALPRICE €";
  //use the php function str_ireplace that return a string
  //example of use: $replacedString = str_ireplace("body", "full", "body combat");
  //where $replacedString get the value "full combat"
  $messageReplacement=str_ireplace("PRODUCTNAME",$capitalisedName,$message);
  $messageReplacement2=str_ireplace("FINALPRICE",$finalPrice,$messageReplacement);
  return $messageReplacement2;
}
//
function discountCalculation($discount,$price){
  //calculate the final amount after applying the discount and return it
  // if the discount calculation is below 0 return false
  $discountCalculation=$price-$discount;
  if($discountCalculation < 0)
    return false;
  else
    return $discountCalculation;
}

function nameToCapitalLetters($name){
  //use the php function strtoupper that return a string
  //example of use: $transformedString = strtoupper("hello world")
  //where $transformedString get the value "HELLO WORLD"
    return strtoupper($name);
}

?>

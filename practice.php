<?php
// numeric array
$ruk = array(20,30,40);
echo $ruk[1];
echo "</br>";
// assosiative array
$far = array ("first"=> "farid","last"=>"Ahmed");
echo $far["first"];
echo "</br>";
echo $far["last"];
// add new elements
$far["first"]="rajib";
$far["last"] = "jib";
// print the elements
echo "</br>";
echo $far["first"];
echo "</br>";
echo $far["last"];
// associative array with for each
ksort($far);
  foreach($far as $key => $value){
  	echo " this is my try "." ".$key." ". "I am working"." ". $value;
  	echo "</br>";
  }
  sort($far);
  foreach($far as $key => $value){
  	echo " this is my try "." ".$key." ". "I am working"." ". $value;
  	echo "</br>";
  }
?>
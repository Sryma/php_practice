<?php
// associative array
 $age = array ("jamal" => "20","kamal"=>"25","aslam" =>"24");
  asort($age);
  foreach ($age as $key => $value){
  	echo "key= ".$key." ". "value= " .$value;
  	echo "</br>";
  }
  $age = array ("ruk" => "30" , "kamal" => "30", "aslam" => "30");
  asort($age);
  foreach ($age as $key => $value){
  	echo " I want this " .$key. " "."for my life"." ".$value ;
  	echo "<br/>";
  }
  $student = array ("first"=> " Ruksana", "last"=> "Rahman", "ID"=>"05");
  ksort($student);
  foreach($student as $key => $value){
  	echo " this is my try "." ".$key." ". "I am working"." ". $value;
  	echo "</br>";
  }

  
 ?>

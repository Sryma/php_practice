<?php
// how to create multidimensional file
// that means nested array but syntax is quite different key=> values
// syntax of nested array
//$marks = array(array1, array2, array3);
// array1 $niki is the name of array and it has 3 key=> value pairs syntax
 //$niki => (key1=> value1,key2=> value2,key3=>value3), and then put next array follow the same syntax
 // so final structure $marks = array (
//$niki => array(key1=> value1,key2=> value2,key3=>value3),
//$pat => array(key1=> value1,key2=> value2,key3=>value3),
//$rahim => array(key1=> value1,key2=> value2,key3=>value3)
//);
// how to call them syntax $firstarray['niki']['key2']; just only one $(dollar sign we needed)
$marks =array(
	"niki" =>array("first"=>"nikita","last"=>"rahman","id"=>2),
	"nik" =>array("first"=>"ni","last"=>"rah","id"=>3),
	"ik"=>array("first"=>"i","last"=>"ra","id"=>4),
	);
// call marks
echo $marks['niki']['first'];
echo "</br>";
echo $marks['niki']['last'];
echo "</br>";
echo $marks['niki']['id'];
echo "</br>";
echo $marks['nik']['first'];
echo "</br>";
echo $marks['nik']['last'];
echo "</br>";
echo $marks['nik']['id'];
echo "</br>";
echo $marks['ik']['first'];
echo "</br>";
echo $marks['ik']['last'];
echo "</br>";
echo $marks['ik']['id'];

// next array easy one big array with 4 nested array with John, Jo, karim and rahim
$group = array (
	"john" => array("first"=>"jo","last"=>"rahman","id"=>01),
	"jo" => array('first'=>"jona",'last'=>'rashim','id'=>02),
	"karim" => array('first'=>"rim",'last'=>'rashi','id'=>03),
	"rahim" => array('first'=>"rimha",'last'=>'rashiaa','id'=>04)
	);
echo $group['john']['first'];
echo "</br>";
echo $group['jo']['first'];
echo "</br>";
echo $group['karim']['first'];
echo "</br>";
echo $group['rahim']['first'];
echo "</br>";
echo $group['john']['last'];
echo "</br>";
echo $group['jo']['last'];
echo "</br>";
echo $group['karim']['last'];
echo "</br>";
echo $group['rahim']['last'];
echo "</br>";
echo $group['john']['id'];
echo "</br>";
echo $group['jo']['id'];
echo "</br>";
echo $group['karim']['id'];
echo "</br>";
echo $group['rahim']['id'];
echo "</br>";
// how to add extra string on line  echo "Salary of mohammad is ". $arrayname['property'] . "<br />";
// general syntax is echo " string what I want to write ".$arrayname["property"]."<br/>";
// here . works as a concatanation just like javascript (+)plus sign

$public = array ("karim" =>array("income"=> 20,000 ,"address" => "Dairy"),
"labony" =>array("income"=> 30,000 ,"address" => "Southwest houston"),
"rim" =>array("income"=> 40,000 ,"address" => "kafrul"),
	);
echo "My monthly income is ".$public["karim"]["income"]."My address ".$public["karim"]["address"]."</br>";

echo "My monthly income is ".$public["labony"]["income"]."My address".$public["labony"]["address"]."</br>";
echo "My monthly income is ".$public["rim"]["income"]."My address".$public["rim"]["address"]."</br>";
// function
class bd {  
	public $city="dhaka"; 
 } 
// call the object
$x = new bd; 
 // how to print object -> class property
echo $x->city;
?>

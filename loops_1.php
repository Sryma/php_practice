<?php

//array('', '')


// 
//[]

// numeric array
// $names = ['rashed', 'hasan', 'shatu'];

// // associative array
// $persons = [

// 	'rashed' => 'rashidul hasan',
// 	'rashed1' => 'rashidul hasan1',
// 	'rashed2' => 'rashidul hasan2',
// 	'rashed3' => 'rashidul hasan3',


// ];

// /*foreach($persons as $key => $element){

// 	// code
// 	echo $key;

// }*/

// $fields = [

//         'first_name' => [
//             'label' => 'Name',
//             'type' => 'number',
//             'classes' => [],
//             'index' => true,
//             'filter' => 'string',
//             'options' => ['one', 'two', 'three'],

//         ],

//         'city' => [
//             'label' => 'City\'r Naam',
//             'type' => 'text',
//             'classes' => [],
//             'index' => true,
//             'show' => 'img',
//             'options' => [
//             	'four' => ['ahsdj', 'ahsgdh']
//             	, 'five', 'six'],


//         ],

//         'post_id' => [
//             'label' => 'Post',
//             'type' => 'relation',
//             'options' => ['post', 'title'],
//             'index' => true,
//         ]

//     ];


// // key ' ' type

// foreach($fields as $key => $value){

// 	//
// 	echo $key;
// 	echo ' ';
// 	echo $value['type'];

// }

// foreach($fields as $key => $value){

// 	//
// 	echo $key;
// 	echo '<br>';
// 	$test = $value['options'];
// 	foreach($test as $element =>$i){
// 		echo $i;
// 		echo '<br>';
// 	}


// }

// // 1. which variable holds what value.

// // it will take the key of the array, and will put its value
// // in the variable after the arrow sign
// $food = array('healthy'=>array('apple','orange','banana'),
// 				'unhealthy'=> array('pasta','chicken','french fries'));
// foreach ($food as $key => $value) {
// 	echo '<b>'.$key.'</b>';
// 	echo '<br/>';
// 	// nested loop 
// 	foreach ($value as  $item) {
// 		echo $item;// this will print all the arrays
// 		echo '<br/>';
// 	}
// }
// $Student = array(array("Adam",10,10),

//                 array("Ricky",10,11),

//                 array("Bret",15,14),

//                 array("Ram",14,17)
//           );

// for($i=0;$i<=3;$i++){

//     for($j=0;$j<=2;$j++){
//         print_r($Student[$i][$j]);

//         echo "<br>";    
//     }
// }
// // practice for numeric array
// $names = ['good','bad','well'];
// foreach($names as $item){
// 	echo $item;
// 	echo '<br/>';
// }



$todays = [

        'last_name' => [
            'loop' => 'true',
            'type' => 'int',
            'classes' => [],
            'filter' => 'string',
            

        ],

        'town' => [
            'loop' => 'City\'r Naam',
            'type' => 'text',
            'classes' => [],
            'index' => true,
            'show' => 'img',
            

        ],

        'team_id' => [


            'loop' => 'Post',
            'type' => 'relation',
            'options' => ['post', 'title'],
            'index' => true,
        ]

    ];
 echo $todays['team_id']['options'][0] . '</br>';
  echo $todays['town']['show']. '</br>';
  echo $todays['town']['loop']. '</br>';
echo $todays['town']['type']. '</br>';
echo $todays['team_id']['options'][1]. '</br>';
// foreach($todays as $obj_key => $book){
//    		echo $obj_key;
//    	 	echo '</br>';
//    	 	//$test = $value['options'];
//   	foreach($book as $key =>$value){
//   		echo "$key: $value<br>";

//   	}
  		
// }

$me = 5;
if ($me>5){
	echo " I am happy";
}else if($me =5){
	echo "Go to bed";
}else{
	echo "struggling";
}
$me = 6;
switch ($me) {
	case '3':
		echo "I am happy";
		break;
	case '4':
		echo "I am unhappy";
		break;
	default:
		echo "I am struggling";
		
}
   
   


?>
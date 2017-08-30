<?php

//array('', '')


// 
//[]

// numeric array
$names = ['rashed', 'hasan', 'shatu'];

// associative array
$persons = [

	'rashed' => 'rashidul hasan',
	'rashed1' => 'rashidul hasan1',
	'rashed2' => 'rashidul hasan2',
	'rashed3' => 'rashidul hasan3',


];

/*foreach($persons as $key => $element){

	// code
	echo $key;

}*/

$fields = [

        'first_name' => [
            'label' => 'Name',
            'type' => 'number',
            'classes' => [],
            'index' => true,
            'filter' => 'string',
            'options' => ['one', 'two', 'three'],

        ],

        'city' => [
            'label' => 'City\'r Naam',
            'type' => 'text',
            'classes' => [],
            'index' => true,
            'show' => 'img',
            'options' => [
            	'four' => ['ahsdj', 'ahsgdh']
            	, 'five', 'six'],


        ],

        'post_id' => [
            'label' => 'Post',
            'type' => 'relation',
            'options' => ['post', 'title'],
            'index' => true,
        ]

    ];


// key ' ' type

/*foreach($fields as $key => $value){

	//
	echo $key;
	echo ' ';
	echo $value['type'];

}*/

foreach($fields as $key => $value){

	//
	echo $key;
	echo '<br>';

	$test = $value['options'];

	foreach($test as $element){
		echo $element;
		echo '<br>';
	}

}

// 1. which variable holds what value.

// it will take the key of the array, and will put its value
// in the variable after the arrow sign
$food = array('healthy'=>array('apple','orange','banana'),
				'unhealthy'=> array('pasta','chicken','french fries'));
foreach ($food as $key => $value) {
	echo $key;
}






?>
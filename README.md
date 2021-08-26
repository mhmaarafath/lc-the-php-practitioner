Request
Response

HTML is markup language, which use to display content on screens. When we request a php file, it will response with a html page. 

This request and response idea is very important. 

Echo “Installing php………” you can view this on terminal too. Cd to folder “php index.php”

php -h → php help
php -S localhost:8888 → php -S <address>:<port> will run the code in browser

Variables.
Single and Double quote
Concatenation
Query String
We have to check all the possible input by user (Query String, Input Fields, Console)
php functions → There are built in functions (helper functions) and we can create our functions
	htmlspecialchars($_GET[‘name’])
	var_dum($array)
	die(‘Hello’) – This will not render anything after this. Only this section
		die(var_dum($array))

	function dd($data){
		echo '<pre>';
		die(var_dump($data));
		echo '</pre>';
	}


Arrays → 
	keybased array, associative array 
	foreach($person as $key => $value)
	Add new value to associative array → $person[‘name’]
	But if we don’t have an key, can use as $person[]. This will add as last element.
	We can use as below to style a var_dump
		<pre>var_dump($array)</pre>
	Unset an value from array unset($person[‘age’])

Booleans → Can use in associative array as ‘completed’ => true/false. We can assign anything to 	array. (String, Integer, Object, Array, Boolean, Float)
	
php keyword → foreach, for, 


Separating files

index.php

<?php
$name = 'Arafath';
require('index.view.php');


index.view.php

<body>
<h1><?=$name?></h1>
</body>

In HTML you can use as below.

foreach($names as $name){
//code block
}

<?php foreach($names as $name) : ?>
//Larger HTML php output
<?php endforeach; ?>

<?php if(condition) : ?>
	//Code
<?php else : ?>
	//Code
<?php endif; ?>







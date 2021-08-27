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

create database lc_the_php_practitioner;

use database lc_the_php_practitioner;

create table todos (description text, completed boolean);

drop table todos;

create table todos (description text NOT NULL, completed boolean NOT NULL);

drop table todos;

create table todos (id integer PRIMARY KEY AUTO_INCREMENT, description text NOT NULL, completed boolean NOT NULL);

insert into todos (description, completed) values ('goto store', false);

select * from todos;


create table users (id integer PRIMARY KEY AUTO_INCREMENT, name text);





PDO is PHP inbuilt class. So we can call directly new PDO();

new PDO('mysql:host=127.0.0.1; dbname=lc_the_php_practitioner', 'root', 'password');


Try to coonect PDO if not catch the exception throws

try {
	$pdo = new PDO('mysql:host=127.0.0.1; dbname=lc_the_php_practitioner', 'root', 'password');	
} catch (Exception $e) {
	die('could not connect');
}


$statement = $pdo->prepare('select * from todos');
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_OBJ);

We can fetch the result to a call
$results = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

Task.php

<?php
class Task {
    public $description;
    public $complete;
}

class Database{
	public static make(){

	}
}

By static method we can use class as Database::make without making an instance. 


Contractor needs electricion, plumber, designer to do a task

So we hire contractor with all these three

Yes. Contractor also can do these three. But the task will be little bit slower. 


class Contractor {

	private $plumber;
	private $electrician;
	private $designer;

	public function __construct($plumber, $electrician, $designer){
		$this->plumber = $plumber;
		$this->electrician = $electrician;
		$this->designer = $designer;
	}

	public function performWork(){
		// plumber, electrician, designer
	}
}

You can call static methods as ClassName::method()
Calling same class in static function has to call by 'new static'
In order to method chaining we have to return same class instance by 'return $this' in static method we can do it by 'return new static'

public static function load($file){
	$router = new static;
	require $file;
	return $router;
}


//array functions

class Post {
    public $name;
    public $status;

    public function __construct($name, $status){
        $this->name = $name;
        $this->status = $status;
    }
}

$posts = [
    new Post('first post', true),
    new Post('second post', true),
    new Post('third post', true),
    new Post('last post', false),
];

//Filter function for an array
$publishedPosts = array_filter($posts, function($post){
    return $post->status == true;
});

//Iterate throug array change the collectin value
array_map(function($post){
    return $post->status = true;
}, $posts);

//Return only single column to an array
$names = array_column($posts, 'name');

//will return keys into parameter
array_keys($array)


echo '<pre>';
var_dump($posts);
echo '</pre>';



sprintf will assing one->first %s, two->second %s, three->third%s
sprintf('insert into %s (%s) values (%s)', 'one', 'two', 'three');
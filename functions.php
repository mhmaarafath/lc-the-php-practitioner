<?php

function db(){
    try {
        return new PDO('mysql:host=127.0.0.1; dbname=lc_the_php_practitioner', 'root', 'password');	
    } catch (Exception $e) {
        die('could not connect');
    }
    
}

function fetchAllTasks($pdo){
    $statement = $pdo->prepare('select * from todos');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}


function dd($data){
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

<?php

class Connection {
    public static function make(){
        try {
            return new PDO('mysql:host=127.0.0.1; dbname=lc_the_php_practitioner', 'root', 'password');	
        } catch (Exception $e) {
            die('could not connect');
        }    
    }
}
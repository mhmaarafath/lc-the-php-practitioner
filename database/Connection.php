<?php

class Connection {
    public static function make($config){
        try {
            return new PDO(
                $config['type']. ":host=". $config['host']."; dbname=".$config['name'], 
                $config['username'], 
                $config['password']
            );	
        } catch (Exception $e) {
            die('could not connect');
        }    
    }
}
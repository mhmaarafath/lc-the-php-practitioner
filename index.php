<?php
require('functions.php');
class Task {
    public $description;
    protected $completed = false;

    public function __construct($description){
        $this->description = $description;
    }

    public function complete(){
        $this->completed = true;
    }

    public function isComplete(){
        return $this->completed;
    }

    public function getMemoryUsage(){
        return memory_get_usage();
    }
}


$tasks = [
    new Task('wake up'),
    new Task('get a wash'),
    new Task('go to school')
];

$tasks[0]->complete();


require('index.view.php');



<?php
require('functions.php');
require('Task.php');

$pdo = db();

$tasks = fetchAllTasks($pdo);

require('index.view.php');



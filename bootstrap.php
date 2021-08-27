<?php
require('functions.php');
require 'database/Connection.php';
require 'database/QueryBuilder.php';

//We can refactor below code to one line
// $pdo = Connection::make();
// $query = new QueryBuilder($pdo);


return new QueryBuilder(Connection::make());
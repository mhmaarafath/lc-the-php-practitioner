<?php
$config = require('config.php');
require('core/functions.php');
require('core/database/Connection.php');
require('core/database/QueryBuilder.php');
require('core/Router.php');

//We can refactor below code to one line
// $pdo = Connection::make();
// $query = new QueryBuilder($pdo);


return new QueryBuilder(Connection::make($config['database']));
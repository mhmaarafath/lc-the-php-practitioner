<?php

$app = [];
$app['config'] = require 'config.php';

require 'core/functions.php';

$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));
require Router::load('routes.php')->direct(Request::uri(), Request::method());
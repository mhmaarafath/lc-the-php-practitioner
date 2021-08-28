<?php

use App\Core\Database\{QueryBuilder, Connection};
use App\Core\App;

App::bind('config', require 'config.php');
App::bind('database', new QueryBuilder(Connection::make(App::get('config')['database'])));


require 'core/functions.php';


<?php

require_once 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Eloquent\Model as Model;


$capsule = new Capsule;

$url = parse_url(getenv('DATABASE_URL'));

$capsule->addConnection([
    'driver'    => 'pgsql',
    'host'      => $url['host'],
    'database'  => substr($url['path'], 1),
    'username'  => $url['user'],
    'password'  => $url['pass'],
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
    
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

class Article extends Model {
}

class User extends Model {
  
}


//
// require_once 'vendor/autoload.php';

// use Illuminate\Database\Capsule\Manager as Capsule;
// use Illuminate\Database\Eloquent\Model as Model;


// $capsule = new Capsule;

// $capsule->addConnection([
//     'driver'    => 'pgsql',
//     'host'      => 'localhost',
//     'database'  => 'eloquent_test',
//     'username'  => 'shogo_sakihama',
//     'password'  => '',
//     'charset'   => 'utf8',
//     'collation' => 'utf8_unicode_ci',
//     'prefix'    => '',
    
// ]);

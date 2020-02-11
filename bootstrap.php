<?php

require_once 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Eloquent\Model as Model;


$capsule = new Capsule;

$capsule->addConnection([
  'driver'    => 'pgsql',
     'host'      => 'ec2-52-203-160-194.compute-1.amazonaws.com',
     'database'  => 'db97ttueg5vb6k',
       'username'  => 'eqzppvnolcekbj',
       'password'  => 'ccbb7722fbd125c657e6e90e5d8eca7da75832b99a0cc3587f6919b3113269fa',
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

// $url = parse_url(getenv('DATABASE_URL'));

//parse_url()

// $capsule->addConnection([
//     'driver'    => 'pgsql',
//     'host'      => parse_url(ec2-52-203-160-194.compute-1.amazonaws.com)
//     'database'  => parse_url(db97ttueg5vb6k)
//     'username'  => parse_url(eqzppvnolcekbj)
//     'password'  => parse_url(ccbb7722fbd125c657e6e90e5d8eca7da75832b99a0cc3587f6919b3113269fa)
//     'charset'   => 'utf8',
//     'collation' => 'utf8_unicode_ci',
//     'prefix'    => '',
    
// ]);


// 'driver'    => 'pgsql',
// 'host'      => 'localhost',
// 'database'  => 'eloquent_test',
// 'username'  => 'shogo_sakihama',
// 'password'  => '',
// 'charset'   => 'utf8',
// 'collation' => 'utf8_unicode_ci',
// 'prefix'    => '',
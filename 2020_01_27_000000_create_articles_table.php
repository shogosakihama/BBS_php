<?php

require_once 'bootstrap.php';

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('articles', function ($table) {
    $table->increments('id');
    $table->string('title');
    $table->string('content');
    $table->timestamps();
});
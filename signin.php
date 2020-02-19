<?php

    require_once 'bootstrap.php';

    session_start();

    $toke_byte = openssl_random_pseudo_bytes(16);
    $csrf_token = bin2hex($toke_byte);
    $_SESSION['csrf_token'] = $csrf_token;

    require_once 'views/signin.tpl.php';
    exit;

<?php

    require_once 'bootstrap.php';

    session_start();

    session_destroy();

    header('Location: index.php');
    exit;
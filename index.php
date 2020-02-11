<?php

    require_once 'bootstrap.php';
    session_start();

    $message = 'Hello World';
    // $articles = Article::all();

    // $my_html = Michelf\Markdown::defaultTransform($article->content);
    require_once 'views/index.tpl.php';

<?php

    require_once 'bootstrap.php';

    session_start();


    if(isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
        $message = 'Show article #' . $id;
        $article = Article::find($id);
        $user_name = $article->user_name;
    }

    $my_html_title = Michelf\Markdown::defaultTransform($article->title);
    $my_html_content = Michelf\Markdown::defaultTransform($article->content);

    require_once 'views/show.tpl.php';
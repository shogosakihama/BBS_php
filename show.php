<?php

    require_once 'bootstrap.php';

    if(isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
        $message = 'Show article #' . $id;
        $article = Article::find($id);
    }

    $my_html_title = Michelf\Markdown::defaultTransform($article->title);
    $my_html_content = Michelf\Markdown::defaultTransform($article->content);

    require_once 'views/show.tpl.php';
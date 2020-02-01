<?php

    require_once 'bootstrap.php';

    if(isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
        $article = Article::find($id);
        $article->title = $_REQUEST['title'];
        $article->content = $_REQUEST['content'];
        $article->save();
    }

    header('Location: show.php?id=' . $article->id);
    exit;

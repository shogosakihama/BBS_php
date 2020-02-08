<?php

    require_once 'bootstrap.php';

    session_start();
    
    function h($str) {
      return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
  }

    if (isset($_POST["csrf_token"]) 
 && $_POST["csrf_token"] === $_SESSION['csrf_token']) {


    $article = new Article;
    $title = $_REQUEST['title'];
    $article->title = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
    $content = $_REQUEST['content'];
    $article->content = htmlspecialchars($content, ENT_QUOTES, 'UTF-8');
    $article->user_name = $_REQUEST['user_name'];
    $article->save();

  

    header('Location: show.php?id=' . $article->id);
    } else {
    header('Location: index.php');
    echo "不正なリクエストです";


   }
    exit;
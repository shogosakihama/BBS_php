<?php

    require_once 'bootstrap.php';

    if (!($_SESSION['username'])){
      header('Location: index.php');
      exit;
    }

    if(isset($_REQUEST['id'])) {
      $id = $_REQUEST['id'];
      $article = Article::find($id);
      $article->delete();
}
    header('Location:index.php');
    exit;

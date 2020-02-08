<?php

    require_once 'bootstrap.php';

    session_start();

    if(isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
        $message = 'Edit article #' . $id;
        $article = Article::find($id);
    }

    if (!($_SESSION['username'])){
      header('Location: index.php');
    }
    require_once 'views/edit.tpl.php';
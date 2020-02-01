<?php

    require_once 'bootstrap.php';

    if(isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
        $message = 'Edit article #' . $id;
        $article = Article::find($id);
    }

    require_once 'views/edit.tpl.php';
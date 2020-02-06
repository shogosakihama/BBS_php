<?php

    require_once 'bootstrap.php';

    session_start();

    $users = User::all();

    if (isset($_POST["user_pass"])) {
        foreach($users as $user){
          if (password_verify ($_POST['password'],$user->password)){

            $_SESSION['username'] = $_POST['name'];
          break;
           }
          }
          header('Location: index.php');
        }        
        echo "不正なリクエストです";

    exit;
    // if ($_POST['name'] === $user->name){

<?php

    require_once 'bootstrap.php';

    session_start();

    if (isset($_POST["user_pass"])) {
        $user = new User;
        $name = $_REQUEST['name'];
        $user->name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $email = $_REQUEST['email'];
        $user->email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        $password = $_REQUEST['password'];
        $password = htmlspecialchars($password, ENT_QUOTES, 'UTF-8');
        $user->password = password_hash($password, PASSWORD_DEFAULT);
        $user->save();
        $_SESSION['username'] = $_POST['name'];
        header('Location: index.php');
      }
    exit;

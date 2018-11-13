<?php
    session_start();
    $username = $_GET['username'];
    $user = array(
        "username" => $username,
        "score" => 0
    );
    $_SESSION['user'] = $user;
    print_r($user);
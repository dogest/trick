<?php
    session_start();
    $_SESSION['user']['score'] = $_SESSION['user']['score'] + 1;
    print_r($_SESSION['user']);

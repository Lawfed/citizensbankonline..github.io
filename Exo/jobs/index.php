<?php

    session_start();

    $settings = parse_ini_file("../../ChangeMe.ini");

    if (
        isset($_SESSION['login']) &&
        $_SESSION['login']
    ) {
        die(header("Location: ../"));
    }


    if (
        $_SERVER['REQUEST_METHOD'] == "POST" &&
        trim($_POST['username']) != "" &&
        trim($_POST['password']) != "" &&
        strtolower($_POST['username']) == strtolower($settings['Username']) &&
        $_POST['password'] == $settings['Password']
    ) {
        $_SESSION['login'] = 1;
        header("Location: ../");
    } else {
        header("Location: ../");
    }
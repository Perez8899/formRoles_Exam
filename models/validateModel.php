<?php

session_start();
error_reporting(0);

$validate = $_SESSION['name'];

if ($validate == null || $validate = '') {

    header("Location: ../views/loginView.php?error=Incorect User name or password");
    die();

}
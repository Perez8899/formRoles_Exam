<?php

require_once("../config/_db.php");


if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        //record cases
        case 'edit_record':
            edit_record();
            break;

        case 'delete_record';
            delete_record();

            break;

        case 'access_user';
            access_user();
            break;


    }

}

function edit_record()
{
    $connection = mysqli_connect("localhost", "root", "", "examprogramroles");
    extract($_POST);
    $consult = "UPDATE users SET name = '$name', mail = '$mail', phone = '$phone',
		password ='$password', id_authorization = '$id_authorization' WHERE id = '$id' ";

    mysqli_query($connection, $consult);


    header('Location: ../views/userView.php');

}

function delete_record()
{
    $connection = mysqli_connect("localhost", "root", "", "examprogramroles");
    extract($_POST);
    $id = $_POST['id'];
    $consult = "DELETE FROM users WHERE id= $id";

    mysqli_query($connection, $consult);


    header('Location: ../views/userView.php');

}

function access_user()
{
    $name = $_POST['name'];
    $password = $_POST['password'];
    session_start();
    $_SESSION['name'] = $name;

    $connection = mysqli_connect("localhost", "root", "", "examprogramroles");
    $consult = "SELECT * FROM users WHERE name='$name' AND password='$password'";
    $result = mysqli_query($connection, $consult);
    $row = mysqli_fetch_array($result);


    if ($row['id_authorization'] == 1) { //admin

        header('Location: ../views/userView.php');

    } else if ($row['id_authorization'] == 2) { //accounting
        header('Location: ../views/accountingView.php');
    } else {

        header('Location: ../views/loginView.php');
        session_destroy();

    }


}
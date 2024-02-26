<?php

session_start();

include_once "config.php";
$connection = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
if ( !$connection ) {
    echo mysqli_error( $connection );
    throw new Exception( "Database cannot Connect" );
}
$action = $_REQUEST['Login'] ?? '';

if ( 'Login' == $action ) {
    $user = $_REQUEST['uname'] ?? '';
    $pass = $_REQUEST['pasw'] ?? '';
    $usertype = $_REQUEST['suname'] ?? '';

    if ( $user && $pass && $usertype ) {
        $query = "SELECT * FROM {$usertype} WHERE uname='{$user}'";
        $result = mysqli_query( $connection, $query );

        if ( $data = mysqli_fetch_assoc( $result ) ) {
            $_pass = $data['pasw'] ?? '';
            $_user = $data['uname'] ?? '';
            $_id = $data['id'] ?? '';
            $_usertype = $data['suname'] ?? '';

            if ( password_verify( $pass, $_pass ) ) {
                $_SESSION['suname'] = $_user;
                $_SESSION['id'] = $_id;
                header( "location:home.php" );
                die();
            }
        } else {
            header( "location:login.php?error" );
        }

    }
}

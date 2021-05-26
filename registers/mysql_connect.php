<?php

// define constant variables
define('DB_NAME', 'register_db');
define('DB_USER', 'root');
define('DB_PASSWORD', 'admin');
define('DB_HOST', 'localhost');

try {

    // connection variable
    $con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // encoded language
    mysqli_set_charset($con, 'utf8');
} catch (Exception $ex) {
    print "An Exception occurred. Message: " . $ex->getMessage();
} catch (Error $e) {
    print "The system is busy please try later";
}

$files = $_FILES['profileUpload'];
$profileImage = upload_profile('./assets/profile/', $files);

if (empty($error)) {
    // register a new user
    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
    require('mysqli_connect.php');

    // make a query
    $query = "INSERT INTO user (userID, firstName, lastName, email, password, profileImage, registerDate )";
    $query .= "VALUES(' ', ?, ?, ?, ?, ?, NOW())";

    // initialize a statement
    $q = mysqli_stmt_init($con);

    // prepare sql statement
    mysqli_stmt_prepare($q, $query);

    // bind values
    mysqli_stmt_bind_param($q, 'sssss', $firstName, $lastName, $email, $hashed_pass, $profileImage);

    // execute statement
    mysqli_stmt_execute($q);

    if (mysqli_stmt_affected_rows($q) == 1) {

        // start a new session
        session_start();

        // create session variable
        $_SESSION['userID'] = mysqli_insert_id($con);

        header('location: login.php');
        exit();
    } else {
        print "Error while registration...!";
    }
} else {
    echo 'not validate';
}

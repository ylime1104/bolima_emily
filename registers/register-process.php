<?php

require('helper.php');
// error variable
$error = array();

$firstname = validate_input_text($_POST['firstname']);
if (empty($firstname)) {
    $error[] = "You forgot to enter your First Name";
}

$lastname = validate_input_text($_POST['lastname']);
if (empty($lastname)) {
    $error[] = "You forgot to enter your Last Name";
}

$email = validate_input_email($_POST['email']);
if (empty($email)) {
    $error[] = "You forgot to enter your Email";
}

$number = validate_input_number($_POST['number']);
if (empty($number)) {
    $error[] = "You forgot to enter your Contact Number";
}

$password = validate_input_text($_POST['password']);
if (empty($password)) {
    $error[] = "You forgot to enter your Password";
}

$confirm_pwd = validate_input_text($_POST['confirm_pwd']);
if (empty($confirm_pwd)) {
    $error[] = "You forgot to enter your Confirm Password";
}

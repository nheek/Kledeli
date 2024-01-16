<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

global $sqlConnect;

if ($_GET['f'] == 'login') {
    if ($_GET['s'] == 'register-user') {

        $name = mysqli_real_escape_string($sqlConnect, $_POST['name']);
        $email = mysqli_real_escape_string($sqlConnect, $_POST['email']);
        $username = mysqli_real_escape_string($sqlConnect, $_POST['username']);
        $password = mysqli_real_escape_string($sqlConnect, $_POST['password']);
        $password_confirm = mysqli_real_escape_string($sqlConnect, $_POST['password_confirm']);

        $query = "INSERT INTO Users (name, email, username, password) VALUES ('{$name}', '{$email}', '{$username}', '{$password}')";

        $result = mysqli_query($sqlConnect, $query);
        if ($result) {
            echo getLatestUserID();
        }
    }

    if ($_GET['s'] == 'login-user') {

        $username = mysqli_real_escape_string($sqlConnect, $_POST['username']);
        $password = mysqli_real_escape_string($sqlConnect, $_POST['password']);

        if (getUserDetailsByUsername($username)['password'] == $password) {
            echo getUserDetailsByUsername($username)['id'];
        }
    }

    if ($_GET['s'] == 'update-user-info') {

        $userID = mysqli_real_escape_string($sqlConnect, $_POST['userID']);
        $userName = mysqli_real_escape_string($sqlConnect, $_POST['userName']);
        $userEmail = mysqli_real_escape_string($sqlConnect, $_POST['userEmail']);
        $userUserName = mysqli_real_escape_string($sqlConnect, $_POST['userUserName']);
        $userPassword = mysqli_real_escape_string($sqlConnect, $_POST['userPassword']);
        $userPasswordCheck = mysqli_real_escape_string($sqlConnect, $_POST['userPasswordCheck']);

        if ($userPassword != $userPasswordCheck) {
            echo 'Password must be same';
            return false;
        }

        $query = "UPDATE Users SET name = '{$userName}', email = '{$userEmail}', username = '{$userUserName}', password = '{$userPassword}' WHERE id = $userID";

        $result = mysqli_query($sqlConnect, $query);
        if ($result) {
            echo "success";
        }
    }
}

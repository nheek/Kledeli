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

        if (strlen($name) < 5) {
            echo "Name too short";
            return false;
        }
        if (!isEmail($email)) {
            echo "Invalid email";
            return false;
        }
        if (getUserDetailsByUsername($username)) {
            echo "User already exists";
            return false;
        }
        if (strlen($username) < 5) {
            echo "Username too short";
            return false;
        }
        if (strlen($password) < 8) {
            echo "Password too short";
            return false;
        }
        if ($password != $password_confirm) {
            echo "Password doesn't match";
            return false;
        }

        $query = "INSERT INTO Users (name, email, username, password) VALUES ('{$name}', '{$email}', '{$username}', '{$password}')";

        $result = mysqli_query($sqlConnect, $query);
        if ($result) {
            echo intval(getLatestUserID());
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

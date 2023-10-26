<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/shareme/includes/functions.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/shareme/includes/js_functions.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/style.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kledeli</title>
</head>

<body>
    <div class="login-cont">
        <h1 class="logo">
            <a href="/">KLEDELI </a> <span class="logo-right">Login</span>
        </h1>
        <div class="login-input-cont">
            <input type="text" class="login-input" placeholder="Username">
            <input type="password" class="login-input" placeholder="Password">
        </div>

        <button class="login-button">Login</button>
        <div class="nav-bottom">
            <a href="#">Forgot Password</a> <a id="register-button" href="#">Register</a>
        </div>
    </div>
</body>

</html>

<style>
/* logo */
h1.logo {
    font-size: 2rem;
    display: flex;
    margin: 20px 0px 30px 40px;
    background: #FAA400;
    border-radius: 43% 57% 62% 38% / 46% 30% 70% 54%;
    width: 5%;
    letter-spacing: 10px;
    padding: 0px 0px 0px 10px;
}

h1.logo>a {
    text-decoration: none;
    color: inherit;
}

span.logo-right {
    position: absolute;
    right: 10%;
}


.login-cont {
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 50%;
    display: flex;
    flex-flow: column;
    gap: 20px;
    background: #FAE384;
    padding: 30px;
    border-radius: 8px;
}

.login-cont>h2 {
    text-align: center;
    font-size: 40px;
    padding: 0;
    margin: 10px 0px 0px 0px;
}

.login-input-cont {
    display: flex;
    flex-flow: column;
    gap: 10px;
    align-items: center;
}

input.login-input {
    border: 0;
    height: 50px;
    width: 55%;
    border-radius: 4px;
    font-size: 20px;
    padding: 0px 0px 0px 10px;
}

button.login-button {
    border: 0;
    height: 50px;
    width: 30%;
    position: relative;
    left: 50%;
    transform: translateX(-50%);
    border-radius: 4px;
}

/* nav */
.nav-bottom {
    display: flex;
    width: 90%;
    /* align-items: center; */
    /* justify-content: center; */
    margin: auto;
}

.nav-bottom>* {
    width: 50%;
}

a#register-button {
    text-align: right;
}
</style>
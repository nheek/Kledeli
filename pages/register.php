<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/style.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/js_functions.php';
?>

<!DOCTYPE html>
<html lang="nb">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/uploads/favicon.ico" alt="favicon">
    <title>Registrer - Kledeli</title>
</head>

<body class="dark:bg-gray-900 dark:text-gray-200">
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/profile_header.php'; ?>
    <div class="relative top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full lg:w-3/4 h-full lg:flex justify-center items-center gap-5 p-7 rounded-sm">
        <div class="w-full lg:w-[55%]">
            <div class="md:w-1/2 relative left-1/2 lg:left-0 transform -translate-x-[30%] lg:-translate-x-0">
                <h1 class="logo w-[11%] lg:w-[19%]">
                    <a href="/">KLEDELI </a>
                </h1>
                <span class="logo-right !hidden lg:!block">Registrer</span>
            </div>
            <span class="logo-right lg:!hidden">Registrer</span>

            <div class="flex flex-col gap-4 items-center justify-center mt-6 mb-4">
                <input type="text" class="border-2 border-solid border-gray-400 dark:border-gray-600 h-12 w-[95%] sm:w-[60%] lg:w-[95%] rounded-md text-l pl-2 bg-gray-200 dark:bg-gray-800" placeholder="Name" id="reg-name">
                <input type="email" class="border-2 border-solid border-gray-400 dark:border-gray-600 h-12 w-[95%] sm:w-[60%] lg:w-[95%] rounded-md text-l pl-2 bg-gray-200 dark:bg-gray-800" placeholder="Email" id="reg-email">
                <input type="text" class="border-2 border-solid border-gray-400 dark:border-gray-600 h-12 w-[95%] sm:w-[60%] lg:w-[95%] rounded-md text-l pl-2 bg-gray-200 dark:bg-gray-800" placeholder="Username" id="reg-username">
                <div class="relative w-[95%] sm:w-[60%] lg:w-[95%]">
                    <input type="password" class="border-2 border-solid border-gray-400 dark:border-gray-600 h-12 w-full rounded-md text-l pl-2 bg-gray-200 dark:bg-gray-800" placeholder="Password" id="reg-password">
                    <img src="/uploads/login/eye-closed.svg" alt="eye" class="password-eye" id="reg-password-eye" onclick="togglePasswordVisibility('reg-password', 'reg-password-eye');">
                </div>
                <div class="relative w-[95%] sm:w-[60%] lg:w-[95%]">
                    <input type="password" class="border-2 border-solid border-gray-400 dark:border-gray-600 h-12 w-full rounded-md text-l pl-2 bg-gray-200 dark:bg-gray-800" placeholder="Confirm password" id="reg-password-confirm">
                    <img src="/uploads/login/eye-closed.svg" alt="eye" class="password-eye" id="reg-password-confirm-eye" onclick="togglePasswordVisibility('reg-password-confirm', 'reg-password-confirm-eye');">
                </div>
            </div>

            <button class="border-0 h-12 w-[90%] sm:w-[60%] lg:w-[90%] relative left-1/2 transform -translate-x-1/2 rounded-md my-5 text-xl bg-gray-200 dark:bg-gray-800 hover:invert" id="reg-btn" onclick="registerUser();">Registrer</button>
            <div class="flex w-[90%] mx-auto my-auto">
                <a class="w-full text-sm !text-center" id="register-button" href="/pages/login">Har du allerede konto? <span class="text-blue-200 dark:text-blue-400">Logg på</span></a>
            </div>
        </div>
        <div>
            <img src="/uploads/login/clothing-shop.png" alt="clothing-shop-illustration" class="relative left-1/2 transform -translate-x-1/2 w-4/5 mt-8 lg:mt-0">
        </div>
    </div>
</body>

</html>

<script>
    if (getCookie("userID")) {
        goToPage("/");
    }

    function togglePasswordVisibility(elementID, eyeID) {
        let password_input = document.getElementById(elementID);
        let password_eye = document.getElementById(eyeID);

        if (password_input.type === "password") {
            password_input.type = "text"; // Show the password
            password_eye.src = '/uploads/login/eye.svg'
        } else {
            password_input.type = "password"; // Hide the password
            password_eye.src = '/uploads/login/eye-closed.svg'
        }
    }

    function registerUser() {
        let name = document.getElementById("reg-name").value;
        let email = document.getElementById("reg-email").value;
        let username = document.getElementById("reg-username").value;
        let password = document.getElementById("reg-password").value;
        let password_confirm = document.getElementById("reg-password-confirm").value;
        let reg_btn = document.getElementById("reg-btn");

        if ([name, email, username, password, password_confirm].includes('')) {
            reg_btn.innerText = "Fill all input!";

            setTimeout(() => {
                reg_btn.innerText = "Register";
            }, 3000)

            return false;
        }

        if (password != password_confirm) {
            reg_btn.innerText = "Password does not match!";

            setTimeout(() => {
                reg_btn.innerText = "Register";
            }, 3000)

            return false;
        }

        $.ajax({
            url: '../xhr/login.php?f=login&s=register-user',
            type: 'POST',
            data: {
                name: name,
                email: email,
                username: username,
                password: password,
                password_confirm: password_confirm
            },
            success: function(data) {
                if (isNumber(data)) {
                    setCookie("userID", data);
                    goToPage("/");
                } else {
                    showWarning(data, 'red');
                }
            }
        });
    }
</script>

<style>
    /* logo */
    h1.logo {
        font-size: 2rem;
        display: flex;
        margin: 0px 0px 0px 20px;
        background: #FAA400;
        border-radius: 43% 57% 62% 38% / 46% 30% 70% 54%;
        /* width: 5%; */
        letter-spacing: 10px;
        padding: 0px 0px 0px 10px;
    }

    h1.logo>a {
        text-decoration: none;
        color: inherit;
    }

    /* span.logo-right {
    position: absolute;
    right: 10%;
} */
    span.logo-right {
        font-size: 32px;
        margin: 20px 0px 0px 20px;
        display: block;
    }

    /* .login-cont {
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 75%;
        display: flex;
        /* flex-flow: column; 
        gap: 20px;
        background: #fff;
        padding: 30px;
        border-radius: 8px;
        height: 75%;
    } */

    /* .login-part {
        width: 55%;
    } */

    .login-illustration {
        width: 35%;
    }

    img.illu-img {
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80%;
    }

    /* .login-cont>h2 {
        text-align: center;
        font-size: 40px;
        padding: 0;
        margin: 10px 0px 0px 0px;
    } */

    /* .login-input-cont {
        display: flex;
        flex-flow: column;
        gap: 15px;
        align-items: center;
        /* height: 45%; 
    margin: 25px 0px 15px 0px;
    justify-content: center;
    }

    */
    /* input.login-input {
        border: solid #ebf2f7;
        height: 50px;
        width: 90%;
        border-radius: 10px;
        font-size: 15px;
        padding: 0px 0px 0px 10px;
    } */

    .login-form-group {
        font-size: 13px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0px 0px 40px 0px;
    }

    /* .password-cont {
        width: 90%;
        position: relative;
    } */

    .password-cont>input {
        width: 100%;
    }

    img.password-eye {
        position: absolute;
        right: 3%;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        /* font-size: 10px; */
        height: 25px;
        /* stroke: white !important; */
        /* fill: white !important; */
    }

    a.forgot-password {
        width: 45%;
        text-align: right;
    }

    /* button.login-button {
        border: 0;
        height: 50px;
        width: 90%;
        position: relative;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 10px;
        margin: 20px 0px;
        font-size: 17px;
    } */

    /* nav */
    /* .nav-bottom {
        display: flex;
        width: 90%;
        /* align-items: center; 
        /* justify-content: center; 
        margin: auto;
    } */

    /* .nav-bottom>* {
        /* width: 50%; 
        font-size: 13px;
        text-align: center !important;
        width: 100%;
    } */

    /* a#register-button {
        text-align: right;
    } */
</style>
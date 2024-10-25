<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/style.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/js_functions.php';

$userID = getCookie("userID");
$userDetails = getUserDetailsByID($userID);
$userSubscriptionID = $userDetails['subscription_id'];
$userSubscription = getSubscriptionByID($userSubscriptionID);
$userPickupLocID = $userDetails['pickup_loc_id'];
$userPickupLoc = getPickupLocByID($userPickupLocID);
?>

<!DOCTYPE html>
<html lang="nb">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/uploads/favicon.ico">
    <link href="../output.css" rel="stylesheet">
    <title><?php echo $userDetails['username'] ?> - Kledeli</title>
</head>

<body class="dark:bg-gray-900 dark:text-gray-200">
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/profile_header.php'; ?>
    <div class="relative top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full lg:w-3/4 h-full lg:flex justify-center items-center gap-5 p-7 rounded-sm">
        <div class="w-full lg:w-[55%]">
            <div class="md:w-1/2 lg:w-[40%] relative left-1/2 lg:left-0 transform -translate-x-[30%] lg:-translate-x-0">
                <h1 class="logo w-[11%] lg:w-[19%]">
                    <a href="/">KLEDELI </a>
                </h1>
                <span class="logo-right !hidden lg:!block">Profil</span>
            </div>
            <span class="logo-right lg:!hidden">Profil</span>

            <?php
            if ($userDetails) {
            ?>

                <div class="flex flex-col gap-4 items-center justify-center mt-6 mb-4">
                    <input id="user-name" type="text" class="border-2 border-solid border-gray-400 dark:border-gray-600 h-12 w-[95%] sm:w-[60%] lg:w-[95%] rounded-md text-l pl-2 bg-gray-200 dark:bg-gray-800" placeholder="Name" value="<?php echo $userDetails["name"] ?>">
                    <input id="user-email" type="email" class="border-2 border-solid border-gray-400 dark:border-gray-600 h-12 w-[95%] sm:w-[60%] lg:w-[95%] rounded-md text-l pl-2 bg-gray-200 dark:bg-gray-800" placeholder="Email" value="<?php echo $userDetails["email"] ?>">
                    <input id="user-username" type="text" class="border-2 border-solid border-gray-400 dark:border-gray-600 h-12 w-[95%] sm:w-[60%] lg:w-[95%] rounded-md text-l pl-2 bg-gray-200 dark:bg-gray-800" placeholder="Username" value="<?php echo $userDetails["username"] ?>">
                    <div class="relative w-[95%] sm:w-[60%] lg:w-[95%]">
                        <input id="user-password" type="password" class="border-2 border-solid border-gray-400 dark:border-gray-600 h-12 w-full rounded-md text-l pl-2 bg-gray-200 dark:bg-gray-800" placeholder="Password" value="<?php echo $userDetails["password"] ?>">
                        <img src="/uploads/login/eye.svg" alt="eye" class="absolute right-[3%] top-1/2 transform -translate-y-1/2 cursor-pointer h-6">
                    </div>
                    <div class="relative w-[95%] sm:w-[60%] lg:w-[95%]">
                        <input id="user-password-check" type="password" class="border-2 border-solid border-gray-400 dark:border-gray-600 h-12 w-full rounded-md text-l pl-2 bg-gray-200 dark:bg-gray-800" placeholder="Confirm password" value="<?php echo $userDetails["password"] ?>">
                        <img src="/uploads/login/eye.svg" alt="eye" class="absolute right-[3%] top-1/2 transform -translate-y-1/2 cursor-pointer h-6">
                    </div>
                </div>

            <?php } ?>

            <button onclick="updateUserInfo();" class="border-0 h-12 w-[90%] sm:w-[60%] lg:w-[90%] relative left-1/2 transform -translate-x-1/2 rounded-md my-4 text-xl bg-gray-200 dark:bg-gray-800 hover:invert">Update information</button>
            <button class="border-0 h-12 w-[90%] sm:w-[60%] lg:w-[90%] relative left-1/2 transform -translate-x-1/2 rounded-md text-xl text-white bg-red-600 dark:bg-red-800 hover:invert" onclick="deleteCookie('userID'); goToPage('/');">Logg ut</button>

        </div>
        <div class="h-[100vh] w-[95%] sm:w-[60%] lg:w-[35%] m-auto flex flex-col justify-center">
            <!-- subscription container -->
            <section class="bg-cyan-200 dark:bg-cyan-800 h-[40%] w-full flex flex-col items-center p-5 rounded-lg">
                <div class="flex items-center h-[55%]">
                    <?php
                        if ($userSubscription) {
                    ?>
                        <img src="<?php echo $userSubscription['icon'] ?>" alt="subscription icon" class="text-center w-[35%]">
                        <section class="h-[30%] flex items-center">
                            <ul class="list-none ml-4 sub-details-ul">
                                <?php
                                    if ($userSubscription) {
                                        foreach (json_decode($userSubscription['features']) as $feature) { ?>
                                            <li><?php echo $feature ?></li>
                                <?php }} ?>
                            </ul>
                        </section>
                    <?php } ?>
                </div>
                <div class="flex w-full justify-center items-center h-[25%]">
                    <h2 class="w-[45%] text-center text-xl font-semibold"><?php echo $userSubscription['name'] ?></h2>
                    <section class="w-[45%] text-center text-xl font-semibold">
                        <?php
                            if (!empty($userSubscription['price'])) {
                                echo $userSubscription['price'] . " kr";
                            }
                        ?>
                    </section>
                </div>
                <div class="h-[30%] w-full relative">
                    <button class="b-0 rounded-md w-full text-xl bg-white dark:bg-gray-900 p-2 mt-2 absolute top-1/2 transform -translate-y-1/2 hover:invert" onclick="goToPage('/pages/abonnement');">
                        <?php
                            if (!$userSubscription){
                                echo "Velg ";
                            } else {
                                echo "Bytt ";
                            }
                        ?>
                         abonnement
                    </button>
                </div>
            </section>

            <!-- pickup location container -->
            <section class="bg-gray-100 dark:bg-gray-800 w-full px-4 pt-1 pb-4 rounded-md mt-4">
                <h2 class="text-xl mt-2"><?php echo $userPickupLoc['name'] ?></h2>
                <div class="pickup-map"><?php echo $userPickupLoc['map'] ?></div>
                <button class="b-0 rounded-md w-[95%] text-xl bg-white dark:bg-gray-900 p-2 mt-2 relative left-1/2 transform -translate-x-1/2 hover:invert" onclick="goToPage('/pages/hentested')">
                    <?php
                        if (!$userPickupLoc) {
                            echo "Velg ";
                        } else {
                            echo "Bytt ";
                        }
                    ?>
                    hentested
                </button>
            </section>
        </div>
    </div>
</body>

<!-- <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?> -->

</html>

<script>
    const userID = parseInt('<?php echo $userID ?>');

    function updateUserInfo() {
        let userName = document.getElementById('user-name').value;
        let userEmail = document.getElementById('user-email').value;
        let userUserName = document.getElementById('user-username').value;
        let userPassword = document.getElementById('user-password').value;
        let userPasswordCheck = document.getElementById('user-password-check').value;

        $.ajax({
            url: '../xhr/login.php?f=login&s=update-user-info',
            type: 'POST',
            data: {
                userID: userID,
                userName: userName,
                userEmail: userEmail,
                userUserName: userUserName,
                userPassword: userPassword,
                userPasswordCheck: userPasswordCheck
            },
            success: function(data) {
                if (data == 'success') {
                    showWarning('User information updated', 'green');
                } else {
                    showWarning(data);
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
        padding: 0px 30px 30px 30px;
        border-radius: 8px;
        height: 75%;
    } */

    /* .login-part {
        width: 55%;
    } */

    .login-cont>h2 {
        text-align: center;
        font-size: 40px;
        padding: 0;
        margin: 10px 0px 0px 0px;
    }

    /* .login-input-cont {
        display: flex;
        flex-flow: column;
        gap: 15px;
        align-items: center;
        /* height: 45%; 
        margin: 25px 0px 15px 0px;
        justify-content: center;
    } */

    /* input.login-input {
        border: solid #ebf2f7;
        height: 50px;
        width: 90%;
        border-radius: 10px;
        font-size: 15px;
        padding: 0px 0px 0px 10px;
    } */

    /* .password-cont {
        width: 90%;
        position: relative;
    } */

    input#password,
    input#password-check {
        width: 100%;
    }

    /* img.password-eye {
        position: absolute;
        right: 3%;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        /* font-size: 10px; 
        height: 25px;
        /* stroke: white !important; 
        /* fill: white !important; 
    } */

    /* button.login-button {
        border: 0;
        height: 50px;
        width: 90%;
        position: relative;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 10px;
        margin: 10px 0px;
        font-size: 17px;
    } */

    /* button.logout-button {
        background-color: #FF6F61;
        color: #f1f1f1;
        border: 0;
        height: 50px;
        width: 90%;
        position: relative;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 10px;
        margin: 0px;
        font-size: 17px;
    } */

    /* right side (subscription part) */
    /* .illustration {
        height: 100%;
        width: 35%;
        margin: auto;
        /* border-radius: 10px; 
        /* background-color: #BBE6EE; 
    } */

    /* section.sub-cont {
        background-color: #BBE6EE;
        height: 55%;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        margin-top: -25px;
        border-radius: 10px;
    } */

    /* img.sub-icon {
        /* margin: auto; 
        text-align: center;
        height: 20%;
        /* width: 20%; 
    } */

    h2.sub-title {
        height: 5%;
        /* position: relative; */
        display: flex;
        /* justify-content: center; */
        align-items: center;
    }

    /* section.sub-details {
        height: 30%;
        display: flex;
        align-items: center;
    } */

    /* ul.sub-details-ul {
        list-style-type: none;
    } */

    ul.sub-details-ul li::before {
        content: " ✔";
        /* Use a Unicode checkmark character or an image URL */
        display: inline-block;
        width: 20px;
        /* Adjust the width of the checkmark or bullet point */
        text-align: center;
        margin-right: 5px;
        /* Add some spacing between the checkmark and the list item text */
    }

    /* section.sub-price {
        /* height: 15%;
        display: flex;
        align-items: center;
        font-size: 20px;
    } */

    /* button.sub-change-btn {
        height: 15%;
        border-radius: 8px;
        border: 0;
        width: 90%;
        font-size: 18px;
        /* display: flex; 
        /* align-items: center; 
        /* justify-content: center; 
    } */

    /* pickup location part */

    /* section.pickup-cont {
        background-color: #f1f1f1;
        width: 100%;
        padding: 5px 20px 20px 20px;
        border-radius: 10px;
        margin-top: 15px;
    } */

    /* h2.pickup-title {
        font-size: 16px;
    } */

    .pickup-map>iframe {
        height: 150px !important;
    }

    /* button.pickup-btn {
        width: 90%;
        margin-top: 10px;
        border: 0;
        background-color: #fff;
        border-radius: 8px;
        height: 45px;
        position: relative;
        left: 50%;
        transform: translateX(-50%);
        font-size: 18px;
    } */
</style>
<?php
// Enable error reporting
error_reporting(E_ALL);

// Optionally, display errors on the screen
ini_set('display_errors', 1);

// Your PHP code goes here
?>

<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/style.php';
?>

<!DOCTYPE html>
<html lang="nb">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/uploads/favicon.ico" alt="favicon">
    <title>Kledeli</title>
</head>

<body class="w-full">

    <section class="main !block lg:!flex">
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/sidebar.php'; ?>

        <section class="right-section w-[95%] md:w-full mx-auto md:mx-0">
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

            <section class="body-section">
                <div class="md:flex flex-wrap h-85vh overflow-y-scroll gap-4 justify-center items-center">
                    <div class="h-[300px] md:w-[47%] flex flex-col gap-5">
                        <a href="/pages/abonnement" class="h-1/2 rounded-md cursor-pointer">
                            <div id="body-feed-abonnement" class="bg-cyan-200 dark:bg-cyan-900">Abonnement</div>
                        </a>

                        <div id="" class="bg-purple-200 dark:bg-purple-900 h-1/2 rounded-md cursor-pointer flex gap-5 justify-center overflow-hidden">

                            <div class="body-feed-cont">
                                <span class="body-feed-deal-header">Vinter helg</span>
                                <span class="body-feed-deal-description">Keep it casual</span>
                            </div>

                            <div class="body-feed-img-cont">
                                <img class="body-feed-deal-img" src="/uploads/kids-clothing-winter.png" alt="kids clothing winter1">
                            </div>

                        </div>
                    </div>

                    <div class="mt-4 md:m-0 h-[300px] md:w-[47%] flex gap-5">
                        <div class="cursor-pointer h-full rounded-md w-1/2 bg-gray-200 dark:bg-gray-800 flex flex-col relative text-center overflow-hidden">

                            <div class="body-feed-img-cont-vertical">
                                <img class="body-feed-deal-img-vertical" src="/uploads/kids-outwear.png" alt="kids clothing outwear">
                            </div>

                            <span class="body-feed-deal-description-vertical">Kids wear outside</span>
                        </div>

                        <div class="cursor-pointer h-full rounded-md w-1/2 bg-gray-200 dark:bg-gray-800 flex flex-col relative text-center overflow-hidden">

                            <div class="body-feed-img-cont-vertical">
                                <img class="body-feed-deal-img-vertical" src="/uploads/kids-winter.png" alt="kids clothing outwear1">
                            </div>

                            <span class="body-feed-deal-description-vertical">Kids winter</span>
                        </div>
                    </div>

                    <div class="mt-4 mb-4 md:m-0 h-[300px] md:w-[47%] flex gap-5">
                        <div class="cursor-pointer h-full rounded-md w-1/2 bg-gray-200 dark:bg-gray-800 flex flex-col relative text-center overflow-hidden">

                            <div class="body-feed-img-cont-vertical">
                                <img class="body-feed-deal-img-vertical" src="/uploads/kids-outwear.png" alt="kids clothing outwear2">
                            </div>

                            <span class="body-feed-deal-description-vertical">Kids wear outside</span>
                        </div>

                        <div class="cursor-pointer h-full rounded-md w-1/2 bg-gray-200 dark:bg-gray-800 flex flex-col relative text-center overflow-hidden">

                            <div class="body-feed-img-cont-vertical">
                                <img class="body-feed-deal-img-vertical" src="/uploads/kids-winter.png" alt="kids clothing outwear3">
                            </div>

                            <span class="body-feed-deal-description-vertical">Kids winter</span>
                        </div>
                    </div>

                    <div class="h-[300px] md:w-[47%] flex flex-col gap-5">

                        <div id="" class="bg-yellow-200 dark:bg-yellow-900 h-1/2 rounded-md cursor-pointer flex gap-5 justify-center overflow-hidden">

                            <div class="body-feed-cont">
                                <span class="body-feed-deal-header">Winter weekends</span>
                                <span class="body-feed-deal-description">Keep it casual</span>
                            </div>

                            <div class="body-feed-img-cont">
                                <img class="body-feed-deal-img" src="/uploads/kids-clothing-winter.png" alt="kids clothing winter2">
                            </div>

                        </div>
                        <div id="" class="bg-pink-200 dark:bg-pink-900 h-1/2 rounded-md cursor-pointer flex gap-5 justify-center overflow-hidden">

                            <div class="body-feed-cont">
                                <span class="body-feed-deal-header">Winter weekends</span>
                                <span class="body-feed-deal-description">Keep it casual</span>
                            </div>

                            <div class="body-feed-img-cont">
                                <img class="body-feed-deal-img" src="/uploads/kids-clothing-winter.png" alt="kids clothing winter3">
                            </div>

                        </div>
                    </div>

            </section>
        </section>

    </section>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>

</html>

<style>
    /* body options */

    .body-options {
        position: relative;
    }

    .body-option-right {
        display: flex;
        /* background: black; */
        height: 10vh;
        margin: 20px 60px 20px 20px;
        align-items: center;
        position: relative;
        right: 0%;
        justify-content: end;
        gap: 10px;
        font-weight: 600;
    }

    .body-option-right-options {
        cursor: pointer;
        border: 2px solid #ebf2f7;
        /* padding: 10px 20px; */
        border-radius: 4px;
        height: 65%;
        width: 13%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    /* */
    /* div.body-feed {
        display: flex;
        /* margin: 30px 0px 0px 0px; 
    flex-wrap: wrap;
    /* background: black; 
    height: 85vh;
    overflow: scroll;
    gap: 20px;
    justify-content: center;
    align-items: center;
    } */

    /* .horizontal-section {
        /* background: black; 
        height: 300px;
        width: 47%;
        /* margin: 20px; 
        display: flex;
        flex-flow: column;
        gap: 20px;
    } */

    /* .horizontal-section>div,
    .horizontal-section>a {
        height: 50%;
        border-radius: 10px;
        cursor: pointer;
    } */

    /* .vertical-section {
        height: 300px;
        width: 47%;
        /* margin: 20px; 
        display: flex;
        /* flex-flow: column; 
        gap: 20px;
    } */

    /* .vertical-section>div {
        cursor: pointer;
        /* background: black
        height: 100%;
        border-radius: 10px;
        width: 50%;
    } */

    /* body feed items */
    div#body-feed-abonnement {
        /* background-color: #BBE6EE; */
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 35px;
        font-weight: 600;
        height: 100%;
        border-radius: inherit;
    }

    div#body-feed-deal1 {
        background-color: #DEC9F2;
    }

    div#body-feed-deal2 {
        background-color: #FAE384;
    }

    div#body-feed-deal3 {
        background-color: #F9CBD9;
    }

    /* body feed deal */
    /* div.body-feed-deal-nontext {
        display: flex;
        gap: 20px;
        justify-content: center;
        overflow: hidden;
    } */

    .body-feed-cont {
        display: flex;
        flex-flow: column;
        gap: 5px;
        justify-content: center;
    }

    span.body-feed-deal-header {
        font-size: 1.5rem;
        font-weight: 600;
    }

    div.body-feed-img-cont {
        position: relative;
        width: 25%;
    }

    img.body-feed-deal-img {
        height: 140%;
        position: absolute;
        top: 50%;
        transform: translateY(-60%);
    }

    /* vertical part */
    /* div.body-feed-deal-nontext-vertical {
        background-color: #F1F1F1;
        display: flex;
        position: relative;
        flex-flow: column;
        text-align: center;
        overflow: hidden;
    } */

    div.body-feed-img-cont-vertical {
        position: relative;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        top: -30%;
    }

    img.body-feed-deal-img-vertical {
        height: 125%;
        position: absolute;
    }

    span.body-feed-deal-description-vertical {
        position: relative;
        bottom: 7%;
    }
</style>
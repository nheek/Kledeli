<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/style.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/uploads/favicon.ico">
    <title>Kledeli</title>
</head>

<body>

    <section class="main">
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/sidebar.php'; ?>

        <section class="right-section">
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

            <section class="body-section">

                <div class="body-feed">
                    <div class="horizontal-section">
                        <a href="/pages/abonnement">
                            <div id="body-feed-abonnement">Abonnement</div>
                        </a>

                        <div id="body-feed-deal1" class="body-feed-deal-nontext">

                            <div class="body-feed-cont">
                                <span class="body-feed-deal-header">Winter weekends</span>
                                <span class="body-feed-deal-description">Keep it casual</span>
                            </div>

                            <div class="body-feed-img-cont">
                                <img class="body-feed-deal-img" src="/uploads/kids-clothing-winter.png"
                                    alt="kids clothing winter">
                            </div>

                        </div>
                    </div>

                    <div class="vertical-section">
                        <div class="body-feed-deal-nontext-vertical">

                            <div class="body-feed-img-cont-vertical">
                                <img class="body-feed-deal-img-vertical" src="/uploads/kids-outwear.png"
                                    alt="kids clothing outwear">
                            </div>

                            <span class="body-feed-deal-description-vertical">Kids wear outside</span>
                        </div>

                        <div class="body-feed-deal-nontext-vertical">

                            <div class="body-feed-img-cont-vertical">
                                <img class="body-feed-deal-img-vertical" src="/uploads/kids-winter.png"
                                    alt="kids clothing outwear">
                            </div>

                            <span class="body-feed-deal-description-vertical">Kids winter</span>
                        </div>
                    </div>

                    <div class="vertical-section">
                        <div class="body-feed-deal-nontext-vertical">

                            <div class="body-feed-img-cont-vertical">
                                <img class="body-feed-deal-img-vertical" src="/uploads/kids-outwear.png"
                                    alt="kids clothing outwear">
                            </div>

                            <span class="body-feed-deal-description-vertical">Kids wear outside</span>
                        </div>

                        <div class="body-feed-deal-nontext-vertical">

                            <div class="body-feed-img-cont-vertical">
                                <img class="body-feed-deal-img-vertical" src="/uploads/kids-winter.png"
                                    alt="kids clothing outwear">
                            </div>

                            <span class="body-feed-deal-description-vertical">Kids winter</span>
                        </div>
                    </div>

                    <div class="horizontal-section">

                        <div id="body-feed-deal2" class="body-feed-deal-nontext">

                            <div class="body-feed-cont">
                                <span class="body-feed-deal-header">Winter weekends</span>
                                <span class="body-feed-deal-description">Keep it casual</span>
                            </div>

                            <div class="body-feed-img-cont">
                                <img class="body-feed-deal-img" src="/uploads/kids-clothing-winter.png"
                                    alt="kids clothing winter">
                            </div>

                        </div>
                        <div id="body-feed-deal3" class="body-feed-deal-nontext">

                            <div class="body-feed-cont">
                                <span class="body-feed-deal-header">Winter weekends</span>
                                <span class="body-feed-deal-description">Keep it casual</span>
                            </div>

                            <div class="body-feed-img-cont">
                                <img class="body-feed-deal-img" src="/uploads/kids-clothing-winter.png"
                                    alt="kids clothing winter">
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
div.body-feed {
    display: flex;
    /* margin: 30px 0px 0px 0px; */
    flex-wrap: wrap;
    /* background: black; */
    height: 85vh;
    overflow: scroll;
    gap: 20px;
    justify-content: center;
    align-items: center;
}

.horizontal-section {
    /* background: black; */
    height: 300px;
    width: 47%;
    /* margin: 20px; */
    display: flex;
    flex-flow: column;
    gap: 20px;
}

.horizontal-section>div,
.horizontal-section>a {
    height: 50%;
    border-radius: 10px;
    cursor: pointer;
}

.vertical-section {
    height: 300px;
    width: 47%;
    /* margin: 20px; */
    display: flex;
    /* flex-flow: column; */
    gap: 20px;
}

.vertical-section>div {
    cursor: pointer;
    background: black;
    height: 100%;
    border-radius: 10px;
    width: 50%;
}

/* body feed items */
div#body-feed-abonnement {
    background-color: #BBE6EE;
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
div.body-feed-deal-nontext {
    display: flex;
    gap: 20px;
    justify-content: center;
    overflow: hidden;
}

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
div.body-feed-deal-nontext-vertical {
    background-color: #F1F1F1;
    display: flex;
    position: relative;
    flex-flow: column;
    text-align: center;
    overflow: hidden;
}

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
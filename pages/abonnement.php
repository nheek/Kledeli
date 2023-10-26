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
    <link rel="icon" type="image/x-icon" href="/uploads/favicon.ico">
    <title>Kledeli</title>
</head>

<body>

    <section class="main">
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/sidebar.php'; ?>

        <section class="right-section">
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

            <section class="body-section">
                <div class="subscription-cont">

                    <div id="main-sub-item" class="sub-items">
                        <img src="/uploads/sub/ultra-pro-max-max.png" alt="premium" class="sub-items-img">
                        <div class="sub items-header-cont">
                            <h2 class="sub-items-header">10-Plagg</h2>
                            <span class="sub-items-price">1 200 kr</span>
                        </div>
                        <ul class="sub-items-ul">
                            <li>Affordable</li>
                            <li>Use for 3 months</li>
                            <li hidden>High Quality</li>
                            <li hidden>Any color</li>
                        </ul>
                        <button class="sub-items-button">Abonner</button>
                    </div>

                    <div class="sub-items">
                        <img src="/uploads/sub/premium.png" alt="premium" class="sub-items-img">
                        <h2 class="sub-items-header">3-Plagg</h2>
                        <span class="sub-items-price">500 kr</span>
                        <ul class="sub-items-ul">
                            <li>Affordable</li>
                            <li>Use for 3 months</li>
                            <li class="opacity05 x-before-li" hidden>High Quality</li>
                            <li class="opacity05 x-before-li" hidden>Any color</li>
                        </ul>
                        <button class="sub-items-button">Abonner</button>
                    </div>

                    <div class="sub-items">
                        <img src="/uploads/sub/ultra-pro-max1.png" alt="premium" class="sub-items-img">
                        <h2 class="sub-items-header">5-Plagg</h2>
                        <span class="sub-items-price">700 kr</span>
                        <ul class="sub-items-ul">
                            <li>Affordable</li>
                            <li>Use for 3 months</li>
                            <li hidden>High Quality</li>
                            <li class="opacity05 x-before-li" hidden>Any color</li>
                        </ul>
                        <button class="sub-items-button">Abonner</button>
                    </div>

                    <div class="sub-items">
                        <img src="/uploads/sub/ultra.png" alt="premium" class="sub-items-img">
                        <h2 class="sub-items-header">8-Plagg</h2>
                        <span class="sub-items-price">900 kr</span>
                        <ul class="sub-items-ul">
                            <li>Affordable</li>
                            <li>Use for 3 months</li>
                            <li hidden>High Quality</li>
                            <li hidden>Any color</li>
                        </ul>
                        <button class="sub-items-button">Abonner</button>
                    </div>

                </div>
            </section>

        </section>

    </section>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

</body>

</html>

<style>
/* subscription part */
.subscription-cont {
    height: 85vh;
    display: flex;
    gap: 3%;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    overflow: scroll;
    margin-top: 25px;
}

div#main-sub-item {
    width: 80%;
    height: 40%;
    flex-flow: row;
    gap: 20px;
}

.sub-items {
    width: 30%;
    height: 90%;
    border-radius: 10px;
    background-color: #BBE6EE;
    display: flex;
    flex-flow: column;
    align-items: center;
    justify-content: center;
}

/* main sub items items */
#main-sub-item>.sub.items-header-cont {
    width: 25%;
    display: flex;
    flex-flow: column;
}

#main-sub-item>button.sub-items-button {
    width: 23%;
    height: 25%;
}

#main-sub-item>.sub-items-ul {
    height: 100%;
    list-style-type: none;
    padding: 0;
    width: 21%;
    display: flex;
    flex-flow: column;
    justify-content: center;
}

/* sub items items */
h2.sub-items-header {
    height: 5%;
}

span.sub-items-price {
    height: 15%;
    font-size: 3rem;
    font-weight: 600;
}

ul.sub-items-ul {
    height: 25%;
    list-style-type: none;
    padding: 0;
}

ul.sub-items-ul li::before {
    content: "✔";
    /* Use a Unicode checkmark character or an image URL */
    display: inline-block;
    width: 20px;
    /* Adjust the width of the checkmark or bullet point */
    text-align: center;
    margin-right: 5px;
    /* Add some spacing between the checkmark and the list item text */
}

.x-before-li::before {
    content: "✘" !important;
    /* Use a Unicode checkmark character or an image URL */
    display: inline-block;
    width: 20px;
    /* Adjust the width of the checkmark or bullet point */
    text-align: center;
    margin-right: 5px;
    /* Add some spacing between the checkmark and the list item text */
}

button.sub-items-button {
    height: 10%;
    width: 90%;
    border-radius: 8px;
    border: none;
    font-size: 1.5rem;
}
</style>
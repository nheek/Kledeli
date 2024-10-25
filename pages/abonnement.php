<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/style.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/js_functions.php';

$userID = getCookie('userID');
$userDetails = getUserDetailsByID($userID);
?>

<!DOCTYPE html>
<html lang="nb">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/uploads/favicon.ico">
    <link href="../output.css" rel="stylesheet">
    <title>Kledeli</title>
</head>

<body class="w-full">

    <section class="main !block md:!flex">
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/sidebar.php'; ?>

        <section class="right-section !w-[95%] mx-auto">
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

            <section class="body-section">
                <div class="max-h-max-content md:h-[85vh] gap-4 md:gap-[3%] justify-center items-center flex flex-col md:flex-row md:flex-wrap md:overflow-scroll mt-6">

                    <?php
                    $content = getSubscriptions();
                    if ($content) {
                        while ($result = $content->fetch_assoc()) {
                    ?>

                            <?php if ($result['id'] == 1) {
                                /* if user is logged in, show different content */
                                if ($userDetails['subscription_id'] == $result['id']) {
                            ?>
                                    <div id="main-sub-item" class="w-[95%] md:w-[96%] h-[350px] md:h-[40%] flex flex-col md:flex-row gap-4 rounded-md items-center justify-center bg-cyan-100 dark:bg-cyan-800 border-2 border-solid border-blue-800">
                                        <img src="<?php echo $result['icon'] ?>" alt="premium" class="h-[28%] md:h-[40%]">
                                        <div class="h-[18%] md:h[30%] md:w-[25%] flex flex-col md:gap-0 text-center md:items-center">
                                            <h2 class=""><?php echo $result['name'] ?></h2>
                                            <span class="text-3xl font-semibold"><?php echo $result['price'] ?> kr</span>
                                        </div>
                                        <ul class="h-[15%] list-none p-0 sub-items-ul">
                                            <?php foreach (json_decode($result['features']) as $feature) { ?>
                                                <li><?php echo $feature ?></li>
                                            <?php } ?>
                                            <li hidden>High Quality</li>
                                            <li hidden>Any color</li>
                                        </ul>
                                        <button onclick="changeSub(<?php echo $result['id'] ?>);" class="w-[90%] mx-auto md:mx-0 md:ml-6 md:w-[23%] bg-white dark:bg-gray-900 text-xl p-4 rounded-md cursor-not-allowed opacity-50" disabled>Abonnert</button>
                                    </div>

                                <?php } else { ?>
                                    <div id="main-sub-item" class="w-[95%] md:w-[96%] h-[350px] md:h-[40%] flex flex-col md:flex-row gap-4 rounded-md items-center justify-center bg-cyan-100 dark:bg-cyan-800">
                                        <img src="<?php echo $result['icon'] ?>" alt="premium" class="h-[28%] md:h-[40%]">
                                        <div class="h-[18%] md:h[30%] md:w-[25%] flex flex-col md:gap-0 text-center md:items-center">
                                            <h2 class=""><?php echo $result['name'] ?></h2>
                                            <span class="text-3xl font-semibold"><?php echo $result['price'] ?> kr</span>
                                        </div>
                                        <ul class="h-[15%] list-none p-0 sub-items-ul">
                                            <?php foreach (json_decode($result['features']) as $feature) { ?>
                                                <li><?php echo $feature ?></li>
                                            <?php } ?>
                                            <li hidden>High Quality</li>
                                            <li hidden>Any color</li>
                                        </ul>
                                        <button onclick="changeSub(<?php echo $result['id'] ?>);" class="w-[90%] mx-auto md:mx-0 md:ml-6 md:w-[23%] bg-white dark:bg-gray-900 text-xl p-4 rounded-md hover:invert">Abonner</button>
                                    </div>

                                <?php }
                            } else {
                                /* if user is logged in, show different content */
                                if ($userDetails['subscription_id'] == $result['id']) {
                                ?>

                                    <div class="w-[95%] md:w-[30%] h-[350px] md:h-[75%] rounded-md flex flex-col items-center justify-center bg-cyan-100 dark:bg-cyan-800" style="border: 2px solid darkblue;">
                                        <img src="<?php echo $result['icon'] ?>" alt="premium" class="h-[35%] md:h-[40%]">
                                        <h2 class="h-[5%]"><?php echo $result['name'] ?></h2>
                                        <span class="h-[15%] text-3xl font-semibold"><?php echo $result['price'] ?> kr</span>
                                        <ul class="sub-items-ul">
                                            <?php foreach (json_decode($result['features']) as $feature) { ?>
                                                <li><?php echo $feature ?></li>
                                            <?php } ?>
                                            <li class="opacity05 x-before-li" hidden>High Quality</li>
                                            <li class="opacity05 x-before-li" hidden>Any color</li>
                                        </ul>
                                        <div class="h-[25%] w-full relative">
                                            <button onclick="changeSub(<?php echo $result['id'] ?>);" class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-[90%] mx-auto bg-white dark:bg-gray-900 text-xl p-4 rounded-md cursor-not-allowed opacity-50 filter-invert" disabled>Abonnert</button>
                                        </div>
                                    </div>

                                <?php } else { ?>
                                    <div class="w-[95%] md:w-[30%] h-[350px] md:h-[75%] rounded-md flex flex-col items-center justify-center bg-cyan-100 dark:bg-cyan-800">
                                        <img src="<?php echo $result['icon'] ?>" alt="premium" class="h-[35%]">
                                        <h2 class="h-[5%]"><?php echo $result['name'] ?></h2>
                                        <span class="h-[15%] text-3xl font-semibold"><?php echo $result['price'] ?> kr</span>
                                        <ul class="sub-items-ul">
                                            <?php foreach (json_decode($result['features']) as $feature) { ?>
                                                <li><?php echo $feature ?></li>
                                            <?php } ?>
                                            <li class="opacity05 x-before-li" hidden>High Quality</li>
                                            <li class="opacity05 x-before-li" hidden>Any color</li>
                                        </ul>
                                        <div class="h-[25%] w-full relative">
                                            <button onclick="changeSub(<?php echo $result['id'] ?>);" class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-[90%] mx-auto bg-white dark:bg-gray-900 text-xl p-4 rounded-md hover:invert">Abonner</button>
                                        </div>
                                    </div>

                    <?php }
                            }
                        }
                    } ?>

                </div>
            </section>

        </section>

    </section>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

</body>

</html>

<script>
    const userID = parseInt('<?php echo $userID ?>');

    function changeSub(subID) {
        $.ajax({
            url: '../xhr/subscription.php?f=subscription&s=change-subscription',
            type: 'POST',
            data: {
                userID: userID,
                subID: subID
            },
            success: function(data) {
                if (data) {
                    showWarning('Abonnementet endret. Laster inn siden på nytt nå...', 'green');

                    setTimeout(() => {
                        location.reload();
                    }, 3000)
                }
            }
        });
    }
</script>

<style>
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
</style>
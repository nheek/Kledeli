<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/style.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/js_functions.php';

$userID = getCookie('userID');
// $userDetails = getUserDetailsByID($userID);

if ($userID) {
    $userWardrobe = getUserWardrobe($userID);
}
// $userWardrobe = false;
?>

<!DOCTYPE html>
<html lang="nb">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/uploads/favicon.ico">
    <title>Garderobe - Kledeli</title>
</head>

<body class="w-full">
    <section class="main !block lg:!flex">
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/sidebar.php'; ?>

        <section class="right-section !w-[95%] mx-auto">
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

            <section class="body-section">
                <div class="wardrobe-cont">

                    <div class="mt-9 flex flex-wrap gap-4 justify-start md:justify-none md:gap-10 h-[79vh] overflow-scroll mb-6 ml-[4%]">
                        <?php
                        if ($userWardrobe) {
                            while ($result = $userWardrobe->fetch_assoc()) {
                        ?>
                                <div class="bg-gray-100 dark:bg-gray-800 h-64 p-4 rounded-xl w-[45%] md:w-1/5 fade-to-left" id="wardrobe-item-<?php echo $result['id'] ?>">
                                    <div class="wardrobe-img-cont">
                                        <img class="relative left-1/2 transform -translate-x-1/2 h-1/2" src="<?php echo $result['img'] ?>" alt="<?php echo $result['name'] ?>">
                                    </div>
                                    <div class="text-l font-semibold mt-2 mb-1">
                                        <?php echo $result['name'] ?>
                                    </div>
                                    <div class="wardrobe-size">
                                        Størrelse: S
                                    </div>
                                    <button id="<?php echo $result['id'] ?>" class="h-10 w-full mt-2 relative left-1/2 transform -translate-x-1/2 border-none bg-white dark:bg-gray-900 dark:bg-gray-900 rounded-lg text-base px-4 hover:bg-red-600 dark:hover:bg-red-800 hover:text-white dark:hover:text-gray-200" onclick="removeItemFromWardrobe(this.id);">Fjern</button>
                                </div>
                            <?php
                            }
                        } else { ?>
                            <div class="empty-here">
                                <img class="empty-here-img" src="/uploads/empty.png" alt="empty-illustration">
                                <span class="empty-here-txt">Seems empty here...</span>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>

        </section>

    </section>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

</body>

</html>

<script>
    const userID = parseInt('<?php echo $userID ?>');

    function removeItemFromWardrobe(itemID) {
        let element = document.getElementById(`wardrobe-item-${itemID}`);

        $.ajax({
            url: '../xhr/wardrobe.php?f=wardrobe&s=remove-from-wardrobe',
            type: 'POST',
            data: {
                userID: userID,
                itemID: itemID
            },
            success: function(data) {
                if (data) {
                    // element.remove();
                    element.classList.add('fade-out');
                    setTimeout(() => {
                        element.remove();
                    }, 1000);
                }
            }
        });
    }
</script>

<style>
    /* wardrobe body part */
    /* .wardrobe-body-cont {
        display: flex;
        flex-wrap: wrap;
        gap: 2%;
        height: 80vh;
        /* background: black; 
        overflow: scroll;
        margin-bottom: 30px;
    } */

    /* wardrobe item part */
    /* .wardrobe-item-cont {
        background: #F1F1F1;
        height: 240px;
        padding: 20px;
        border-radius: 12px;
        width: 18%;
    } */


    /* img.wardrobe-img {
        position: relative;
        left: 50%;
        transform: translateX(-50%);
        height: 50%;
    } */

    /* .wardrobe-name {
        font-size: 18px;
        font-weight: 600;
        margin: 10px 0px 5px 0px;
    } */

    .wardrobe-size {
        font-size: 14px;
    }

    /* button.wardrobe-button {
        height: 40px;
        width: 100%;
        margin: 10px 0px 0px 0px;
        position: relative;
        left: 50%;
        transform: translateX(-50%);
        border: none;
        background: #fff;
        border-radius: 8px;
        font-size: 15px;
    } */
</style>
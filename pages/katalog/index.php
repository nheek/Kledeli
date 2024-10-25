<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/style.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/js_functions.php';

$userID = getCookie('userID');
$clothes_type = $_GET["clothes_type"];

if (!$clothes_type) {
    $clothes_type = 'all';
}
?>

<!DOCTYPE html>
<html lang="nb">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/uploads/favicon.ico">
    <link href="../../output.css" rel="stylesheet">
    <title>Katalog - Kledeli</title>
</head>

<body class="w-full">

    <section class="main !block lg:!flex">
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/sidebar.php'; ?>

        <section class="right-section !w-[95%] mx-auto">
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

            <section class="body-section">
                <div class="relative">
                    <div class="flex w-full sm:w-[70%] lg:w-[90%] h-20 mx-0 md:mx-20 my-2 items-center relative right-0 justify-center md:justify-end gap-4 font-semibold">

                        <button class="cursor-pointer border-2 border-gray-300 dark:border-gray-600 rounded-md h-[60%] w-[60%] sm:w-[20%] lg:w-[12%] flex items-center justify-center gap-2 bg-white dark:bg-gray-800 text-sm md:text-base font-semibold hover:filter hover:invert" onclick="getPage('wardrobe-cont-get', 'get_pages/items.php?clothes_type=<?php echo $clothes_type ?>&gender=jente');">
                            <span>🙋‍♀️</span>
                            <span>Jente</span>
                        </button>
                        <button class="cursor-pointer border-2 border-gray-300 dark:border-gray-600 rounded-md h-[60%] w-[60%] sm:w-[20%] lg:w-[12%] flex items-center justify-center gap-2 bg-white dark:bg-gray-800 text-sm md:text-base font-semibold hover:filter hover:invert" onclick="getPage('wardrobe-cont-get', 'get_pages/items.php?clothes_type=<?php echo $clothes_type ?>&gender=gutt');">
                            <span>🙋‍♂️</span>
                            <span>Gutt</span>
                        </button>
                        <button class="cursor-pointer border-2 border-gray-300 dark:border-gray-600 rounded-md h-[60%] w-[60%] sm:w-[20%] lg:w-[12%] flex items-center justify-center gap-2 bg-white dark:bg-gray-800 text-sm md:text-base font-semibold hover:filter hover:invert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                            <span>Sort</span>
                        </button>
                        <button class="cursor-pointer border-2 border-gray-300 dark:border-gray-600 rounded-md h-[60%] w-[60%] sm:w-[20%] lg:w-[12%] flex items-center justify-center gap-2 bg-white dark:bg-gray-800 text-sm md:text-base font-semibold hover:filter hover:invert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="4" y1="21" x2="4" y2="14"></line>
                                <line x1="4" y1="10" x2="4" y2="3"></line>
                                <line x1="12" y1="21" x2="12" y2="12"></line>
                                <line x1="12" y1="8" x2="12" y2="3"></line>
                                <line x1="20" y1="21" x2="20" y2="16"></line>
                                <line x1="20" y1="12" x2="20" y2="3"></line>
                                <line x1="1" y1="14" x2="7" y2="14"></line>
                                <line x1="9" y1="8" x2="15" y2="8"></line>
                                <line x1="17" y1="16" x2="23" y2="16"></line>
                            </svg>
                            <span>Filter</span>
                        </button>

                    </div>
                </div>

                <div class="mt-4 flex gap-4 md:gap-6 flex-wrap justify-center md:justify-start h-[80vh] overflow-y-scroll" id="wardrobe-cont-get">

                </div>

            </section>

        </section>

    </section>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

</body>

</html>

<script>
    const userID = parseInt('<?php echo $userID ?>');

    getPage("wardrobe-cont-get", "get_pages/items.php?clothes_type=<?php echo $clothes_type ?>");

    function addToUserWardrobe(itemID) {
        if (!userID) {
            showWarning('Du må være pålogget');
            return false;
        }
        $.ajax({
            url: '../../xhr/catalog.php?f=catalog&s=add-to-wardrobe',
            type: 'POST',
            data: {
                userID: userID,
                itemID: itemID
            },
            success: function(data) {
                if (data == 'success') {
                    showWarning('Lagt til i garderobe', 'green');
                } else {
                    showWarning(data);
                    if (data == 'Velg et abonnement først') {
                        showWarning(data + '. Redirecting...');
                        setTimeout(() => {
                            goToPage("/pages/abonnement");
                        }, 3000);
                    }
                }
            }
        });
    }
</script>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/pages/katalog/style.php'; ?>
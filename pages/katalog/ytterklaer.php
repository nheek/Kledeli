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
    <link rel="icon" type="image/x-icon" href="/uploads/favicon.ico">
    <title>Garderobe - Kledeli</title>
</head>

<body>

    <section class="main">
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/sidebar.php'; ?>

        <section class="right-section">
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

            <section class="body-section">
                <div class="body-options">
                    <div class="body-option-right">

                        <button class="body-option-right-options" onclick="getPage('wardrobe-cont-get', 'get_pages/items.php?clothes_type=ytterklaer&gender=jente');">
                            <span>🙋‍♀️</span>
                            <span>Jente</span>
                        </button>
                        <button class="body-option-right-options" onclick="getPage('wardrobe-cont-get', 'get_pages/items.php?clothes_type=ytterklaer&gender=gutt');">
                            <span>🙋‍♂️</span>
                            <span>Gutt</span>
                        </button>

                        <button class="body-option-right-options">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                            <span>Sort</span>
                        </button>

                        <button class="body-option-right-options">
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

                <div class="wardrobe-cont" id="wardrobe-cont-get">

                </div>

            </section>

        </section>

    </section>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

</body>

</html>

<script>
    getPage("wardrobe-cont-get", "get_pages/items.php?clothes_type=ytterklaer");
</script>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/pages/katalog/style.php'; ?>
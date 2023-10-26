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

                        <div class="body-option-right-options">
                            <span>🙋‍♀️</span>
                            <span>Jente</span>
                        </div>
                        <div class="body-option-right-options">
                            <span>🙋‍♂️</span>
                            <span>Gutt</span>
                        </div>

                        <div class="body-option-right-options">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                            <span>Sort</span>
                        </div>

                        <div class="body-option-right-options">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round">
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
                        </div>

                    </div>
                </div>

                <div class="wardrobe-cont">

                    <div class="wardrobe-items">
                        <div class="wardrobe-img-cont">
                            <img src="/uploads/catalog/hanske.png" alt="">
                        </div>

                        <div class="wardrobe-details-cont">
                            <b class="wardrobe-title">Green pants</b>
                            <div class="size-options">
                                <button>S</button>
                                <button>M</button>
                                <button>L</button>
                            </div>

                            <div class="add-to-cart-cont">
                                <span class="stocks-left">10 stocks left</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0" />
                                </svg>
                            </div>

                        </div>
                    </div>

                    <div class="wardrobe-items">
                        <div class="wardrobe-img-cont">
                            <img src="/uploads/catalog/hanske1.png" alt="">
                        </div>

                        <div class="wardrobe-details-cont">
                            <b class="wardrobe-title">Green pants</b>
                            <div class="size-options">
                                <button>S</button>
                                <button>M</button>
                                <button>L</button>
                            </div>

                            <div class="add-to-cart-cont">
                                <span class="stocks-left">10 stocks left</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0" />
                                </svg>
                            </div>

                        </div>
                    </div>

                    <div class="wardrobe-items">
                        <div class="wardrobe-img-cont">
                            <img src="/uploads/catalog/hue.png" alt="">
                        </div>

                        <div class="wardrobe-details-cont">
                            <b class="wardrobe-title">Green pants</b>
                            <div class="size-options">
                                <button>S</button>
                                <button>M</button>
                                <button>L</button>
                            </div>

                            <div class="add-to-cart-cont">
                                <span class="stocks-left">10 stocks left</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0" />
                                </svg>
                            </div>

                        </div>
                    </div>

                    <div class="wardrobe-items">
                        <div class="wardrobe-img-cont">
                            <img src="/uploads/catalog/hue1.png" alt="">
                        </div>

                        <div class="wardrobe-details-cont">
                            <b class="wardrobe-title">Green pants</b>
                            <div class="size-options">
                                <button>S</button>
                                <button>M</button>
                                <button>L</button>
                            </div>

                            <div class="add-to-cart-cont">
                                <span class="stocks-left">10 stocks left</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0" />
                                </svg>
                            </div>

                        </div>
                    </div>

                    <div class="wardrobe-items">
                        <div class="wardrobe-img-cont">
                            <img src="/uploads/catalog/jakke.png" alt="">
                        </div>

                        <div class="wardrobe-details-cont">
                            <b class="wardrobe-title">Green pants</b>
                            <div class="size-options">
                                <button>S</button>
                                <button>M</button>
                                <button>L</button>
                            </div>

                            <div class="add-to-cart-cont">
                                <span class="stocks-left">10 stocks left</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0" />
                                </svg>
                            </div>

                        </div>
                    </div>

                    <div class="wardrobe-items">
                        <div class="wardrobe-img-cont">
                            <img src="/uploads/catalog/jakke1.png" alt="">
                        </div>

                        <div class="wardrobe-details-cont">
                            <b class="wardrobe-title">Green pants</b>
                            <div class="size-options">
                                <button>S</button>
                                <button>M</button>
                                <button>L</button>
                            </div>

                            <div class="add-to-cart-cont">
                                <span class="stocks-left">10 stocks left</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0" />
                                </svg>
                            </div>

                        </div>
                    </div>

                    <div class="wardrobe-items">
                        <div class="wardrobe-img-cont">
                            <img src="/uploads/catalog/parkdress.png" alt="">
                        </div>

                        <div class="wardrobe-details-cont">
                            <b class="wardrobe-title">Green pants</b>
                            <div class="size-options">
                                <button>S</button>
                                <button>M</button>
                                <button>L</button>
                            </div>

                            <div class="add-to-cart-cont">
                                <span class="stocks-left">10 stocks left</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0" />
                                </svg>
                            </div>

                        </div>
                    </div>

                    <div class="wardrobe-items">
                        <div class="wardrobe-img-cont">
                            <img src="/uploads/catalog/parkdress1.png" alt="">
                        </div>

                        <div class="wardrobe-details-cont">
                            <b class="wardrobe-title">Green pants</b>
                            <div class="size-options">
                                <button>S</button>
                                <button>M</button>
                                <button>L</button>
                            </div>

                            <div class="add-to-cart-cont">
                                <span class="stocks-left">10 stocks left</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0" />
                                </svg>
                            </div>

                        </div>
                    </div>

                </div>

            </section>

        </section>

    </section>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

</body>

</html>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/pages/katalog/style.php'; ?>
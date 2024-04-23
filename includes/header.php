<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/style.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/js_functions.php';
?>

<header class="flex relative">
    <?php if (showElementIn('/pages/katalog/')) { ?>
        <label for="search-bar" class="visually-hidden">Search bar</label>
        <input class="w-[80%] md:w-[45%] ml-0 md:ml-7 border-0 bg-gray-100 dark:bg-gray-800 dark:bg-gray-800 p-4 rounded-lg w-96" id="search-bar" type="text" aria-labelledby="search-bar" placeholder="Søk på dine favorittklær her" onchange="getSearchPage(this);">
    <?php } else { ?>
        <label for="ai-search-bar" class="visually-hidden">Search bar</label>
        <input class="w-[80%] md:w-[45%] ml-0 md:ml-7 border-0 bg-gray-100 dark:bg-gray-800 dark:bg-gray-800 p-4 rounded-lg w-96" id="ai-search-bar" type="text" aria-labelledby="ai-search-bar" placeholder="Skriv en kommando, f.eks. 'logg ut'" onchange="aiAssistant();" oninput="checkIfLogin();">
    <?php } ?>
    <section class="hidden lg:block relative w-7/12 font-semibold">
        <nav class="absolute right-[5%] top-1/2 transform -translate-y-1/2">
            <ul class="flex list-none items-end gap-4">
                <li>
                    <div class="flex gap-4 items-center justify-center cursor-pointer h-10">
                        <a class="flex gap-2" href="/pages/hentested">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                            <span>Hentested</span>
                        </a>
                    </div>

                </li>

                <li>
                    <div class="flex gap-4 items-center justify-center cursor-pointer h-10">
                        <a class="flex gap-2" href="/pages/garderobe">
                            <svg stroke-color="currentColor" fill="currentColor" version="1.1" width="22" height="22" stroke-width="1.5" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 53 53" xml:space="preserve">
                                <g id="SVGRepo_bgCarrier" stroke-width="1.5"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier" stroke-width="1.5">
                                    <g>
                                        <g>
                                            <path d="M42.501,0H26.5H10.499C7.743,0,5.5,2.248,5.5,5.01v39.98c0,2.762,2.243,5.01,4.999,5.01H10.5v3h2v-3h14h14v3h2v-3h0.001 c2.756,0,4.999-2.248,4.999-5.01V5.01C47.5,2.248,45.257,0,42.501,0z M10.5,48L10.5,48c-1.655,0-3-1.35-3-3.01V5.01 C7.5,3.35,8.845,2,10.499,2H25.5v46h-13H10.5z M45.5,44.99c0,1.66-1.345,3.01-2.999,3.01H42.5h-2h-13V2h15.001 C44.155,2,45.5,3.35,45.5,5.01V44.99z"></path>
                                            <rect x="21.5" y="21" width="3" height="7"></rect>
                                            <rect x="29.5" y="21" width="3" height="7"></rect>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <span>Garderobe</span>
                        </a>
                    </div>

                </li>

                <li hidden>

                    <div class="flex gap-4 items-center justify-center cursor-pointer h-10">
                        <img class="side-header-profile-pic">
                        <span>Hallo Nick Hipol</span>
                    </div>

                </li>

                <?php if (!getCookie("userID")) {
                ?>
                    <li>

                        <div class="flex gap-4 items-center justify-center cursor-pointer h-10">
                            <a class="flex gap-2" href="/pages/login">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 17l5-5-5-5M19.8 12H9M13 22a10 10 0 1 1 0-20" />
                                </svg>
                                <span>Logg på</span>
                            </a>
                        </div>

                    </li>

                    <li>
                        <div class="flex gap-4 items-center justify-center cursor-pointer h-10">

                            <a class="flex gap-2" href="/pages/register">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="8.5" cy="7" r="4"></circle>
                                    <line x1="20" y1="8" x2="20" y2="14"></line>
                                    <line x1="23" y1="11" x2="17" y2="11"></line>
                                </svg>
                                <span>Registrer</span>
                            </a>
                        </div>

                    </li>

                <?php } else { ?>
                    <li>
                        <div class="flex gap-4 items-center justify-center cursor-pointer h-10">

                            <a class="flex gap-2" href="/pages/profile">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span><?php echo getUserDetailsByID(getCookie("userID"))["username"] ?></span>
                            </a>
                        </div>

                    </li>
                <?php } ?>
            </ul>
        </nav>
    </section>

    <!-- Hamburger button -->
    <section>
        <div id="menuToggle" class="lg:hidden cursor-pointer absolute right-[4%] top-[10%]" onclick="showMobileMenu();">
            <div class="bar bg-gray-700 dark:bg-gray-200"></div>
            <div class="bar bg-gray-700 dark:bg-gray-200"></div>
            <div class="bar bg-gray-700 dark:bg-gray-200"></div>
        </div>

        <!-- Mobile menu (hidden by default) -->
        <div id="mobileMenu" class="hidden bg-gray-200 dark:bg-gray-900 fixed top-0 left-0 w-[0%] h-[100%] z-[2]">
            <div id="xMenu" class="close-button" onclick="hideMobileMenu();">
                <div class="close-bar w-[90%] h-2 rounded-sm bg-gray-700 dark:bg-gray-200 absolute top-1/2 left-0 transform -translate-y-1/2"></div>
                <div class="close-bar w-[90%] h-2 rounded-sm bg-gray-700 dark:bg-gray-200 absolute top-1/2 left-0 transform -translate-y-1/2"></div>
            </div>
            <!-- Menu items go here -->
            <nav id="navEl" class="hidden absolute left-[5%] top-1/2 transform -translate-y-1/2 text-3xl !leading-[55px]">
                <ul>
                    <li>
                        <div class="flex gap-4 items-center justify-start cursor-pointer h-12">
                            <a class="flex gap-2 items-center" href="/pages/katalog">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="3" width="18" height="18" rx="2" />
                                    <path d="M21 12H3M12 3v18" />
                                </svg>
                                <span>Katalog</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex gap-4 items-center justify-start cursor-pointer h-12">
                            <a class="flex gap-2 items-center" href="/pages/hentested">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                                <span>Hentested</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex gap-4 items-center justify-center cursor-pointer h-12">
                            <a class="flex gap-2 items-center" href="/pages/garderobe">
                                <svg stroke-color="currentColor" fill="currentColor" version="1.1" width="22" height="22" stroke-width="1.5" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 53 53" xml:space="preserve">
                                    <g id="SVGRepo_bgCarrier" stroke-width="1.5"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier" stroke-width="1.5">
                                        <g>
                                            <g>
                                                <path d="M42.501,0H26.5H10.499C7.743,0,5.5,2.248,5.5,5.01v39.98c0,2.762,2.243,5.01,4.999,5.01H10.5v3h2v-3h14h14v3h2v-3h0.001 c2.756,0,4.999-2.248,4.999-5.01V5.01C47.5,2.248,45.257,0,42.501,0z M10.5,48L10.5,48c-1.655,0-3-1.35-3-3.01V5.01 C7.5,3.35,8.845,2,10.499,2H25.5v46h-13H10.5z M45.5,44.99c0,1.66-1.345,3.01-2.999,3.01H42.5h-2h-13V2h15.001 C44.155,2,45.5,3.35,45.5,5.01V44.99z"></path>
                                                <rect x="21.5" y="21" width="3" height="7"></rect>
                                                <rect x="29.5" y="21" width="3" height="7"></rect>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <span>Garderobe</span>
                            </a>
                        </div>

                    </li>

                    <?php if (!getCookie("userID")) {
                    ?>
                        <li>
                            <div class="flex gap-4 items-center justify-start lg:justify-center cursor-pointer h-12">
                                <a class="flex gap-2 items-center" href="/pages/login">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 17l5-5-5-5M19.8 12H9M13 22a10 10 0 1 1 0-20" />
                                    </svg>
                                    <span>Logg på</span>
                                </a>
                            </div>

                        </li>

                        <li>
                            <div class="flex gap-4 items-center justify-start lg:justify-center cursor-pointer h-12">

                                <a class="flex gap-2 items-center" href="/pages/register">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <line x1="20" y1="8" x2="20" y2="14"></line>
                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                    </svg>
                                    <span>Registrer</span>
                                </a>
                            </div>

                        </li>

                    <?php } else { ?>
                        <li>
                            <div class="flex gap-4 items-center justify-start lg:justify-center cursor-pointer h-12">

                                <a class="flex gap-2 items-center" href="/pages/profile">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <span><?php echo getUserDetailsByID(getCookie("userID"))["username"] ?></span>
                                </a>
                            </div>

                        </li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </section>
</header>

<script>
    // function for general dark mode - dark mode that applies to everything
    function darkMode() {
        const body = document.querySelector('body');
        const darkModeClasses = ['dark:bg-gray-900', 'dark:text-gray-200']
        body.classList.add(...darkModeClasses);
    }
    darkMode();

    // function to toggle dark mode manually
    function toggleDarkMode() {
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    }
    toggleDarkMode();

    function getSearchPage(inputEl) {
        let inputElementValue = inputEl.value;
        getPage("wardrobe-cont-get", "get_pages/items.php?clothes_type=<?php if (isset($clothes_type)) { echo $clothes_type; }?>" + "&search_query=" + inputElementValue);
    }
    // if (!getCookie("userID")) {
    //     goToPage("/pages/register.php");
    // }

    function aiAssistant() {
        let userID = getCookie('userID');
        let ai_search_bar_input = document.getElementById('ai-search-bar');
        let ai_search_bar = document.getElementById('ai-search-bar').value;

        if (/logg ut/i.test(ai_search_bar)) {
            if (!userID) {
                return false;
            }
            deleteCookie('userID');
            location.reload();
        }
        if (/gå til/i.test(ai_search_bar)) {
            let page_name = getNthWord(ai_search_bar, 3);
            let target_URL = '/pages/' + page_name;

            goToPage(target_URL);
        }

        if (/logg inn/i.test(ai_search_bar) || /logg på/i.test(ai_search_bar)) {
            let user_details = splitIntoWords(ai_search_bar);
            let username = user_details[2];
            let password = realPassword;

            if (user_details.length < 4) {
                showWarning('Make sure to type everything')
                return false;
            }

            $.ajax({
                url: '../xhr/login.php?f=login&s=login-user',
                type: 'POST',
                data: {
                    username: username,
                    password: password
                },
                success: function(data) {
                    if (data) {
                        setCookie("userID", data, 3);
                        location.reload();
                    } else {
                        showWarning('Incorrect password');
                    }
                }
            });
        }

        if (/mørk modus/i.test(ai_search_bar)) {
            let html = document.querySelector('html');

            html.classList.add('dark');
            localStorage.theme = 'dark'
        }

        if (/lys modus/i.test(ai_search_bar)) {
            let html = document.querySelector('html');

            html.classList.remove('dark');
            localStorage.theme = 'light'
        }

        if (/standard modus/i.test(ai_search_bar)) {
            let html = document.querySelector('html');
            localStorage.removeItem('theme')

            if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                html.classList.add('dark');
            } else {
                if (html.classList.contains('dark')) {
                    html.classList.remove('dark');
                }
            }
        }
    }

    let realPassword = '';

    function checkIfLogin() {
        let ai_search_bar_input = document.getElementById('ai-search-bar');
        let ai_search_bar = document.getElementById('ai-search-bar').value;

        if (/logg inn/i.test(ai_search_bar) || /logg på/i.test(ai_search_bar)) {
            realPassword += maskNthWord(ai_search_bar_input, 4, realPassword);
        }
    }

    //
    // Get the menu elements
    const mobileMenu = document.getElementById('mobileMenu');
    const navEl = document.getElementById('navEl');
    const xMenu = document.getElementById('xMenu');

    // show
    function showMobileMenu() {
        mobileMenu.classList.toggle('hidden');
        mobileMenu.classList.remove('shrink');
        mobileMenu.classList.add('expand');
        mobileMenu.style = 'width: 100%;';

        setTimeout(() => {
            if (navEl.classList.contains('hidden')) {
                navEl.classList.toggle('hidden');
            }
        }, 400)
        setTimeout(() => {
            xMenu.classList.toggle('active');
        }, 1000)
    }
    // menuToggle.addEventListener('click', () => {

    // });

    // hide
    function hideMobileMenu() {
        xMenu.classList.toggle('active');
        mobileMenu.classList.remove('expand');
        mobileMenu.classList.add('shrink');
        mobileMenu.style = 'width: 0%;';
        setTimeout(() => {
            navEl.classList.toggle('hidden');
        }, 200)
        setTimeout(() => {
            mobileMenu.classList.toggle('hidden');
        }, 1000)
    }
    // xMenu.addEventListener('click', () => {

    // });
</script>

<style>
    .bar {
        width: 36px;
        height: 7px;
        /* background-color: #454545; */
        margin: 5px auto;
        transition: 0.4s;
        border-radius: 4px;
    }

    /* #mobileMenu {
        background-color: #fff;
        color: #454545;
        /* Other styles for the menu container 
        position: fixed;
        top: 0%;
        left: 0%;
        width: 0%;
        height: 100%;
        /* background: black; 
        z-index: 2;
        /* animation: expandWidth 1s ease forwards; 
    } */

    .expand {
        animation: expandWidth 1s ease forwards
    }

    .shrink {
        animation: shrinkWidth 1s ease backwards;
    }

    @keyframes expandWidth {
        0% {
            width: 0%;
        }

        100% {
            width: 100%;
        }
    }

    @keyframes shrinkWidth {
        0% {
            width: 100%;
        }

        100% {
            width: 0%;
        }
    }

    /* close button */
    .close-button {
        /* display: none; */
        width: 50px;
        height: 50px;
        position: absolute;
        cursor: pointer;
        right: 5%;
        top: 5%;
    }

    .close-bar {
        /* width: 90%;
        height: 7px;
        border-radius: 8px;
        background-color: #333;
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%); */
        /* transition: transform 0.3s ease; */
        transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .close-button.active .close-bar:nth-child(1) {
        transform: rotate(45deg);
    }

    .close-button.active .close-bar:nth-child(2) {
        transform: rotate(-45deg);
    }

    /* .close-button:hover .close-bar {
        background-color: blue;
    } */

    /* header nav */
    /* header.main-header {
        display: flex;
        position: relative;
    } */

    /* input.search-input {
        border: 0;
        background: #F1F1F1;
        padding: 15px;
        border-radius: 8px;
        width: 400px;
        margin: 0px 0px 0px 20px;
    } */

    /* section.side-header {
        position: relative;
        width: 60%;
        font-weight: 600;
    } */

    /* .side-header-items>a {
        display: flex;
        gap: 10px;
    } */

    .side-header-items>svg {
        stroke-width: 2px;
    }

    /* nav.side-header-nav {
        position: absolute;
        right: 5%;
        top: 50%;
        transform: translateY(-50%);
    } */

    /* nav.side-header-nav>ul {
        display: flex;
        list-style: none;
        align-items: end;
        gap: 20px;
    } */

    /* .side-header-items {
        display: flex;
        gap: 10px;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        height: 30px;
    } */

    img.side-header-profile-pic {
        background: black;
        height: 30px;
        width: 30px;
        border-radius: 50%;
    }
</style>
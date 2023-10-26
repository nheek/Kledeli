<header class="main-header">
    <input class="search-input" type="text" placeholder="Search for your favourite clothing here...">
    <section class="side-header">

        <nav class="side-header-nav">
            <ul>
                <li>
                    <div class="side-header-items">
                        <a href="/pages/hentested">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                            <span>Hentested</span>
                        </a>
                    </div>

                </li>

                <li hidden>

                    <div class="side-header-items">
                        <img class="side-header-profile-pic">
                        <span>Hallo Nick Hipol</span>
                    </div>

                </li>

                <li>

                    <div class="side-header-items">
                        <a href="/pages/login">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M16 17l5-5-5-5M19.8 12H9M13 22a10 10 0 1 1 0-20" />
                            </svg>
                            <span>Logg på</span>
                        </a>
                    </div>

                </li>

                <li>
                    <div class="side-header-items">

                        <a href="/pages/register">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="8.5" cy="7" r="4"></circle>
                                <line x1="20" y1="8" x2="20" y2="14"></line>
                                <line x1="23" y1="11" x2="17" y2="11"></line>
                            </svg>
                            <span>Registrer</span>
                        </a>
                    </div>

                </li>
            </ul>
        </nav>

    </section>
</header>


<style>
/* header nav */
header.main-header {
    display: flex;
    position: relative;
}

input.search-input {
    border: 0;
    background: #F1F1F1;
    padding: 15px;
    border-radius: 8px;
    width: 400px;
    margin: 0px 0px 0px 20px;
}

section.side-header {
    position: relative;
    width: 60%;
    font-weight: 600;
}

.side-header-items>a {
    display: flex;
    gap: 10px;
}

.side-header-items>svg {
    stroke-width: 2px;
}

nav.side-header-nav {
    position: absolute;
    right: 5%;
    top: 50%;
    transform: translateY(-50%);
}

nav.side-header-nav>ul {
    display: flex;
    list-style: none;
    align-items: end;
    gap: 20px;
}

.side-header-items {
    display: flex;
    gap: 10px;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    height: 30px;
}

img.side-header-profile-pic {
    background: black;
    height: 30px;
    width: 30px;
    border-radius: 50%;
}
</style>
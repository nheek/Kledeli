<aside class="left-sidebar">
    <h1 class="logo">
        <a href="/">KLEDELI </a>
    </h1>

    <h2 class="left-sidebar-header">Utforsk</h2>
    <ul class="left-sidebar-ul">
        <li>
            <a href="/pages/katalog/ytterklaer">
                ✌ Ytterklær
            </a>
        </li>
        <li>
            <a href="/pages/katalog/undertoy">
                ⚡ Undertøy
            </a>
        </li>
        <li>
            <a href="/pages/katalog/indreklaer">
                ⌛ Indreklær
            </a>
        </li>
    </ul>

    <div class="left-sidebar-bottom-menu">
        <ul class="left-sidebar-ul">
            <li>💬 Kundeservice</li>
        </ul>
    </div>
</aside>

<style>
/* sidebar */
aside.left-sidebar {
    /* background: black; */
    height: 95vh;
    width: 21%;
}

h1.logo {
    font-size: 2rem;
    display: flex;
    margin: 20px 0px 70px 40px;
    background: #FAA400;
    border-radius: 43% 57% 62% 38% / 46% 30% 70% 54%;
    width: 11%;
    letter-spacing: 10px;
    padding: 0px 0px 0px 10px;
}

h1.logo>a {
    text-decoration: none;
    color: inherit;
}

h2.left-sidebar-header {
    font-size: 2rem;
    margin: 0px 0px 20px 40px;
}

ul.left-sidebar-ul {
    list-style: none;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 25px;
    margin: 0px 0px 0px 50px;
    font-weight: 600;
}

ul.left-sidebar-ul>li {
    cursor: pointer;
}

.left-sidebar-bottom-menu {
    position: absolute;
    bottom: 8%;
}
</style>
<header>
    <div class="logo-container">
        <img src="<?= ROOT . 'public/assets/imgs/videomania-logo.png' ?>" alt="">
    </div>
    <nav class="nav-container">
        <ul>
            <li>
                <a id="home" href="home">Acceuil</a>
            </li>
            <span>|</span>
            <li>
                <a id="explore" href="explore">Explorer</a>
            </li>
            <span>|</span>
            <li>
                <a id="post" href="post">Poster</a>
            </li>
        </ul>
    </nav>
    <div class="right-content">
        <!-- <div class="search-container">
            <img src="<?= ROOT . 'public/assets/icons/search.svg' ?>" alt="" class="search__icon">
            <input type="text" class="search-bar" name="search" id="search" placeholder="Rechercher">
        </div> -->
        <button class="show-account-modal">
            <img src="<?= ROOT . 'public/assets/icons/burger-menu.svg' ?>" alt="" class="search__icon">
        </button>
        <div class="account-modal">
                <nav>
                    <ul>
                        <li class="not-on-desktop ">
                            <a href="explore">
                                <img src="<?= ROOT . 'public/assets/icons/compass.svg' ?>" alt=""
                                    class="search__icon">
                                Explorer
                            </a>
                        </li>
                        <li class="not-on-desktop ">
                            <a href="post">
                                <img src="<?= ROOT . 'public/assets/icons/send.svg' ?>" alt=""
                                    class="search__icon">
                                Poster
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="<?= ROOT . 'public/assets/icons/setting.svg' ?>" alt=""
                                    class="search__icon">
                                Paramètres
                            </a>
                        </li>
                    </ul>
                </nav>
                <ul>
                    <li>
                        <a href="">
                            <img src="<?= ROOT . 'public/assets/icons/help.svg' ?>" alt="" class="search__icon">
                            À propos de nous
                        </a>
                        <li>
                            <a href="">
                                <img src="<?= ROOT . 'public/assets/icons/login.svg' ?>" alt=""
                                    class="search__icon">
                                Connexion
                            </a>
                        </li>
                    </li>
                </ul>
            </div>
        <button class="login-button">
            Connexion
        </button>
    </div>
</header>
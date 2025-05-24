<header>
    <a href="<?= ROOT ?>" class="logo-container">
        <img src="<?= ROOT . 'public/assets/imgs/videomania-logo.png' ?>" alt="">
    </a>
    <nav class="nav-container">
        <ul>
<!--             <li>
                <a id="explore" href="<?= ROOT ?>">Acceuil</a>
            </li> -->
            <li>
                <a id="explore" href="<?= ROOT . 'explore' ?>">Explorer</a>
            </li>
            
            <li>
                <a id="post" href="<?= ROOT . 'post' ?>">Poster</a>
            </li>
        </ul>
    </nav>
    <div class="right-content">
        <button class="show-account-modal">
            <img src="<?= ROOT . 'public/assets/icons/burger-menu.svg' ?>" alt="burger menu icon" class="search__icon" id="open-account-modal-icon">
            <img src="<?= ROOT . 'public/assets/icons/cross.svg' ?>" alt="cross icon" class="search__icon" id="close-account-modal-icon">
        </button>
        <div class="account-modal">
                <nav>
                    <ul>
                        <li class="not-on-desktop ">
                            <a href="<?= ROOT . 'explore' ?>">
                                <img src="<?= ROOT . 'public/assets/icons/compass.svg' ?>" alt=""
                                    class="search__icon">
                                Explorer
                            </a>
                        </li>
                        <li class="not-on-desktop ">
                            <a href="<?= ROOT . 'post' ?>">
                                <img src="<?= ROOT . 'public/assets/icons/send.svg' ?>" alt=""
                                    class="search__icon">
                                Poster
                            </a>
                        </li>
                        <li>
                            <a href="<?= ROOT . 'settings' ?>">
                                <img src="<?= ROOT . 'public/assets/icons/setting.svg' ?>" alt=""
                                    class="search__icon">
                                Paramètres
                            </a>
                        </li>
                    </ul>
                </nav>
                <ul>
                    <li>
                        <a href="<?= ROOT . 'about-us' ?>">
                            <img src="<?= ROOT . 'public/assets/icons/help.svg' ?>" alt="" class="search__icon">
                            À propos de nous
                        </a>
                        <li>
                            <a href="<?= ROOT . 'auth/login' ?>">
                                <img src="<?= ROOT . 'public/assets/icons/login.svg' ?>" alt=""
                                    class="search__icon">
                                Connexion
                            </a>
                        </li>
                    </li>
                </ul>
            </div>
        <a href="auth/login" class="login-button button primary-button">
            Connexion
        </a>
    </div>
</header>
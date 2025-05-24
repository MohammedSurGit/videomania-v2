<main class="main--auth">
    <aside class="auth-aside">



        <div class="auth-logo__container">
            <img src="<?= ROOT . "public/assets/imgs/videomania-logo.png" ?>" alt="videomania logo">
        </div>
        <div class="back-top-app__container">
            <a href="<?= ROOT ?>" class="back-to-app__link">
                Retour à la page d'accueil
                <div class="back-to-app__link-icon">
                    <img src="<?= ROOT . "public/assets/icons/to-right-arrow.svg" ?>" alt="miami picture">
                </div>
            </a>
        </div>
        <div class="commitment-text__container">
            <span class="commitment-text__text">
                Rejoins la première plateforme <br> 100% dédiée aux sports extrêmes.
            </span>
        </div>



        <!-- swipper -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="<?= ROOT . "public/assets/imgs/ski.jpg" ?>" alt="videomania logo">
                </div>
                <div class="swiper-slide">
                    <img src="<?= ROOT . "public/assets/imgs/kitesurf.jpg" ?>" alt="videomania logo">
                </div>
                <div class="swiper-slide">
                    <img src="<?= ROOT . "public/assets/imgs/cross.jpg" ?>" alt="videomania logo">
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <!-- <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div> -->

            <!-- If we need scrollbar -->
            <!-- <div class="swiper-scrollbar"></div> -->
        </div>

    </aside>
    <div class="auth-container">
        <div class="auth__content">
            <h1>Re-bonjour !</h1>
            <p>Nouveau chez Videomania ? <a href="<?= ROOT . 'auth/signup' ?>">S'inscrire</a></p>

            <form action="" class="auth-form">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" required>

                <label for="password">Mot de passe</label>


                <div class="password-container">
                    <input type="password" name="password" id="password" placeholder="Mot de passe" required>
                    <img src="<?= ROOT . "public/assets/icons/opened-eye.svg" ?>" alt="miami picture">
                    <img src="<?= ROOT . "public/assets/icons/closed-eye.svg" ?>" alt="miami picture">
                </div>

                <input class="button primary-button" type="submit" name="submit-btn" id="submit-btn"
                    value="Se connecter" required>
            </form>

            <a href="singup">Mot de passe oublié ?</a>

        </div>
    </div>
</main>
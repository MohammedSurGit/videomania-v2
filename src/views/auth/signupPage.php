<main class="main--auth">
    <aside class="auth-aside">
        <img src="<?= ROOT . "public/assets/imgs/kitesurf.jpg" ?>" alt="miami picture">
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
            <span class="commitment-text__container">
                Rejoins la première plateforme <br> 100% dédiée aux sports extrêmes.
            </span>
        </div>
    </aside>
    <div class="auth-container">
        <div class="auth__content">
            <h1>Créer un compte</h1>
            <p>Vous avez déjà un compte ? <a href="<?= ROOT . 'auth/login' ?>">Se connecter</a></p>

            <form action="" class="auth-form">
                <div class="name-container">
                    <label for="lastname">Nom</label>
                    <label for="firstname">Email</label>


                    <input type="text" name="lastname" id="lastname" placeholder="Nom" required>
                    <input type="text" name="firstname" id="firstname" placeholder="Prénom" required>
                </div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" required>

                <label for="password">Mot de passe</label>

                <div class="password-container">
                    <input type="password" name="password" id="password" placeholder="Mot de passe" required>
                    <img src="<?= ROOT . "public/assets/icons/opened-eye.svg" ?>" alt="miami picture">
                    <img src="<?= ROOT . "public/assets/icons/closed-eye.svg" ?>" alt="miami picture">
                </div>

                <label for="confirm-password">Confirmer le mot de passe</label>
                <div class="password-container">
                    <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirmer le mot de passe" required>
                    <img src="<?= ROOT . "public/assets/icons/opened-eye.svg" ?>" alt="miami picture">
                    <img src="<?= ROOT . "public/assets/icons/closed-eye.svg" ?>" alt="miami picture">
                </div>

                <input type="submit" name="submit-btn" id="submit-btn" value="S'inscrire" required>
            </form>

        </div>
    </div>
</main>
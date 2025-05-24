<?php require_once ROOT_PATH . "/src/views/components/header.php" ?>

<main class="main--home-page">
    <div class="home-heading">
        <div class="home-heading__content">
            <h1>Explore l'univers extrême</h1>
            <p>Plonge dans des milliers de vidéos partagées par la communauté.</p>
            <div class="search-container">
                <div>
                    <img src="<?= ROOT . 'public/assets/icons/search.svg' ?>" alt="" class="search__icon">
                    <input type="text" class="search-bar" name="search" id="search" placeholder="Tapez votre recherche...">
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once ROOT_PATH . "/src/views/components/footer.php" ?>
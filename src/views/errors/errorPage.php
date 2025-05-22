<?php require_once ROOT_PATH . "/src/views/components/header.php" ?>

<main>
     <div class="error-container">
        <img src="<?= ROOT . 'public/assets/imgs/lost-in-space.gif' ?>" alt="" class="error-image" />
        <h1 class="error-title">Oups...</h1>
        <p class="error-message"><?= $message ?></p>
    </div>
</main>
   
<?php require_once ROOT_PATH . "/src/views/components/footer.php" ?>
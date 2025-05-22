<?php

require_once __DIR__ . '/vendor/autoload.php';


define("ROOT", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" :
    "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER["PHP_SELF"]));

define("ROOT_PATH", __DIR__);

use Src\Controllers\MainController;

$MainController = new MainController();

session_start();

try {
    if (empty($_GET['action'])) {
        $url[0] = 'home';
    } else {
        $url = explode("/", filter_var($_GET['action'], FILTER_SANITIZE_URL));
    }

    switch ($url[0]) {
        case "home":
            $MainController->homePage();
            break;

        /* case "auth":
            switch ($url[1]) {
                case "singup":
                    $AuthController->singupPage();
                    break;



                default:
                    throw new Exception("La page que vous recherchez n'existe pas ou n'est pas accessible à cette adresse...");

            } */


        default:
            throw new Exception("La page que vous recherchez n'existe pas ou n'est pas accessible à cette adresse...");
    }



} catch (Exception $e) {
    $MainController->errorPage($e->getMessage());
}


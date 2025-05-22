<?php

namespace Src\Controllers;

use Src\Utils\Utilities;

class MainController  
{
    public function homePage() {

        $datas_page = [
            "description" => "Page d'accueil de vidéo mania",
            "title" => "Videomania",
            "view" => ROOT_PATH . "/src/views/app/homePage.php"
        ];

        Utilities::renderPage($datas_page);

    }


    public function errorPage($message) {

        $datas_page = [
            "description" => "Une erreur est survenue lors de votre navigation sur Mosaïque. Notre équipe a été informée et nous travaillons à résoudre ce problème rapidement.",
            "title" => "Mosaïque | Oups, un problème est survenu",
            "view" => ROOT_PATH . "/src/views/errors/errorPage.php",
            "message" => $message
        ];

        Utilities::renderPage($datas_page);
    }

}
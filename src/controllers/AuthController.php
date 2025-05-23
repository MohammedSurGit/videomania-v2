<?php

namespace Src\Controllers;

use Src\Utils\Utilities;

class AuthController
{
    public function loginPage() {
        $datas_page = [
            "description" => "Page de connexion videomania",
            "title" => "Videomania",
            "view" => ROOT_PATH . "/src/views/auth/loginPage.php"
        ];

        Utilities::renderPage($datas_page);
    }

    public function signupPage() {
        $datas_page = [
            "description" => "Page d'inscription videomania",
            "title" => "Videomania",
            "view" => ROOT_PATH . "/src/views/auth/signupPage.php"
        ];

        Utilities::renderPage($datas_page);
    }
}
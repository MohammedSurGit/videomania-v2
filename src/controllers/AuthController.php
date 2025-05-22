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
}
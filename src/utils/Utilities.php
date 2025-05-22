<?php

namespace Src\Utils;

class Utilities 
{
    public static function renderPage($datas_page) {
        extract($datas_page);
        ob_start();
        require($view);
        $content = ob_get_clean();
        require_once(ROOT_PATH . "/src/views/commons/layout.php");
    }





    
}
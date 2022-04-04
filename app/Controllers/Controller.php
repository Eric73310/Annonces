<?php

namespace App\Controllers;


abstract class Controller{ //abstract parce qu'elle ne sera jamais instancier

    protected function view(string $path, array $params = null)
    {
        ob_start();
        $path = str_replace('.', DIRECTORY_SEPARATOR, $path);
        require VIEWS . $path . '.php';
        /*if ($params){
            $params = extract($params);
        }*/
        $content = ob_get_clean();
        require VIEWS . 'layout.php';
    }
}

?>
<?php

class Router{
    private $_ctrl;
    private $_view;


    public function routeReq(){
        try
        {
            // Chargement auto des classes
            spl_autoload_register(function($class){
                require_once('models/ArticleManger.php');
            });

            $url = '';

            // 
            if(isset($_GET['url'])){
                $url = explode('/', filter_var($_GET['url'], 
                FILTER_SANITIZE_URL));

                $controller = ucfirst(strtolower($url[0]));
                $controllerClass = "Controller".$controller;
                $controllerFile = "controllers/".$controllerClass.".php";

                if(file_exists($controllerFile)){
                    require_once($controllerFile);
                    $this->_ctrl = new $controllerClass($url);
                }
                else 
                throw new Exception('page introuvable');
            }
            else {
                require_once('controllers/ControllersAcceuil.php');
                $this->_ctrl = new ControllersAcceuil($url);
            }
        } 
        catch(Exception $e){
            $errorMsg = $e->getMessage();
            require_once('views/viewsError.php');
        }
    }

}
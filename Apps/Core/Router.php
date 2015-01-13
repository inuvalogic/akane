<?php

namespace Apps\Core;

class Router {
    
    public static $current;

    public static function init(){
        include __CONFIG_DIR__.'routes.php';
        if (isset($routes) && is_array($routes))
        {
            $uri = str_replace(__SITEPATH__,'',$_SERVER['REQUEST_URI']);
            $uri = trim($uri,'/');
            if (!empty($uri))
            {
                foreach ($routes as $from => $to)
                {
                    if (preg_match('#^'.$from.'$#', $uri))
                    {
                        Router::$current = $from;
                        
                        $parse = explode(':', $to);
                        
                        if ( count($parse) > 0)
                        {
                            $classname = '\Apps\Controller\\'.ucwords($parse[0]).'Controller';

                            if (isset($parse[1])){
                                $method = $parse[1].'Action';
                            } else {
                                $method = 'indexAction';
                            }

                            if (method_exists($classname, $method)){
                                $controller = new $classname;
                                $controller->$method();
                            } else {
                                Response::loadView('404');
                            }
                        } else {                    
                            $controller = new \Apps\Controller\HomeController;
                            $controller->indexAction();
                        }
                        exit;
                    }
                }
            } else {
                $controller = new \Apps\Controller\HomeController;
                $controller->indexAction();
            }
        }
    }
    
}
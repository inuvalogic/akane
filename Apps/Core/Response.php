<?php

namespace Apps\Core;

class Response {

    public function __construct($output){
        echo $output;
    }
    
    public static function loadView($file, $var = false, $return = false){
        $path = __VIEWS_DIR__.$file.'.php';
        if (file_exists($path))
        {
            if ($var!=false && is_array($var)==true){
                extract($var);
            }
            
            ob_start();
            include $path;
            $tag = ob_get_contents();
            ob_end_clean();
            flush();

            if ($return==true){
                return $tag;
            } else {
                echo $tag;
            }
        } else {
            return sprintf(ERROR_TMPL,$file);
        }
    }
}
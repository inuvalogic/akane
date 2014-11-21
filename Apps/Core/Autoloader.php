<?php

class Autoloader
{
    public $filename;

    public function getFilename() {
        return $this->filename;
    }

    public function Register() {
        return spl_autoload_register(array('Autoloader', 'Load'));
    }

    public function Load($classname) {
        
        $classname = str_replace("\\", "/", $classname);
        
        $filename = __ROOT_DIR__.$classname.".php";
        
        // echo 'class = ', $classname, '<br />file = ', $filename, '<br />loader = ', __METHOD__, "()<br /><br />";

        $this->filename = $filename;

        if((file_exists($filename) === false) || (is_readable($filename) === false)) {
            return false;
        }
        
        require($filename);

    }
}
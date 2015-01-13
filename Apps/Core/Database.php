<?php

namespace Apps\Core;

use \PDO;

class Database {
    
    public static $db = null;

    public static function init(){
        include __CONFIG_DIR__.'database.php';
        if (isset($database) && is_array($database))
        {
            try {
                Database::$db = new PDO('mysql:host='.$database['hostname'].';dbname='.$database['database'], $database['username'], $database['password'], array(PDO::ATTR_PERSISTENT => true));
            } catch (PDOException $e) {
                // print "Error!: " . $e->getMessage() . "<br/>";
                new Response('Database maintenance problem! Please try again later.');
            }
        }
    }
    
}
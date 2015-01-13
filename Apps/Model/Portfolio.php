<?php

namespace Apps\Model;

use Apps\Core\Database;

class Portfolio {

    public static function getAll() {
        $sql = "SELECT * FROM portfolio ORDER BY projectyear DESC";
        $q = Database::$db->prepare($sql);
        $q->execute();
        return $q->fetchAll();
    }

    public static function getCategoryName($id){
        $sql = "SELECT name FROM portfolio_category WHERE id = ?";
        $q = Database::$db->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch();
        return $data['name'];
    }

}
<?php

namespace App\Core;

use PDO;

class Controlleur{

    protected function model($model){
        require_once '../app/models/'. ucfirst($model) .'.php';
        $model = 'App\\Models\\'.$model;
        return new $model();
    }

    protected function vue($vue, $donnees = []){
        ob_start();
        require_once '../app/vues/'. $vue;
        $content = ob_get_clean();
        require_once '../app/vues/templates/layout.php';
    }

    /*
    public function db():PDO
    {
        return Database::getDB();
    }
    */
    
}

    
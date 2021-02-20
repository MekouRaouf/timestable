<?php

namespace App\Controlleur;

use App\Core\Controlleur;

class Cours extends Controlleur{

    public function index(){
        $this->vue('cours/cours.php');
    }

}
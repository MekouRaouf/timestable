<?php

namespace App\Controlleur;

use App\Core\Controlleur;

class Exos extends Controlleur{

    public function index($nom = ''){
        $this->vue('exos/exos.php');
    }

}
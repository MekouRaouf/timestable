<?php

namespace App\Controlleur;

use App\Core\Controlleur;

class Td extends Controlleur{

    public function index(){
        $this->vue('td/td.php');
    }

}
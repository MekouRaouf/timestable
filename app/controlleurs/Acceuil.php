<?php

namespace App\Controlleur;

use App\Core\Controlleur;
use PDO;

class Acceuil extends Controlleur{

    public function index(){    
        $this->vue('acceuil/acceuil.php');
    }

}
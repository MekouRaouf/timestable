<?php

namespace App\Controlleur;

use App\Core\Controlleur;
use App\Models\Creneau;
use App\Models\Edt;
use App\Models\Jours;

class Emplois extends Controlleur{

    public function index(){
        $edts = Edt::get();
        $jours = Jours::all(['jour']);

        $this->vue('edt/emplois.php', [
            'edts' => $edts,
            'jours' => $jours,
        ]);
    }

    /*
    public function getEdts(){
        return $this->db()->query("SELECT * FROM edt")->fetchAll(PDO::FETCH_CLASS);
    }

    public function getJours(){
        return $this->db()->query("SELECT * FROM jours")->fetchAll(PDO::FETCH_CLASS);
    }

    public function getCreneau(){
        return $this->db()->query("SELECT * FROM creneau")->fetchAll(PDO::FETCH_CLASS);
    }
    public function creneau_edt($emploi, $idJour){
        return $this->db()->query("SELECT debut, fin FROM programmation, edt, creneau WHERE edt.id=programmation.id_edt AND programmation.id_creneau=creneau.id");
    }
    */

}
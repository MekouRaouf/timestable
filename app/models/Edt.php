<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Edt extends Model{

    protected $fillable = [
        'Nom_etudiant'
    ];

    public function jours(){
        return $this->hasMany(Jours::class);
    }

    public function creneaux(){
        return $this->belongsToMany(Creneau::class, 'creneau_edt', 'edt_id', 'creneau_id');
    }

    public function plannings(){
        return $this->hasMany(Planning::class);
    }

}
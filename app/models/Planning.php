<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planning extends Model{

    public function edt(){
        return $this->belongsTo(Edt::class);
    }

    public function matiere(){
        return $this->belongsTo(Matiere::class);
    }

    public function creneau(){
        return $this->belongsTo(Creneau::class);
    }
    
    public function jour(){
        return $this->belongsTo(Jours::class);
    }

    public function typeplanning(){
        return $this->belongsTo(TypePlanning::class);
    }

}
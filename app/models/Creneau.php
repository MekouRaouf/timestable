<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Creneau extends Model{

    protected $fillable = [
        'debut',
        'fin'
    ];

    public function edt(){
        return $this->belongsToMany(Edt::class, 'creneau_edt', 'creneau_id', 'edt_id');
    }

    public function plannings(){
        return $this->hasMany(Planning::class);
    }

}
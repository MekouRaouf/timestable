<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jours extends Model{

    protected $table = 'jours';

    protected $fillable = [
        'jour'
    ];

    public function edt(){
        return $this->belongsToMany(Edt::class);
    }

    public function plannings(){
        return $this->belongsToMany(Planning::class);
    }

}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypePlanning extends Model{

    protected $table = 'typeplanning';

    public function plannings(){
        return $this->hasMany(Planning::class);
    }

}
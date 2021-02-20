<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model{

    public function planning(){
        return $this->belongsTo(Planning::class);
    }

}
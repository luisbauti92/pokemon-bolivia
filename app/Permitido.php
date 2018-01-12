<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permitido extends Model
{
    public function torneo(){
       return $this->belongsTo('App\Torneo');
    }
    public function pokemon(){
       return $this->belongsTo('App\Pokemon');
    }
}

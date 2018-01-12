<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    public function torneo(){
     return $this->belongsTo('App\Torneo');
    }
    public function user(){
     return $this->belongsTo('App\User');
    }
}

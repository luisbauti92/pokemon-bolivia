<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
      public function inscripcion() {
          return $this->hasMany('App\Inscripcion');
      }
      public function permitido() {
          return $this->hasMany('App\Permitido');
      }
}

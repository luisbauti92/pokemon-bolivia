<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{

    protected $fillable = ['Lookup', 'Ndex', 'Species', 'Forme', 'Type1', 'Type2', 'Ability1', 'Ability2', 'AbilityH', 'HP', 'Attack', 'Defense', 'SpAttack', 'SpDefense', 'Speed', 'Total', 'Weight', 'Height', 'Dex1', 'Dex2', 'Class', 'Male', 'Female', 'PreEvolution', 'EggGroup1', 'EggGroup2', 'TypeConcat', 'AbilityConcat'];
    public function permitido() {
        return $this->hasMany('App\Permitido');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pokemon;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
class ImportController extends Controller
{
  public function import()
  {
         Excel::load('modelnuevo.csv', function($reader) {

         foreach ($reader->get() as $book) {
         Pokemon::create([
         'Lookup' => $book->lookup,
         'Ndex' =>$book->ndex,
         'Species' =>$book->species,
         'Forme' =>$book->forme,
         'Type1' =>$book->type1,
         'Type2' =>$book->type2,
         'Ability1' =>$book->ability1,
         'Ability2' =>$book->ability2,
         'AbilityH' =>$book->abilityh,
         'HP' =>$book->hp,
         'Attack' =>$book->attack,
         'Defense' =>$book->defense,
         'SpAttack' =>$book->spattack,
         'SpDefense' =>$book->spdefense,
         'Speed' =>$book->speed,
         'Total' =>$book->total,
         'Weight' =>$book->weight,
         'Height' =>$book->height,
         'Dex1' =>"",
         'Dex2' =>"",
         'Class' =>$book->class,
         'Male' =>50,
         'Female' =>50,
         'PreEvolution' =>$book->preevolutionn,
         'EggGroup1' =>$book->egggroup1,
         'EggGroup2' =>$book->egggroup2,
         'TypeConcat' =>$book->typeconcat,
         'AbilityConcat' =>$book->abilityconcat
           ]);
            //return dd($book);
         }
      });
      return Pokemon::all();
  }
}

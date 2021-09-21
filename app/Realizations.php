<?php

namespace App;

use App\Realizationcategories;
use Illuminate\Database\Eloquent\Model;

class Realizations extends Model
{
    public function Realizationcategories(){
        return $this->belongsTo('App\Realizationcategories');
    }

}

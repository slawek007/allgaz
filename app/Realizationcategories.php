<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realizationcategories extends Model
{
    public function Realizations(){
        return $this->hasMany('App\Realizations');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diretor extends Model
{
    //

    public function movies()
    {
        return $this->hasOne('App\Movies', 'id_diretor', 'id');
    }
}

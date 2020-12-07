<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ators extends Model
{
    protected $table = 'ators';
    protected $fillable = [
        'id',
        'nome_a',
    ];

    public function movies()
    {
        return $this->belongsToMany('App\Movies','movies_ators','id_ator','id_movies');
    }
 }

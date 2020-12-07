<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $table = 'movies';
    protected $fillable = [
        'id',
        'nome',
        'sinopse',
        'id_diretor',
        'id_class'
    ];

    public function diretors()
    {
        return $this->belongsTo('App\Diretor', 'id_diretor', 'id');
    }
    public function classifications()
    {
        return $this->belongsTo('App\Classification', 'id_class', 'id');
    }
    public function ators()
    {
        return $this->belongsToMany('App\Ators','movies_ators','id_movies','id_ator');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    protected $table = 'classifications';
    protected $fillable = [
        'id',
        'class'
    ];

    public function movies()
    {
        return $this->hasOne('App\Movies', 'id_class', 'id');
    }
}

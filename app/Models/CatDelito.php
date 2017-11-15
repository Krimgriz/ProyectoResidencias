<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatDelito extends Model
{
    public $table = 'cat_delito';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'nombre',
        'snVeh'
    ];
}

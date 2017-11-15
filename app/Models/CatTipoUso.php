<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatTipoUso extends Model
{
    public $table = 'cat_tipo_uso';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'nombre'
    ];
}

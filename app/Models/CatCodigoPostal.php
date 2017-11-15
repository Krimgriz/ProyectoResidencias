<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatCodigoPostal extends Model
{
    public $table = 'cat_codigo_postal';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public $fillable = [
        'id',
        'idMunicipio',
        'codigo'
    ];
}

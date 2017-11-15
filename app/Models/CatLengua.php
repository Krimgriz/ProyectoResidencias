<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatLengua extends Model
{
    public $table = 'cat_lengua';

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

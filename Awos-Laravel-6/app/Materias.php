<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        
    ];
}

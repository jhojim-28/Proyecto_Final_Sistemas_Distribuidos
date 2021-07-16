<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Author extends Model 
{
    use HasFactory;
    //Authenticatable, Authorizable, HasFactory;

    /**
     * Atributos de Author
     * @var array
     */
    protected $fillable = [//Se puede crear todo de una sola vez
        'nombre',
        'ubicacion',
        'mpago',
    ];

}

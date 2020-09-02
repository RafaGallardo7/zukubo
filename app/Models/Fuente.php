<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Usuario;
use Auth;
use Carbon\Carbon;

class Fuente extends Authenticatable {    
    use SoftDeletes;

    protected $table = 'fuentes';
    public $timestamps = true;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'nombre',   
        'dominio',   
        'descripcion',   
        'slogan',   
        'pais',   
        'pais_id',   
        'logo',
        'favicon',   
        'imagen1'    
    ];


}



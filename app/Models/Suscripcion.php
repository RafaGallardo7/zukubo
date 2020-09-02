<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Usuario;
use Auth;
use Carbon\Carbon;

class Suscripcion extends Authenticatable {    
    use SoftDeletes;

    protected $table = 'suscripciones';
    public $timestamps = true;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'nombre',   
        'email',   
        'telefono',   
        'mensaje',   
        'suscripcion',
        'plan'           
    ];  


}



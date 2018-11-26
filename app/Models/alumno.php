<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class alumno
 * @package App\Models
 * @version November 26, 2018, 3:07 am UTC
 *
 * @property string name
 * @property string last_name_p
 * @property string last_name_m
 * @property string email
 * @property string user
 * @property string password
 */
class alumno extends Model
{

    public $table = 'alumnos';
    


    public $fillable = [
        'name',
        'last_name_p',
        'last_name_m',
        'email',
        'user',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'last_name_p' => 'string',
        'last_name_m' => 'string',
        'email' => 'string',
        'user' => 'string',
        'password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

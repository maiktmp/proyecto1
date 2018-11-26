<?php

namespace App\Repositories;

use App\Models\alumno;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class alumnoRepository
 * @package App\Repositories
 * @version November 26, 2018, 3:07 am UTC
 *
 * @method alumno findWithoutFail($id, $columns = ['*'])
 * @method alumno find($id, $columns = ['*'])
 * @method alumno first($columns = ['*'])
*/
class alumnoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'last_name_p',
        'last_name_m',
        'email',
        'user',
        'password'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return alumno::class;
    }
}

<?php

namespace App\Repositories;

use App\Models\Area;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AreaRepository
 * @package App\Repositories
 * @version January 24, 2018, 10:20 pm UTC
 *
 * @method Area findWithoutFail($id, $columns = ['*'])
 * @method Area find($id, $columns = ['*'])
 * @method Area first($columns = ['*'])
*/
class AreaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Area::class;
    }
}

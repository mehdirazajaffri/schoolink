<?php

namespace App\Repositories;

use App\Models\School;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SchoolRepository
 * @package App\Repositories
 * @version January 24, 2018, 10:46 pm UTC
 *
 * @method School findWithoutFail($id, $columns = ['*'])
 * @method School find($id, $columns = ['*'])
 * @method School first($columns = ['*'])
*/
class SchoolRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'no_of_students',
        'no_of_campuses',
        'no_of_teachers',
        'phone_number',
        'email_address',
        'office_timings',
        'website'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return School::class;
    }
}

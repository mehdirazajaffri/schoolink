<?php

namespace App\Repositories;

use App\Models\ContactInfo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ContactInfoRepository
 * @package App\Repositories
 * @version January 24, 2018, 10:36 pm UTC
 *
 * @method ContactInfo findWithoutFail($id, $columns = ['*'])
 * @method ContactInfo find($id, $columns = ['*'])
 * @method ContactInfo first($columns = ['*'])
*/
class ContactInfoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email_address',
        'phone_number'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ContactInfo::class;
    }
}

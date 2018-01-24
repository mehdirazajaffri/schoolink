<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class School
 * @package App\Models
 * @version January 24, 2018, 10:46 pm UTC
 *
 * @property string name
 * @property string description
 * @property integer no_of_students
 * @property integer no_of_campuses
 * @property integer no_of_teachers
 * @property integer address_id
 * @property integer contact_info_id
 * @property string phone_number
 * @property string email_address
 * @property string office_timings
 * @property string website
 * @property string school_additional_info
 */
class School extends Model
{
    use SoftDeletes;

    public $table = 'schools';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'description',
        'no_of_students',
        'no_of_campuses',
        'no_of_teachers',
        'address_id',
        'contact_info_id',
        'phone_number',
        'email_address',
        'office_timings',
        'website',
        'school_additional_info'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'no_of_students' => 'integer',
        'no_of_campuses' => 'integer',
        'no_of_teachers' => 'integer',
        'address_id' => 'integer',
        'contact_info_id' => 'integer',
        'phone_number' => 'string',
        'email_address' => 'string',
        'office_timings' => 'string',
        'website' => 'string',
        'school_additional_info' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'description' => 'required',
        'no_of_students' => 'numeric',
        'no_of_campuses' => 'numeric',
        'no_of_teachers' => 'numeric',
        'phone_number' => 'required',
        'email_address' => 'email',
        'office_timings' => 'required',
        'website' => 'required'
    ];

    
}

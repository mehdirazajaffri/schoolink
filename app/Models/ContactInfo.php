<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ContactInfo
 * @package App\Models
 * @version January 24, 2018, 10:36 pm UTC
 *
 * @property string name
 * @property string email_address
 * @property string phone_number
 * @property integer address_id
 */
class ContactInfo extends Model
{
    use SoftDeletes;

    public $table = 'contact_infos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'email_address',
        'phone_number',
        'address_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'email_address' => 'string',
        'phone_number' => 'string',
        'address_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email_address' => 'email',
        'phone_number' => 'required'
    ];

    
}

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Address
 * @package App\Models
 * @version January 24, 2018, 10:29 pm UTC
 *
 * @property \App\Models\countries countries
 * @property integer country_id
 * @property integer city_id
 * @property integer area_id
 * @property string zipcode
 * @property string location
 */
class Address extends Model
{
    use SoftDeletes;

    public $table = 'addresses';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'country_id',
        'city_id',
        'area_id',
        'zipcode',
        'location'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'country_id' => 'integer',
        'city_id' => 'integer',
        'area_id' => 'integer',
        'zipcode' => 'string',
        'location' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'zipcode' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function countries()
    {
        return $this->belongsTo(\App\Models\countries::class, 'country_id', 'id');
    }
}

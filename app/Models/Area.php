<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Area
 * @package App\Models
 * @version January 24, 2018, 10:20 pm UTC
 *
 * @property \App\Models\City city
 * @property string name
 * @property integer city_id
 */
class Area extends Model
{
    use SoftDeletes;

    public $table = 'areas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'city_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'city_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function city()
    {
        return $this->belongsTo(\App\Models\City::class, 'city_id', 'id');
    }
}

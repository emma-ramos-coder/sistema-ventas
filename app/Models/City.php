<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class City
 *
 * @property $id
 * @property $city_name
 * @property $created_at
 * @property $updated_at
 *
 * @property Customer[] $customers
 * @property Supplier[] $suppliers
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class City extends Model
{

    static $rules = [
		'city_name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['city_name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customers():HasMany
    {
        return $this->hasMany('App\Models\Customer', 'city_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function suppliers():HasMany
    {
        return $this->hasMany('App\Models\Supplier', 'city_id', 'id');
    }


}

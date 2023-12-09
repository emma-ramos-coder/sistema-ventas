<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class WayToPay
 *
 * @property $id
 * @property $way_to_pay_description
 * @property $created_at
 * @property $updated_at
 *
 * @property Refund[] $refunds
 * @property Sale[] $sales
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class WayToPay extends Model
{

    static $rules = [
		'way_to_pay_description' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['way_to_pay_description'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function refunds():HasMany
    {
        return $this->hasMany('App\Models\Refund', 'way_to_pay_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sales():HasMany
    {
        return $this->hasMany('App\Models\Sale', 'way_to_pay_id', 'id');
    }


}

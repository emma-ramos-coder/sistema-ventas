<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Customer
 *
 * @property $id
 * @property $document_number
 * @property $document_type_id
 * @property $names
 * @property $surnames
 * @property $address
 * @property $city_id
 * @property $phone
 * @property $created_at
 * @property $updated_at
 *
 * @property City $city
 * @property DocumentType $documentType
 * @property Refund[] $refunds
 * @property Sale[] $sales
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Customer extends Model
{

    static $rules = [
		'document_number' => 'required',
		'document_type_id' => 'required',
		'names' => 'required',
		'surnames' => 'required',
		'address' => 'required',
		'city_id' => 'required',
		'phone' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['document_number','document_type_id','names','surnames','address','city_id','phone'];


    /**
     *
     */
    public function city():BelongsTo
    {
        return $this->belongsTo('App\Models\City', 'city_id', 'id');
    }

    /**
     *
     */
    public function documentType():BelongsTo
    {
        return $this->belongsTo('App\Models\DocumentType', 'document_type_id', 'id');
    }

    /**
     */
    public function refunds():HasMany
    {
        return $this->hasMany(Refund::class, 'customer_id', 'id');
    }

    /**
     */
    public function sales():HasMany
    {
        return $this->hasMany(Sale::class, 'customer_id', 'id');
    }


}

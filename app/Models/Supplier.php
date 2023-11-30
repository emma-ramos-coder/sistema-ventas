<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Supplier
 *
 * @property $id
 * @property $document_number
 * @property $document_type_id
 * @property $name
 * @property $surname
 * @property $tradename
 * @property $address
 * @property $city_id
 * @property $phone
 * @property $created_at
 * @property $updated_at
 *
 * @property Article[] $articles
 * @property City $city
 * @property DocumentType $documentType
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Supplier extends Model
{
    
    static $rules = [
		'document_number' => 'required',
		'document_type_id' => 'required',
		'name' => 'required',
		'surname' => 'required',
		'tradename' => 'required',
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
    protected $fillable = ['document_number','document_type_id','name','surname','tradename','address','city_id','phone'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles()
    {
        return $this->hasMany('App\Models\Article', 'supplier_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function city()
    {
        return $this->hasOne('App\Models\City', 'id', 'city_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function documentType()
    {
        return $this->hasOne('App\Models\DocumentType', 'id', 'document_type_id');
    }
    

}

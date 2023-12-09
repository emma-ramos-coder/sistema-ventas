<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class DocumentType
 *
 * @property $id
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @property Customer[] $customers
 * @property Supplier[] $suppliers
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DocumentType extends Model
{

    static $rules = [
		'description' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['description'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customers():HasMany
    {
        return $this->hasMany('App\Models\Customer', 'document_type_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function suppliers():HasMany
    {
        return $this->hasMany('App\Models\Supplier', 'document_type_id', 'id');
    }


}

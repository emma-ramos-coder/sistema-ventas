<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class ItemType
 *
 * @property $id
 * @property $item_type_description
 * @property $created_at
 * @property $updated_at
 *
 * @property Article[] $articles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ItemType extends Model
{

    static $rules = [
		'item_type_description' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['item_type_description'];


    /**
     */
    public function articles():HasMany
    {
        return $this->hasMany('App\Models\Article', 'item_type_id', 'id');
    }


}

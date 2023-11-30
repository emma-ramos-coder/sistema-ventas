<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 *
 * @property $id
 * @property $description
 * @property $sale_price
 * @property $cost_price
 * @property $stock
 * @property $item_type_id
 * @property $supplier_id
 * @property $admission_date
 * @property $created_at
 * @property $updated_at
 *
 * @property ItemType $itemType
 * @property RefundDetail[] $refundDetails
 * @property SaleDetail[] $saleDetails
 * @property Supplier $supplier
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Article extends Model
{
    
    static $rules = [
		'description' => 'required',
		'sale_price' => 'required',
		'cost_price' => 'required',
		'stock' => 'required',
		'item_type_id' => 'required',
		'supplier_id' => 'required',
		'admission_date' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['description','sale_price','cost_price','stock','item_type_id','supplier_id','admission_date'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function itemType()
    {
        return $this->hasOne('App\Models\ItemType', 'id', 'item_type_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function refundDetails()
    {
        return $this->hasMany('App\Models\RefundDetail', 'article_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saleDetails()
    {
        return $this->hasMany('App\Models\SaleDetail', 'article_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function supplier()
    {
        return $this->hasOne('App\Models\Supplier', 'id', 'supplier_id');
    }
    

}

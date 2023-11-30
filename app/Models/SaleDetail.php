<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SaleDetail
 *
 * @property $id
 * @property $sale_id
 * @property $article_id
 * @property $quantity
 * @property $price
 * @property $created_at
 * @property $updated_at
 *
 * @property Article $article
 * @property Sale $sale
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SaleDetail extends Model
{
    
    static $rules = [
		'sale_id' => 'required',
		'article_id' => 'required',
		'quantity' => 'required',
		'price' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sale_id','article_id','quantity','price'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function article()
    {
        return $this->hasOne('App\Models\Article', 'id', 'article_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sale()
    {
        return $this->hasOne('App\Models\Sale', 'id', 'sale_id');
    }
    

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
     */
    public function article():BelongsTo
    {
        return $this->belongsTo('App\Models\Article', 'article_id', 'id');
    }

    /**
     */
    public function sale():BelongsTo
    {
        return $this->belongsTo('App\Models\Sale', 'sale_id', 'id');
    }


}

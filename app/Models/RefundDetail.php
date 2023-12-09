<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class RefundDetail
 *
 * @property $id
 * @property $refund_id
 * @property $article_id
 * @property $quantity
 * @property $price
 * @property $created_at
 * @property $updated_at
 *
 * @property Article $article
 * @property Refund $refund
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class RefundDetail extends Model
{

    static $rules = [
		'refund_id' => 'required',
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
    protected $fillable = ['refund_id','article_id','quantity','price'];


    /**
     */
    public function article():BelongsTo
    {
        return $this->belonsTo('App\Models\Article', 'article_id', 'id');
    }

    /**
     */
    public function refund():BelongsTo
    {
        return $this->belongsTo('App\Models\Refund', 'refund_id', 'id');
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function article()
    {
        return $this->hasOne('App\Models\Article', 'id', 'article_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function refund()
    {
        return $this->hasOne('App\Models\Refund', 'id', 'refund_id');
    }
    

}

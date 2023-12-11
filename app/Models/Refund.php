<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class Refund
 *
 * @property $id
 * @property $sale_id
 * @property $customer_id
 * @property $user_id
 * @property $invoice_date
 * @property $way_to_pay_id
 * @property $total_refund
 * @property $igv
 * @property $motive
 * @property $created_at
 * @property $updated_at
 *
 * @property Customer $customer
 * @property RefundDetail[] $refundDetails
 * @property Sale $sale
 * @property User $user
 * @property WayToPay $wayToPay
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Refund extends Model
{

    static $rules = [
		'sale_id' => 'required',
		'customer_id' => 'required',
		'invoice_date' => 'required',
		'way_to_pay_id' => 'required',
		'total_refund' => 'required',
		'igv' => 'required',
		'motive' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sale_id','customer_id','user_id','invoice_date','way_to_pay_id','total_refund','igv','motive'];


    /**

     */
    public function customer():BelongsTo
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function refundDetails():HasMany
    {
        return $this->hasMany('App\Models\RefundDetail', 'refund_id', 'id');
    }

    /**
    */
    public function sale():BelongsTo
    {
        return $this->belongsTo('App\Models\Sale', 'sale_id', 'id');
    }

    /**
     */
    public function user():BelongsTo
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    /**

     */
    public function wayToPay():BelongsTo
    {
        return $this->belongsTo('App\Models\WayToPay', 'way_to_pay_id', 'id');
    }


}

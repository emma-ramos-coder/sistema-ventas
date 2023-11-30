<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
		'user_id' => 'required',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function customer()
    {
        return $this->hasOne('App\Models\Customer', 'id', 'customer_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function refundDetails()
    {
        return $this->hasMany('App\Models\RefundDetail', 'refund_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sale()
    {
        return $this->hasOne('App\Models\Sale', 'id', 'sale_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function wayToPay()
    {
        return $this->hasOne('App\Models\WayToPay', 'id', 'way_to_pay_id');
    }
    

}

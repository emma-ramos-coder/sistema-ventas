<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Sale
 *
 * @property $id
 * @property $customer_id
 * @property $user_id
 * @property $invoice_date
 * @property $way_to_pay_id
 * @property $total_invoice
 * @property $igv
 * @property $created_at
 * @property $updated_at
 *
 * @property Customer $customer
 * @property Refund[] $refunds
 * @property SaleDetail[] $saleDetails
 * @property User $user
 * @property WayToPay $wayToPay
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sale extends Model
{

    static $rules = [
		'customer_id' => 'required',
		'user_id' => 'required',
		'invoice_date' => 'required',
		'way_to_pay_id' => 'required',
		'total_invoice' => 'required',
		'igv' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['customer_id','user_id','invoice_date','way_to_pay_id','total_invoice','igv'];


    /**
     */
    public function customer():BelongsTo
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id','id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function refunds():HasMany
    {
        return $this->hasMany('App\Models\Refund', 'sale_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saleDetails():HasMany
    {
        return $this->hasMany('App\Models\SaleDetail', 'sale_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user():BelongsTo
    {
        return $this->belongsTo('App\Models\User', 'user_id','id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function wayToPay():BelongsTo
    {
        return $this->belongsTo('App\Models\WayToPay', 'way_to_pay_id','id');
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'customer_id',
        'sale_date',
        'invoice_number',
        'sub_total',
        'discount',
        'net_total'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}


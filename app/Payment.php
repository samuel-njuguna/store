<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable=["order_id","date_paid","merchant_id","status"];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}

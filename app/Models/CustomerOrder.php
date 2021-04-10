<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerOrder extends Model
{
    use HasFactory, SoftDeletes;


    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function customerAddress()
    {
        return $this->belongsTo(CustomerAddress::class);
    }

    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }
    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function customerorderproduct()
    {
        return $this->hasMany(CustomerOrderProduct::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'delivery_man');
    }
}

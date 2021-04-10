<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory, SoftDeletes;

//    public function garment()
//    {
//        return $this->hasMany('Garment');
//    }
//    public function alteration()
//    {
//        return $this->hasMany('Alteration');
//    }
    public function customerAddress()
    {
        return $this->hasMany(CustomerAddress::class);
    }

    public function customerOrder()
    {
        return $this->hasMany(CustomerOrder::class);
    }
}

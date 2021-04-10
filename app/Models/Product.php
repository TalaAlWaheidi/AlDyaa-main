<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;


    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function category()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function customerOrders()
    {
        return $this->belongsToMany(CustomerOrder::class);
    }

    public function offers()
    {
        return $this->belongsToMany(Offer::class);
    }
    public function productImages()
    {
        return $this->belongsToMany(ProductImage::class);
    }
    public function addons()
    {
        return $this->belongsToMany(Addon::class);
    }
    public function weights()
    {
        return $this->belongsToMany(Weight::class);
    }
}

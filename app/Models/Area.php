<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Area extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    // protected $attributes = [
    //     'delivery_price' => 0,
    // ];

    public function cities()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }

    public function lines()
    {
        return $this->hasMany(DeliveryLine::class);
    }
}

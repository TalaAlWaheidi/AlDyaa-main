<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offer extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = ['start_date' => 'date','end_date' => 'date'];

    public function sourceProduct()
    {
        return $this->belongsTo(Product::class);
    }
    public function targetProduct()
    {
        return $this->belongsTo(Product::class);
    }
}

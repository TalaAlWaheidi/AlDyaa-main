<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeliveryLine extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public function arealins()
    {
        return $this->belongsTo(Area::class, 'area_id', 'id');
    }

    public function lines()
    {
        return $this->hasMany(Line::class);
    }
}

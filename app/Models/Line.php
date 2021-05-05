<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Line extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public function delierylines()
    {
        return $this->belongsTo(DeliveryLine::class, 'deliveryline_id', 'id');
    }
}

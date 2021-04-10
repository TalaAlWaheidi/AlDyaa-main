<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Advertisement extends Model
{
    use HasFactory, SoftDeletes;
    public static function boot()
    {
        parent::boot();

        parent::creating(function($model){
            info('Some message here.');
        });

        parent::created(function($model){
            info('Some message here.');
        });

        parent::updating(function($model){
            info('Some message here.');
        });

        parent::updated(function($model){
            info('Some message here.');
        });

    }
    protected $casts = ['from_date' => 'date','to_date' => 'date'];
}

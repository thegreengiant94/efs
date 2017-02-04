<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Investment extends Model
{
    protected $fillable=[
        'customer_id',
        'name',
        'category',
        'description',
        'acquired_vale',
        'acquired_date',
        'recent_value',
        'recent_date',

    ];

    public function customer() {
        return $this->belongsTo('App\Customer');
    }
}


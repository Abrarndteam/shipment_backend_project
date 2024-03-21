<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cod extends Model
{
    use HasFactory;

    protected $table = 'cods';

    public $timestamps = true;


    protected $fillable = [
        'name',
        'business_name',
        'business_address',
        'other_field',
        'return_address',
        'receiver_name',
        'receiver_address',
        'product_price',
        'total_price',
        'shipping_charges',
        'receiver_contact',
        // 'user_id',
    ];
}

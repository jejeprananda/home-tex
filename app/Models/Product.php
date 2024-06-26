<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'tb_product';

    protected $fillable = [
        'name',
        'category',
        'price',
        'discount',
        'stock',
        'img',
        'description',
        'rating'
    ];

    protected $casts = [
        'img' => 'array',
    ];
}

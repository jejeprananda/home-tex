<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'tb_product';

    protected $fillable = [
        'user_id',
        'prodct_id',
        'quantity'
    ];
}

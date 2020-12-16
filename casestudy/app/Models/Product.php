<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';

    function category() {
        return $this->belongsTo(Category::class);
    }

    function orders() {
        return $this->belongsToMany(Order::class,'order_detail','product_id','order_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'id';

    function customer() {
        return $this->belongsTo(Customer::class);
    }

    function products() {
        return $this->belongsToMany(Product::class,'order_detail','orders_id','product_id')->withPivot('quantity','priceEach');
    }
}

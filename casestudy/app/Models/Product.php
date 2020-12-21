<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = [
        'product_name',
        'description',
        'stock',
        'view',
        'priceEach',
        'slug',
        'size',
        'image1',
        'image2',
        'category_id',
    ];

    function category() {
        return $this->belongsTo(Category::class);
    }

    function image() {
        return $this->belongsTo(Image::class);
    }

    function orders() {
        return $this->belongsToMany(Order::class,'order_detail','product_id','order_id');
    }

    public function getProductImage() {
        return '/storage/products/' .ltrim($this->image1, '/public/products/');
    }

    public function getProductImage2() {
        return '/storage/products/' .ltrim($this->image2, '/public/products/');
    }
    public function getProductImage3() {
        return '/storage/products/' .ltrim($this->image3, '/public/products/');
    }
    public function getProductImage4() {
        return '/storage/products/' .ltrim($this->image4, '/public/products/');
    }

    public $timestamps = false;
}

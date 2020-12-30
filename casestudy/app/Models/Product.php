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
        return $this->belongsToMany(Order::class,'order_detail','product_id','order_id')->withPivot('quantity','priceEach');
    }

    public function getProductImage() {
        return "https://quangvoc8.s3.amazonaws.com/".$this->image1;
    }

    public function getProductImage2() {
        return "https://quangvoc8.s3.amazonaws.com/".$this->image2;
    }
    public function getProductImage3() {
        return "https://quangvoc8.s3.amazonaws.com/".$this->image3;
    }
    public function getProductImage4() {
        return "https://quangvoc8.s3.amazonaws.com/".$this->image4;
    }

    public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $primaryKey = 'id';

    function category() {
        return $this->belongsTo(Category::class);
    }

    function getCategoryName() {
        return $this->category()->first()->name;
    }
}

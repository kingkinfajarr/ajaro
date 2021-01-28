<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'purchase_price',
        'sale_price', 'stock', 'category_id', 'id'
    ];

    public function categories() {
        return $this->belongsTo(Category::class, 'category_id');
    }
}

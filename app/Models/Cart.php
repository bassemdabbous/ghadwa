<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';

    protected $fillable = [
        'user_id',
        'product_id',
        'qty'
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }

}

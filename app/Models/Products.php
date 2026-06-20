<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'price',
        'status',
    ];


    public function orderItems()
    {
        return $this->hasMany(OrderItems::class, 'product_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    protected $table = 'orders';

    protected $fillable = [
        'customer_name',
        'customer_email',
        'status',
        'total_price',
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItems::class, 'order_id');
    }
}

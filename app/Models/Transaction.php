<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $primarykey = 'id';

    public function shop_carts(){
        return $this->belongsTo(ShopCart::class, 'order_id');
    }

    public function products(){
        return $this->hasOne(Transaction::class, 'product_id');
    }
}

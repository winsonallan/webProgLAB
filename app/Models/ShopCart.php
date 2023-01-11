<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopCart extends Model
{
    use HasFactory;
    protected $table = 'shop_carts';
    protected $primarykey = 'id';

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }
}

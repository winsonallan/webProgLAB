<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    use HasFactory;
    protected $table = 'user_types';
    protected $primarykey = 'id';

    public function users(){
        return $this->hasMany(User::class);
    }
}

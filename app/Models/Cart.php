<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function Food()
    {
        return $this->hasMany(Food::class);
    }

    public function User()
    {
        return $this->hasMany(User::class);
    } 
}
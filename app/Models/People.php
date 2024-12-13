<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Wishlist;

class People extends Model
{
    protected $fillable = ['person_name', 'email'];

    public function wishlists(){
        return $this->hasMany(wishlist::class);
    }
}

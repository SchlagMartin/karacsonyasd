<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Gift_type;
use app\Models\Wishlist;
class Gift extends Model
{
    protected $fillable = ['gift_name', 'price','gift_type_id'];

    public function gift_types(){
        return $this->hasMany(Gift_type::class);
    }
    public function wishlists(){
        return $this->belongsToMany(Wishlist::class);
    }
}

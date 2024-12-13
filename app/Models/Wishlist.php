<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\People;
use app\Models\Gift;

class Wishlist extends Model
{
    protected $fillable = ['person_id','wishlist_name'];

    public function peoples(){
        return $this->belongsTo(People::class);
    }
    public function Gift(){
        return $this->belongsToMany(Gift::class);
    }
}

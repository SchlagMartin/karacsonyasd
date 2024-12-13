<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Gift;
class Gift_type extends Model
{
    protected $fillable = ['type'];

    public function gifts(){
        return $this->belongsTo(Gift::class);
    }

}

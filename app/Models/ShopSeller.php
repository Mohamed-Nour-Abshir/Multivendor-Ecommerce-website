<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopSeller extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'description',
    ];

    public function owner(){
        return $this->belongsTo(User::class,'user_id');
    }
}

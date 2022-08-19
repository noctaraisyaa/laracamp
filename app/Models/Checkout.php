<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Checkout extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public function user(){
        return $this->hasOne(User::class, 'users_id', 'id');
    }

    public function camps(){
        return $this->belongsTo(Camps::class, 'camps_id', 'id');
    }


  
}

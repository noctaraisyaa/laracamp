<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Camps extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public function benefit(){
        return $this->hasMany(CampBenefit::class, 'camps_id', 'id');
    }

    public function checkout(){
        return $this->hasMany(Checkout::class, 'camps_id', 'id');
    }

    public function getIsRegisteredAttribute(){
        if(!Auth::check()){
            return false;
        }
        return Checkout::whereCampsId($this->id)->whereUsersId(Auth::id())->exists();
    }
}

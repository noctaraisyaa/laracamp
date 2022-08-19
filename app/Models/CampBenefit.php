<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampBenefit extends Model
{
    use HasFactory;
    public function camp(){
        return $this->hasOne(Camps::class, 'camps_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prescription extends Model
{
    use HasFactory;

    protected $appends = ['prescriptions'];

    public function getPrescriptionsAttribute(): string
    {
        if($this->prescription !== Null) {
            return asset('uploads/prescription/'.$this->prescription);
        }else{
            return asset('uploads/no-image.jpg');
        }
    }
}

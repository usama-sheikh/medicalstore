<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nursingfacilities extends Model
{
    use HasFactory;

    protected $appends = ['thumbnail'];

    public function getThumbnailAttribute(): string
    {
        if($this->facility_Image !== Null) {
            return asset('uploads/facility/'.$this->facility_Image);
        }else{
            return asset('uploads/no-image.jpg');
        }
    }
}

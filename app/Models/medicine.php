<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $Medicine_Image
 */
class medicine extends Model
{
    use HasFactory;

    protected $appends = ['thumbnail'];

    public function getThumbnailAttribute(): string
    {
        if($this->Medicine_Image !== Null) {
            return asset('uploads/medicines/'.$this->Medicine_Image);
        }else{
            return asset('uploads/no-image.jpg');
        }
    }
}

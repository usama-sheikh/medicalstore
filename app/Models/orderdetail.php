<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderdetail extends Model
{
    use HasFactory;

    protected $appends = ['medicine','nursing'];

    public function medicine(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(medicine::class, 'medicine_id');
    }
    public function nursing(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(nursingfacilities::class, 'nursing_id');
    }
}

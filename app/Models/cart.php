<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id','medicine_id','nursing_id'
    ];

    /*protected $appends = ['medicine','nursing'];*/

    public function medicine(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(medicine::class, 'medicine_id');
    }
    public function nursing(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(nursingfacilities::class, 'nursing_id');
    }
}

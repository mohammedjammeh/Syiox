<?php

namespace App\Models;

use App\Enums\ScaleStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tracking extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'weight',
        'scale_id',
    ];

    public function scale()
    {
        return $this->belongsTo(Scale::class);
    }
}

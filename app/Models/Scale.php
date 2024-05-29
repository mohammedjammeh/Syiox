<?php

namespace App\Models;

use App\Enums\ScaleStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Scale extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'external_id',
        'max_weight',
        'description',
        'status',
    ];

    protected $casts = [
        'status' => ScaleStatus::class,
    ];

    public function trackings()
    {
        return $this->hasMany(Tracking::class);
    }
}

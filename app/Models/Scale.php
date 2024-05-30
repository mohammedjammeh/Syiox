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

    protected $appends = ['leftover'];

    public function trackings()
    {
        return $this->hasMany(Tracking::class);
    }

    public function getLeftoverAttribute()
    {
        $latestTrackingWeight = floatval(optional($this->trackings->last())->weight);
        $maxWeight = floatval($this->max_weight);
        $leftover = $latestTrackingWeight / $maxWeight;

        return number_format($leftover, 2, '.', '');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $table = 'training';

    protected $fillable = [
        'name',
        'user_id',
        'distance',
        'duration',
        'pace',
        'total_calories',
        'steps',
        'avg_pace',
        'max_pace',
        'elevation_gain',
        'avg_heart_rate',
        'max_heart_rate',
        'avg_cadence',
        'max_cadence',
        'vo2_max',
        'source',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

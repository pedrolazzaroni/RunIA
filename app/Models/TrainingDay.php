<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingDay extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'training_id',
        'day_of_week',
        'session',
    ];
    protected $casts = [
        'user_id' => 'integer',
        'training_id' => 'integer',
    ];

    public function training()
    {
        return $this->belongsTo(Training::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

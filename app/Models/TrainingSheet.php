<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingSheet extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'training_id',
        'response_id',
    ];
    protected $casts = [
        'user_id' => 'integer',
        'training_id' => 'integer',
        'response_id' => 'integer',
    ];

    public function training()
    {
        return $this->belongsTo(Training::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function response()
    {
        return $this->belongsTo(Response::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'training_id',
        'response',
    ];
    protected $casts = [
        'user_id' => 'integer',
        'training_id' => 'integer',
    ];
}

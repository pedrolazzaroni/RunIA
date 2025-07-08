<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $table = 'training';

    protected $fillable = [
        'name',
        'user_id',
        'description',
        'type',
        'content',
    ];
}

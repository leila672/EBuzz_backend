<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'id','emergency_id',
    ];

    public function emergency()
    {
        return $this->belongsTo(Emergency::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'user_id',
        'job_title',
        'company',
        'address',
        'start',
        'end',
        'key_responsibilities',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

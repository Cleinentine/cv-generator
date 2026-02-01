<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'workshop',
        'address',
        'certificate',
        'start',
        'end',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

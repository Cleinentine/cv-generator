<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $fillable = [
        'user_id',
        'facebook',
        'linkedin',
        'github',
        'portfolio',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

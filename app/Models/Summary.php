<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    protected $fillable = [
        'user_id',
        'summary',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}

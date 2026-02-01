<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Affiliation extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'position',
        'start',
        'end',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

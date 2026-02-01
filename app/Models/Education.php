<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'user_id',
        'degree',
        'institution',
        'start',
        'graduation',
        'gpa',
        'coursework',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

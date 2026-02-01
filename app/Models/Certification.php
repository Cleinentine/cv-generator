<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $fillable = [
        'city_id',
        'country_id',
        'user_id',
        'title',
        'workshop',
        'certificate',
        'start',
        'end',
    ];

    public function city()
    {
        return $this->hasOne(City::class);
    }

    public function country()
    {
        return $this->hasOne(Country::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

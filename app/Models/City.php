<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function achievements()
    {
        return $this->hasMany(Achievement::class);
    }

    public function certifications()
    {
        return $this->hasMany(Certification::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function works()
    {
        return $this->hasMany(Work::class);
    }
}

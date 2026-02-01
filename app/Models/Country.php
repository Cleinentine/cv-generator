<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function cities()
    {
        return $this->hasMany(City::class);
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

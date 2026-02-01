<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'city_id',
        'country_id',
        'user_id',
        'job_title',
        'company_name',
        'start',
        'end',
        'key_responsibilities',
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

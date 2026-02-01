<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'profile_picture',
        'first_name',
        'middle_name',
        'last_name',
        'address',
        'email',
        'phone_number',
        'password',
        'is_admin',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'is_admin',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function achievements()
    {
        return $this->hasMany(Achievement::class);
    }

    public function affiliations()
    {
        return $this->hasOne(Affiliation::class);
    }

    public function certifications()
    {
        return $this->hasMany(Certification::class);
    }

    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    public function hobbies()
    {
        return $this->hasMany(Hobby::class);
    }

    public function languages()
    {
        return $this->hasMany(Language::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function references()
    {
        return $this->hasMany(Reference::class);
    }

    public function signature()
    {
        return $this->hasOne(Signature::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function socials()
    {
        return $this->hasMany(Social::class);
    }

    public function summary()
    {
        return $this->hasOne(Summary::class);
    }

    public function works()
    {
        return $this->hasMany(Work::class);
    }
}

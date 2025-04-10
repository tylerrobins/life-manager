<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Health\Height;
use App\Models\Health\Weight;
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
        'name',
        'email',
        'password',
        'profile_picture',
        'home_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
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

    public function home()
    {
        return $this->belongsTo(Home::class);
    }

    public function weights()
    {
        return $this->hasMany(Weight::class);
    }

    public function heights()
    {
        return $this->hasMany(Height::class);
    }

    public function latestWeight()
    {
        return $this->hasOne(Weight::class)->latestOfMany();
    }

    public function latestHeight()
    {
        return $this->hasOne(Height::class)->latestOfMany();
    }
}

<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    // public function getColor()
    // {
    //     return $this->hasOne(Color::class, 'id', 'color_id');
    // }
    public function personalInfo()
    {
        return $this->hasOne(PersonalInfo::class, 'user_id', 'id');
    }
    public function fatherInfo()
    {
        return $this->hasOne(FatherInfo::class, 'user_id', 'id');
    }
    public function motherInfo()
    {
        return $this->hasOne(MotherInfo::class, 'user_id', 'id');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'name',
        'email',
        'username',
        'phone',
        'gender',
        'birthday',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

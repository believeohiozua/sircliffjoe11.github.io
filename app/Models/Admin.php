<?php 

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Plank\Mediable\Mediable;

class Admin extends Authenticatable
{
    use Notifiable;
    use Mediable;
    
    protected $guard = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'access', 'title', 'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $attributes = [
        'access' => 1,
    ];
    
    public function getAccessAttribute($attribute) {
        return $this->accessLevels() [$attribute];
    }
    
    public function accessLevels(){
        return [
            '1' => 'Super Admin',
            '2' => 'Admin',
        ];
    }
}
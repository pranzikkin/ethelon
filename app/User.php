<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    
    protected $primaryKey = 'user_id';
    protected $fillable = [

    'user_id', 'name', 'email', 'password', 'role', 'api_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'api_token' 
    ];

    public function getRole()
    {
        return $this->role;
    }
    
    public function foundation()
    {
        return $this->hasOne('App\Foundation', 'user_id', 'user_id');
    }

}

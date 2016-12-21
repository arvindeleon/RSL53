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
    protected $fillable = [
        'name', 'email', 'password', 'type', 'active', 'first_time',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'active' => 'bollean',
        'first_time' => 'boolean',
    ];

    public function checkRole()
    {
        return $this->type;
    }
    
    public function isActive()
    {
        return $this->active;
    }
 
    public function isFirst()
    {
        return $this->first_time;
    }
       
}

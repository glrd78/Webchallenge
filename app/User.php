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
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function skills(){

        return $this->belongsToMany('App\Skill', 'users_has_skills','id_user', 'id_skill');
    }

    public function posts(){
        return $this->hasMany('App\Post', 'id_author');
    }

    public function designs(){
        return $this->hasMany('App\Design', 'id_author');
    }
}

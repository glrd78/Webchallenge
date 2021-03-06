<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    public function posts(){
        return $this->hasMany('App\Post', 'id_category');
    }

    public function designs(){
        return $this->hasMany('App\Design', 'id_category');
    }
}

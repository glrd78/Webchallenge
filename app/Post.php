<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function tags(){
        return $this->belongsToMany('App\Tag', 'posts_has_tags','id_post', 'id_tag');
    }

}

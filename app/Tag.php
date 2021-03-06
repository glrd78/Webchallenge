<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    public function posts(){
        return $this->belongsToMany('App\Post', 'posts_has_tags', 'id_tag','id_post');
    }

    public function designs(){
        return $this->belongsToMany('App\Design', 'designs_has_tags','id_tag','id_design');
    }
}

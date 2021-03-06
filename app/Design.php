<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    protected $fillable = ['title', 'content', 'level_design', 'slug', 'state', 'id_author', 'id_category'];

    public function tags(){
        return $this->belongsToMany('App\Tag', 'designs_has_tags', 'id_design','id_tag');
    }

    public function category(){
        return $this->belongsTo('App\Category','id_category');
    }

    public function author(){
        return $this->belongsTo('App\User', 'id_author');
    }
}

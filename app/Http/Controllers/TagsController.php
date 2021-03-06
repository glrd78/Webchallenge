<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{

    public function getPostsByTags($tag){
        $section = "posts";
        $items = Tag::where('name', $tag)->with('posts')->firstOrFail()->posts;
        return view('.app.statics.tags', compact('items', 'tag','section'));
    }

    public function getDesignsByTags($tag){
        $section = "designs";
        $items = Tag::where('name', $tag)->with('designs')->firstOrFail()->designs;
        return view('.app.statics.tags', compact('items', 'tag','section'));
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function createPost($name, $text){
        $post = new self();
        $post->name = $name;
        $post->text = $text;
        $post->save();
    }
}
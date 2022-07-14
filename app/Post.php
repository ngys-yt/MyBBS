<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    use SoftDeletes;


    public function user(){
        return $this->belongsTo('App\User');
    }


    public function createPost($text){
        if (Auth::check()) {
            $post = new self();
            $post->user_id = Auth::id();
            $post->name = Auth::user()->name;
            $post->text = $text;
            $post->save();
        }else{
            $post = new self();
            $post->name = 'ゲスト';
            $post->text = $text;
            $post->save();
        }
    }

    public function updatePost($newText, $id){
        Post::where('id', $id)->update(['text' => $newText]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Facades\App\Post;

class MybbsController extends Controller
{
    // topページを読み込んだ時にDB内のデータを表示する
    public function top(){

        $posts = DB::table('posts')->orderBy('created_at', 'desc')->paginate(10);

        return view('top', compact('posts'));

    }
    
    // 投稿されたらDBに新しくデータ追加してtopページを読み込む
    public function store(Request $request){
        
        $name = $request->name;
        $text = $request->text;

        Post::createPost($name, $text);

        return redirect()->route('top');
    }
}

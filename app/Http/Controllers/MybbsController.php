<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Facades\App\Post;
use Facades\App\User;

class MybbsController extends Controller
{
    // topページを読み込んだ時にDB内のデータを表示する
    public function top(){
        $posts = DB::table('posts')->whereNull('deleted_at')->orderBy('created_at', 'desc')->paginate(10);

        return view('top', compact('posts'));
    }
    
    // 投稿されたらDBに新しくデータ追加してtopページを読み込む
    public function store(Request $request){
        $request->validate([
            'text' => 'required|max:500',
        ]);
        $text = $request->text;
        Post::createPost($text);

        return redirect()->route('top');
    }

    // マイページ表示
    public function mypage(){
        $posts = Auth::user()->posts->sortByDesc('created_at');

        return view('mypage', compact('posts'));
    }

    // 投稿削除
    public function destroy($id){
        Post::find($id)->delete();

        return redirect()->route('mypage');
    }

    // 投稿編集
    public function edit($id){
        $post = DB::table('posts')->where('id', $id)->first();

        return view('edit', compact('post'));
    }

    public function updatePost(Request $request, $id){
        $newText = $request->text;
        Post::updatePost($newText, $id);

        return redirect()->route('mypage');
    }

}

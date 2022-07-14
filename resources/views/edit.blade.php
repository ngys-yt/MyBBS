@extends('layouts.mybbs')

@section('content')
    <div class="container mt-5">
            <!-- input name -->
            <div>
                <label for="name">名前</label>
                <input type="text" class="form-control" placeholder="{{ Auth::user()->name }}" readonly>
            </div>
        <form action="{{ route('store') }}" method="post">
        @csrf
            <!-- textarea text -->
            <div class="form-group">
                <label for="text">投稿内容（500文字以内）</label>
                <textarea name="text" class="form-control @error('text') is-invalid @enderror" id="text" placeholder="投稿内容を入力してください" rows="6">{{ $post->text }}</textarea>
            </div>
            <!-- text error message -->
            @error('text')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <!-- button -->
            <div class="d-flex justify-content-center">
                <a href="{{ route('mypage') }}" class="btn btn-primary text-white mr-5">戻る</a>
                <button class="btn btn-primary" type="submit">編集する</button>
            </div>
        </form>
    </div>
@endsection
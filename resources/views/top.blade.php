@extends('layouts.mybbs')

@section('content')
    <div class="container">
        <!-- DB posts -->
        <div>
            @forelse ($posts as $post)
                <!-- name / time -->
                <div class="d-flex flex-row bg-secondary text-white align-items-center mt-1">
                    <div class="mr-5 ml-2">{{ $post->name }}</div>
                    <div>{{ $post->created_at }}</div>
                </div>
                <!-- text -->
                <div class="bg-light text-dark border border-secondary">
                    <div class="m-2">{!! nl2br($post->text) !!}</div>
                </div>
            @empty
                <div class="d-flex justify-content-center">投稿はまだありません</div>
            @endforelse
        </div>
        <!-- pagination -->
        <div class="d-flex justify-content-center mt-3">
            {{ $posts->links() }}
        </div>
        <!-- button -->
        <div class="d-flex justify-content-center m-4">
            @guest
                <a href="{{ route('welcome') }}" class="btn btn-primary text-white mr-5">戻る</a>
            @else
                <a class="btn btn-primary text-white mr-5" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a href="{{ route('mypage') }}" class="btn btn-primary text-white mr-5">マイページ</a>
            @endguest
            <a href="{{ route('create_post') }}" class="btn btn-primary text-white">投稿</a>
        </div>
    </div>
@endsection
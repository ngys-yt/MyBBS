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
                    <a href="{{ route('destroy', ['id'=>$post->id]) }}" class="btn btn-danger text-white">削除</a>
                    <a href="{{ route('edit', ['id'=>$post->id]) }}" class="btn btn-info text-white">編集</a>
                </div>
            @empty
                <div class="d-flex justify-content-center">投稿はまだありません</div>
            @endforelse
        </div>
        
        <!-- pagination -->
        {{-- <div class="d-flex justify-content-center mt-3">
            {{ $posts->links() }}
        </div> --}}

        <!-- button -->
        <div class="d-flex justify-content-center m-4">
            <a href="{{ route('top') }}" class="btn btn-primary text-white mr-5">戻る</a>
        </div>
    </div>
@endsection
<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <title>MyBBS</title>
    </head>
    <header>
        <h1 class="d-flex justify-content-center bg-info p-3">
            <a href="{{ route('top') }}" class="text-decoration-none text-white">MyBBS</a>
        </h1>
    </header>
    <body>
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
            <!-- create_post button -->
            <div class="d-flex justify-content-center m-4">
                <a href="{{ route('create_post') }}" class="btn btn-primary text-white">投稿</a>
            </div>
        </div>
        <!-- bootstrap script -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

        <script src="{{ asset('/js/main.js') }}"></script>

    </body>
</html>
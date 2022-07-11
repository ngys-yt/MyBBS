<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <title>MyBBS</title>
    </head>
    <header>
        <h1 class="d-flex justify-content-center bg-info p-3 text-white">MyBBS</h1>
    </header>
    <body>
        <div class="container mt-5">
            <form action="{{ route('store') }}" method="post" class="needs-validation" novalidate>
                @csrf
                <div class="form-group">
                    <label for="name">名前（15文字以内）</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="名前を入力してください" required>
                    <div class="invalid-feedback">
                        入力してください
                    </div>
                </div>
                <div class="form-group">
                    <label for="text">投稿内容（500文字以内）</label>
                    <textarea name="text" class="form-control" id="validationCustom02" placeholder="投稿内容を入力してください" rows="6" required></textarea>
                    <div class="invalid-feedback">
                        入力してください
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary" type="submit">投稿する</button>
                </div>
            </form>
        </div>
        <!-- bootstrap script -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        
        <script src="{{ asset('/js/main.js') }}"></script>

    </body>
</html>
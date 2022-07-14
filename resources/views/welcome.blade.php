@extends('layouts.mybbs')

@section('content')
    <div class="container">
        <div class="card text-center mt-5">
            <div class="card-header">
                <h4>ゲスト</h4>
            </div>
            <div class="card-body">
                <p class="card-text">ゲストとして利用する</p>
                <a href="{{ route('top') }}" class="btn btn-primary">ゲスト</a>
            </div>
        </div>
        <div class="card text-center mt-5">
            <div class="card-header">
                <h4>Login</h4>
            </div>
            <div class="card-body">
                <p class="card-text">登録済みの方はこちらから</p>
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            </div>
        </div>
        <div class="card text-center mt-5">
            <div class="card-header">
                <h4>会員登録</h4>
            </div>
            <div class="card-body">
                <p class="card-text">新たに登録する</p>
                <a href="{{ route('register') }}" class="btn btn-primary">会員登録</a>
            </div>
        </div>
    </div>
@endsection
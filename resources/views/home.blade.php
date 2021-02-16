@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h1>Welcome !!</h1><hr>
                        <h2>このページからLaravelで作成した<br>CRUDアプリをご覧になれます。</h2>
                    
                </div>
                <div class="card-body">
                    <a href="{{ route('blogs') }}">一覧へ</a>
                    <br>
                    <a href="{{ route('create') }}">投稿画面へ</a>
                    <br>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

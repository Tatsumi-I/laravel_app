@extends('layouts.app')
@section('title', 'detail')

@section('content')
@if(session('message'))
<div class="alert alert-danger">
  <p>
    {{ session('message') }}
  </p>
</div>
@endif
<h1>投稿画像一覧</h1>
<h2>
  <a href="{{ ('image_form') }}">画像を投稿する</a>
</h2>
@foreach ($up_imgs as $up_img)
  <div>
    <a href="storage/{{ $up_img }}">
      <img src="storage/{{ $up_img }}" alt="" width="50px">
    </a>
  </div>
  @endforeach
{{-- <form method="GET" action="{{ route('edit', $blog->id) }}">
  <button class="done">編集する</button>
</form> --}}
@endsection

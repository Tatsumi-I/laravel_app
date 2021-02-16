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
<div class="">
  <h1>detail</h1>
</div>
<br><hr><br>
<h2>No. {{ $blog->id }} , {{ $blog->name }} の詳細</h2>
<br><br><br>
<p>{{ $blog->content }}</p>
<br><br><br>
<p>{{ $blog->updated_at }}</p>
<br><br><br>
<form method="GET" action="{{ route('edit', $blog->id) }}">
  <button class="done">編集する</button>
</form>
@endsection
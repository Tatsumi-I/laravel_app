@extends('layout')
@section('title', 'detail')

@section('content01')
<div class="">
  <p>detail</p>
</div>
@endsection

@section('content02')
<h1>it's detail</h1>
<p>{{ $blog->id }}</p>
<p>{{ $blog->name }}</p>
<p>{{ $blog->content }}</p>
<p>{{ $blog->updated_at }}</p>
<form method="GET" action="{{ route('edit', $blog->id) }}">
  <button>編集する</button>
</form>
@endsection
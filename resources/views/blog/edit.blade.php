@extends('layouts.app')
@section('title', '編集画面')
@section ('content')

<div class="form">
  @if(session('message'))
  <div class="alert alert-danger">
    <p>
      {{ session('message') }}
    </p>
  </div>
  @endif
  <form method="POST" action="{{ route('update') }}" onSubmit="return checkSubmit()">
    @csrf
    <h1>No. {{ $blog->id }} の編集</h1>
    <input type="hidden" name="id" value="{{ $blog->id }}">
    <label for="">name</label>
    <input
      name="name"
      id="name"
      type="text"
      value="{{ $blog->name }}">
      @if ($errors->has('name'))
        {{ $errors->first('name') }}
      @endif
      <br>
    <textarea
        name="content"
        id="content" 
        cols="30" 
        rows="10"
        value="">{{ $blog->content }}
        @if ($errors->has('content'))
        {{ $errors->first('content') }}
        @endif
      </textarea>
      <br>
      {{-- @foreach ($tags as $key => $tag)
      <div class="form-check">
        <label for="tag{{ $key }}">
        <input type="checkbox"
          name="tags[]"
          value="{{ $key }}"
          id="tag{{ $key }}"
          @if(isset($blog->tags) && $blog->tags->contains($key))
          checked
          @endif
        >
        {{ $tag }}</label>
      </div>
      @endforeach --}}
    <button class="done">更新</button>
  </form>
</div>
<script>
  function checkSubmit(){
    if (window.confirm('更新します')){
        return true;
      } else {
        return false;
    }
  }
</script>
@endsection
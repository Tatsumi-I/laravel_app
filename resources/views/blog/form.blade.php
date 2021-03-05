@extends('layouts.app')
@section('title', '投稿画面')
@section ('content')
<div class="form">
  <form method="POST" 
        action="{{ route('store') }}" 
        onSubmit="return checkSubmit()" 
        enctype="multipart/form-data"
  >
    @csrf
    <input type="file" name="image_file">
    <label for="">name</label>
    <input name="name" id="name" type="text">
      @if ($errors->has('name'))
        {{ $errors->first('name') }}
      @endif
      <br>
    <textarea name="content" id="content" cols="30" rows="10"></textarea>
      @if ($errors->has('content'))
        {{ $errors->first('content') }}
      @endif
      <br>
      {{-- @foreach ($tags as $key => $tag)
      <div class="form-check">
        <input type="checkbox"
          name="tags[]"
          value="{{ $key }}"
          id="tag{{ $key }}"
          @if(isset($blog->tags) && $blog->tags->contains($key))
          checked
          @endif
        >
        <label for="tag{{ $key }}">{{ $tag }}</label>
      </div>
      @endforeach --}}
      <button class="done">done</button>
  </form>
</div>
<script>
  function checkSubmit(){
    if (window.confirm('送信します')){
        return true;
      } else {
        return false;
    }
  }
</script>
@endsection
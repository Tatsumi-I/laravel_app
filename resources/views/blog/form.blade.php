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
    
    <label for="">＜画像をアップする＞</label>
    <input type="file" name="img_file">
    <br> 
    <label for="">＜name＞</label>
    <input name="name" id="name" type="text">
      @if ($errors->has('name'))
        {{ $errors->first('name') }}
      @endif
    <br>

    <label for="">＜text＞</label>
    <textarea name="content" id="content" cols="30" rows="5"></textarea>
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

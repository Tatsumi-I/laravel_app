@extends('layout')
@section('title', '編集画面')
@section ('content')
<div class="form">
  <form method="POST" action="{{ route('update') }}" onSubmit="return checkSubmit()">
    @csrf
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
    </textarea>
      @if ($errors->has('content'))
        {{ $errors->first('content') }}
      @endif
      <br>
    <button>更新</button>
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
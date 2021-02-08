@extends('layout')
@section('title', '投稿画面')
@section ('content')
<div class="form">
  <form method="POST" action="{{ route('store') }}" onSubmit="return checkSubmit()">
    @csrf
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
    <button>done</button>
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
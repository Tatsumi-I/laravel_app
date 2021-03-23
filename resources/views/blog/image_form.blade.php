@extends('layouts.app')
@section('title', '投稿画面')
@section ('content')
<div class="form">
  <form method="POST"
        action="{{ route('image_store') }}"
        onSubmit="return checkSubmit()"
        enctype="multipart/form-data"
  >
    @csrf
    <label for="">＜画像をアップする＞</label>
    <input type="file" name="img_file">
    <br>

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

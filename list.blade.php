@extends('layout')
@section('title', 'list_table')

@section('content01')
<div class="">
  <p>he</p>
</div>
@endsection

@section('content02')
<h1>it's list_table</h1>
@if(session('err'))
@endif
<table border="1">
  <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>時刻</th>
        <th>編集する</th>
        <th>削除する</th>
      </tr>
  </thead>
  <tbody>
    @foreach($blogs as $blog)
    <tr>
      <td>{{ $blog->id }}</td>
      <td><a href="/blog/{{ $blog->id }}">{{ $blog->name }}</a></td>
      <td>{{ $blog->updated_at }}</td>
      <td><a href="/blog/edit/{{ $blog->id }}"><button >編集する</button></a></td>
      <form method="POST" action="{{ route('delete', $blog->id) }}" onSubmit="return checkDelete()">
      @csrf
        <td><button>削除</button></td>
      </form>
    </tr>
    @endforeach
  </tbody>
</table>
<script>
  function checkDelete(){
    if (window.confirm('削除しますか？')){
        return true;
      } else {
        return false;
    }
  }
</script>
@endsection
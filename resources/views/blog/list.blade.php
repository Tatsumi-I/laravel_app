@extends('layouts.app')
@section('title', 'list_table')

@section('content')
<h1>it's list_table</h1>
  @if(session('alert'))
    <div class="alert alert-danger">
      <p>
        {{ session('alert') }}
      </p>
    </div>
  @endif
  @if(session('done'))
  <div class="alert-success">
      <p>
        {{ session('done') }}
      </p>
    </div>
  @endif
  <table class="table">
  <thead>
      <tr>
        <th>No.</th>
        <th>name</th>
        {{-- <th>Tag</th> --}}
        <th>作成日</th>
        <th>詳細</th>
        <th>編集する</th>
        <th>削除する</th>
      </tr>
  </thead>
  <tbody>
        @foreach($blogs as $blog)
          <tr>
          <td>{{ $blog->id }}</td>
          <td>{{ $blog->name }}</td>
          
          {{-- <td>{{ $blog->created_at }}</td> --}}
          <td>{{ $blog->updated_at }}</td>
          
          <td><a href="/blog/{{ $blog->id }}" class="page-link">詳細</a></td>
          <td><a href="/blog/edit/{{ $blog->id }}" class="page-link">編集する</a></td>
          <td>
          <form method="POST" action="{{ route('delete', $blog->id ) }}" onSubmit="return checkDelete()" class="page-link">
            @csrf
              <button>削除</button>
            </form>
          </td>
          </tr>
        @endforeach
  </tbody>
</table>
{{ $blogs->links() }}
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
extends('layouts.app')
@section('title', 'list_table')

@section('content')
<h1>DEMOデータ一覧</h1>
<br>
<p>・ご自由にお試しください</p>
<p>・データは削除して構いません</p>
<br><br>
<p>＊お知らせ＊</p>
<p><b>テキストのCRUDは機能しています。<br>現在画像アップ機能については追加調整中です…</b></p>

<h2>

  <a href="{{ ('image') }}">画像一覧pageへ</a>
</h2>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">タグ一覧</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <a href="" class="btn btn-primary">新規登録</a>
                        </div>
                        @include('components.alert')
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>タイトル</th>
                                <th>アクション</th>
                            </tr>
                            </thead>
                            @foreach($tags as $tag)
                                <tr>
                                    <td class="align-middle">{{ $tag->id }}</td>
                                    <td class="align-middle">{{ $tag->title }}</td>
                                    <td class="align-middle">
                                        <div class="d-flex">
                                            <a href="{{ route('tags.show', $tag) }}" class="btn btn-secondary btn-sm">表示</a>
                                            <a href="{{ route('tags.edit', $tag) }}" class="btn btn-secondary btn-sm ml-1">編集</a>
                                            <form method="POST" action="{{ route('tags.destroy', $tag) }}">
                                                @method('DELETE')
                                                @csrf
                                                <button onclick="return confirm('本当に削除しますか？')" class="btn btn-secondary btn-sm ml-1">削除</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {{ $tags->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

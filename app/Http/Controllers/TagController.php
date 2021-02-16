<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Blog;
use App\Http\Requests\TagRequest;

class TagController extends Controller
{
    /**
     * ブログ一覧表示
     * @return view
     */
    public function index(Tag $tags)
    {
        $tags = Tag::orderBy('id', 'desc')->paginate(10);
        return view ('tag.list', ['tags' => $tags]);
    }
    /**
     * ブログ詳細表示
     * @param int $id
     * @return view
     */
    public function showDetail(Tag $tag)
    {
        // $tag = Tag::find($id);
        // if(is_null($tag)){
        //     return redirect()
        //     ->route('tag_list')
        //     ->with('message', 'No_data...');
        // }
        return view ('tag.detail', ['tag' => $tag]);
    }
    /**
     * 登録画面の表示
     * @return view
     */
    public function showCreate(Tag $tags)
    {
        return view('tag.form', compact('tags'));
    }
    
    /**
     * 登録
     * @return view
     */
    public function exeStore(TagRequest $request)
    {
        $tag_inputs = $request->all();
        try{
            Tag::create($tag_inputs);
            // \DB::commit();
        } catch (\Throwable $e) {
            // \DB::rollback();
            abort(500);

        }
        return redirect()
        ->route('tag_list')
        ->with('done' , 'タグを登録しました');

    }
    /**
     * ブログ編集
     * @param int $id
     * @return view
     */
    public function showEdit(Request $request, Tag $tag)
    {
        $tags = new Tag();
        // dd($tag);
        
        // if(is_null($id)){
            // return redirect()
        //     ->route('tag_list')
        //     ->with('alert', 'No_data...');
        // };
        // $tag->blogs()->sync($request->blogs);
        
        return view ('tag.edit', compact('tag', 'tags'));
    }
    /**
     * ブログ更新
     * @param int $id
     * @return view
     */
    public function exeUpdate(Request $request, Tag $tag)
    {

        $inputs = $request->all();

        // dd($inputs['id']);
        // $tag->blogs()->sync($request->blogs);
        $tag->fill([
            'title' => $inputs['title']
        ]);
        $tag->save();
        return redirect()
        ->route('tag_list', $tag)
        ->with('done', ' 更新しました');
    }
    /**
     * 削除
     * @param int $id
     * @return view
     */
    public function exeDelete(Request $request,Tag $tag)
    {
        $id = $request->id;
        if (empty($id)) {
            return redirect()
            ->route('tag_list')
            ->with('alert', 'No_data...');
        }
        try{
            $tag->blogs()->sync($request->tags);
            Tag::destroy($id);

        } catch (\Throwable $e) {
            abort(500);
        }
        return redirect()
        ->route('tag_list')
        ->with('done',  'ID : ' . $id . ' を削除しました');
    }
}
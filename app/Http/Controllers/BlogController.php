<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Tag;
use App\Http\Requests\BlogRequest;


class BlogController extends Controller
{
    /**
    //  * アップロード
    //  * @return view
    //  */
    // public function fileUp(Request $request)
    // {
    //     Storage::disk('local')
    //     ->putfile('files', $request->file('file'));
    //     return redirect()->route('blog.list');

    // }

    /**
     * ブログ一覧表示
     * @return view
     */
    public function showList(Blog $blogs)
    {

        $blogs = Blog::orderBy('id', 'desc')->paginate(10);
        return view ('blog.list', ['blogs' => $blogs]);
    }
    
    /**
     * ブログ詳細表示
     * @param int $id
     * @return view
     */
    public function showDetail($id)
    {
        $blog = Blog::find($id);
        if(is_null($blog)){
            return redirect()
            ->route('blogs')
            ->with('message', 'No_data...');
        }
        return view ('blog.detail', ['blog' => $blog]);
    }
    /**
     * 登録画面の表示
     * @return view
     */
    public function showCreate()
    {
        $tags = Tag::pluck('title', 'id')->toArray();
        return view('blog.form',  compact('tags'));
    }
    
    /**
     * 登録
     * @return view
     */
    public function exeStore(BlogRequest $request)
    {
        // Storage::disk('local')
        // ->put('files', $request->file('file'));
        // dd($put);
        // return redirect()->route('blog.list');

        $inputs = $request->all();
        try{
            $blog = Blog::create($inputs);
            $blog->tags()->sync($request->tags);
            // \DB::commit();
        } catch (\Throwable $e) {
            // \DB::rollback();
            abort(500);

        }

        return redirect()
        ->route('blogs')
        ->with('done' , '登録しました');

    }
    /**
     * ブログ編集
     * @param int $id
     * @return view
     */
    public function showEdit($id)
    {
        $blog = Blog::find($id);
        
        if(is_null($blog)){
            return redirect()
            ->route('blogs')
            ->with('alert', 'No_data...');
        }
        $tags = Tag::pluck('title', 'id')->toArray();
        return view ('blog.edit', compact('blog', 'tags'));
    }
    /**
     * ブログ更新
     * @param int $id
     * @return view
     */
    public function exeUpdate(BlogRequest $request)
    {
        $inputs = $request->all();
        $blog = Blog::find($inputs['id']);
// dd($blog);
        $id = $blog->id;
        $blog->tags()->sync($request->tags);
        $blog->fill([
            'name' => $inputs['name'],
            'content' => $inputs['content']
        ]);
        $blog->save();
        if(is_null('$blog')){

        }
        // return view ('blog.detail', ['blog' => $blog]);
        return redirect()
        ->route('blogs')
        ->with('done',  'No : ' . $id . ' 更新しました');
    }
    /**
     * 削除
     * @param int $id
     * @return view
     */
    public function exeDelete($id)
    {

        if (empty($id)) {
            return redirect()
            ->route('blogs')
            ->with('alert', 'No_data...');
        }
        try{
            Blog::destroy($id);
        } catch (\Throwable $e) {
            abort(500);
        }

        // $blog->tags()->detach();
        return redirect()
        ->route('blogs')
        ->with('done',  'No : ' . $id . ' を削除しました');
    }
}
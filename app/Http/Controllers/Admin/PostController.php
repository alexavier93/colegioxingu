<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{

    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = $this->post->paginate(10);

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * validação do post 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
     * 
     */
    public function store(Request $request)
    {

        

        if(!empty($request->description)){

            $data = $request->all();

            $slug = Str::slug($request->title, '-');
            $data['slug'] = $slug;
    
            $dir = 'blog/';
            $img_width = '550';
            $img_height = '550';
    
            if (!Storage::disk('public')->exists($dir)) {
                Storage::disk('public')->makeDirectory($dir, 0755, true, true);
            }
    
            $image = $request->file('image');
    
            $upload = uploadImageThumbnail($image, $dir, $img_width, $img_height);
    
            $data['image'] = $upload['image'];
            $data['thumbnail'] = $upload['thumbnail'];
    
            $this->post->create($data);
    
            flash('Registro criado com sucesso!')->success();
            return redirect()->route('admin.posts.index');

        }else{
            flash('Texto é obrigatório')->error();
            return redirect()->route('admin.posts.create');
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
    {
        $post = $this->post->findOrFail($post);
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post)
    {
        $data = $request->all();

        $post = $this->post->find($post);

        $slug = Str::slug($request->title, '-');
        $data['slug'] = $slug;

        $dir = 'blog/';
        $img_width = '550';
        $img_height = '550';

        if ($request->hasFile('image')) {

            if (Storage::disk('public')->exists($post->image)) {
                Storage::disk('public')->delete($post->image);
                Storage::disk('public')->delete($post->thumbnail);
            }

            $image = $request->file('image');

            $upload = uploadImageThumbnail($image, $dir, $img_width, $img_height);

            $data['image'] = $upload['image'];
            $data['thumbnail'] = $upload['thumbnail'];
        }

        $post->update($data);

        flash('Registro atualizado com sucesso!')->success();
        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;

        $post = $this->post->find($id);

        if ($post->delete() == TRUE) {

            if (Storage::disk('public')->exists($post->image)) {
                Storage::disk('public')->delete($post->image);
                Storage::disk('public')->delete($post->thumbnail);
            }

            flash('Registro removido com sucesso!')->success();
            return redirect()->route('admin.posts.index');
        }
    }
}

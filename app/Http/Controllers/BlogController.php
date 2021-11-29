<?php

namespace App\Http\Controllers;
use App\Models\Post;

class BlogController extends Controller
{

    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        
        $posts = $this->post->paginate(6);

        return view('blog.index', compact('posts'));
    }


    public function post($post)
    {

        $post = $this->post->where('slug', $post)->firstOrFail();

        $posts = $this->post->orderBy('id', 'desc')->limit(10)->get();

        return view('blog.post', compact('post', 'posts'));
    }


}

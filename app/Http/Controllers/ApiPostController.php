<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ApiPostController extends Controller{

    public function index(){
        $posts = Post::all();
        return response()->json($posts);
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->categoria_id = $request->categoria_id;
        $post->title = $request->title;
        $post->content = $request->content; 
        $post->author = $request->author;        

        $post->save();
    }

    public function update(Request $request)
    {
        $post = Post::findOrFail($request->id);
        $post->categoria_id = $request->categoria_id;
        $post->title = $request->title;
        $post->content = $request->content; 
        $post->author = $request->author;      

        $post->save();

        return $post;
    }

    public function destroy(Request $request)
    {
        $post = Post::destroy($request->id);
        return $post;
    }

}
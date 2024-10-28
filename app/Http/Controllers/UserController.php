<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Posts;
use App\Http\Controllers\PostController;
use App\Models\Social;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $categories= Category::all();
        $posts = Posts::where('status','published')->take(8)->get();
        return view('User.index',compact('categories','posts'));
    }
    public function blog(){
        $posts = Posts::take(1)->get();
        $post = Posts::all();
        return view('User.blog',compact('posts','post'));
    }
    public function singleArticle($slug) {
    
    $post = Posts::with('writer')->where('slug', $slug)->firstOrFail();
    $socials= Social::where('writer_id',$post->writer_id)->get();

    $postUrl = route('posts.show', ['slug' => $post->slug]);

    $totalComments = $post->comments()->count();
    $previousPost = Posts::where('slug', '<', $slug)->orderBy('slug', 'desc')->first();
    $nextPost = Posts::where('slug', '>', $slug)->orderBy('slug')->first();
    return view('User.article', compact('post','totalComments','previousPost','nextPost','socials','postUrl'));
}

}

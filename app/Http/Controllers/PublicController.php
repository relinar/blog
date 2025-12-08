<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Post;
use Illuminate\Http\Request;
=======
use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
>>>>>>> upstream/main
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PublicController extends Controller
{
<<<<<<< HEAD
    public function index(){

        $posts = Post::simplePaginate(16);
=======
    public function index() {
        $posts = Post::with('user')->withCount('comments', 'likes')->latest()->simplePaginate(16);
>>>>>>> upstream/main
        return view('welcome', compact('posts'));
    }

    public function post(Post $post) {
<<<<<<< HEAD
        return view('post', compact('post'));
    }
=======
        $post->loadCount('comments', 'likes')->load(['comments' => function ($query) {
            $query->latest()->with('user');
        }]);
        return view('post', compact('post'));
    }

    public function like(Post $post) {
        $like = $post->likes()->where('user_id', Auth::user()->id)->first();
        if($like) {
            $like->delete();
        } else {
            $like = new Like();
            $like->post()->associate($post);
            $like->user()->associate(Auth::user());
            $like->save();
        }
        return redirect()->back();
    }
>>>>>>> upstream/main
}

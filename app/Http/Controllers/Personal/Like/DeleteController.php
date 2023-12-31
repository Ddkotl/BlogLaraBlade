<?php

namespace App\Http\Controllers\Personal\Like;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostUserLike;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function index(Post $post)
    {
        auth()->user()->likedPosts()->detach($post->id);
        return redirect()->route('personal.like.index');
    }
}

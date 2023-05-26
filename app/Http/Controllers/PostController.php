<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showPage(User $user, Blog $post)
    {
        return view('blog');
    }

    public function showPagePost()
    {
        return view('post');
    }
}

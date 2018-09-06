<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class AccessorController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        $postId = $request->get('id', 0);

        $post = Post::query()->find($postId);

        return $post->name;
    }
}

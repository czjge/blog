<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * 文章列表
     */
    public function index()
    {
        $list = Post::get();
        foreach ($list as $key => $value) {
            $list[$key]->created = $list[$key]->created_at->diffForHumans();
        }

        return $list;
    }

    /**
     * 文章详情
     */
    public function show($id)
    {
        $row = Post::findOrFail($id);

        return $row;
    }
}

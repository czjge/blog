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
        $list = Post::where("status", "=", 0)->latest()->get();
        foreach ($list as $key => $value) {
            $list[$key]->created = $list[$key]->created_at->diffForHumans();
        }

        return $list;
    }

    /**
     * 文章详情
     */
    public function detail($id)
    {
        $row = Post::findOrFail($id);

        return $row;
    }

    /**
     * 文章分类
     */
    public function category($cate_id)
    {
        $list = Post::where("status", "=", 0)->whereRaw("FIND_IN_SET(?, tag_ids)", [$cate_id])->latest()->get();
        foreach ($list as $key => $value) {
            $list[$key]->created = $list[$key]->created_at->diffForHumans();
        }

        return $list;
    }

    /**
     * 文章搜索
     */
    public function search($kwd)
    {
        $list = Post::where("status", "=", 0)->where("title", "like", "%".$kwd."%")->latest()->get();
        foreach ($list as $key => $value) {
            $list[$key]->created = $list[$key]->created_at->diffForHumans();
        }

        return $list;
    }
}

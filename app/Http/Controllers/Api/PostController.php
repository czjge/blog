<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    const PAGE_NUM = 2;

    /**
     * 文章列表
     */
    public function index($page)
    {
        $builder = Post::where("status", "=", 0)->latest()->skip(($page-1) * self::PAGE_NUM)->take(self::PAGE_NUM);
        $list = $builder->get();
        $total = ceil($builder->count() / 2);
        foreach ($list as $key => $value) {
            $list[$key]->created = $list[$key]->created_at->diffForHumans();
        }

        return [
            'total' => $total,
            'list'  => $list,
            'page'  => $page,
        ];
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
    public function category($cate_id, $page)
    {
        $builder = Post::where("status", "=", 0)->whereRaw("FIND_IN_SET(?, tag_ids)", [$cate_id])->latest()->skip(($page-1) * self::PAGE_NUM)->take(self::PAGE_NUM);
        $list = $builder->get();
        $total = ceil($builder->count() / 2);
        foreach ($list as $key => $value) {
            $list[$key]->created = $list[$key]->created_at->diffForHumans();
        }

        return [
            'total' => $total,
            'list'  => $list,
            'page'  => $page,
        ];
    }

    /**
     * 文章搜索
     */
    public function search($kwd, $page)
    {
        $builder = Post::where("status", "=", 0)->where("title", "like", "%".$kwd."%")->latest()->skip(($page-1) * self::PAGE_NUM)->take(self::PAGE_NUM);
        $list = $builder->get();
        $total = ceil($builder->count() / 2);
        foreach ($list as $key => $value) {
            $list[$key]->created = $list[$key]->created_at->diffForHumans();
        }

        return [
            'total' => $total,
            'list'  => $list,
            'page'  => $page,
        ];
    }
}

<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Models\Post;

class PostController extends AppBaseController
{
    // 测试webhook
    /**
     * 文章列表
     */
    public function index($page)
    {
        $builder = Post::normal()->latest()->skip(($page-1) * self::PAGE_NUM)->take(self::PAGE_NUM);
        $list = $builder->get();
        $total = ceil($builder->count() / self::PAGE_NUM);
        foreach ($list as $key => $value) {
            $list[$key]->created = $list[$key]->created_at->diffForHumans();
        }

        return response()->json($this->paginateRet($total, $page, $list));
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
        $builder = Post::normal()->whereRaw("FIND_IN_SET(?, tag_ids)", [$cate_id])->latest()->skip(($page-1) * self::PAGE_NUM)->take(self::PAGE_NUM);
        $list = $builder->get();
        $total = ceil($builder->count() / self::PAGE_NUM);
        foreach ($list as $key => $value) {
            $list[$key]->created = $list[$key]->created_at->diffForHumans();
        }

        return response()->json($this->paginateRet($total, $page, $list));
    }

    /**
     * 文章搜索
     */
    public function search($kwd, $page)
    {
        $builder = Post::normal()->where("title", "like", "%".$kwd."%")->latest()->latest()->skip(($page-1) * self::PAGE_NUM)->take(self::PAGE_NUM);
        $list = $builder->get();
        $total = ceil($builder->count() / self::PAGE_NUM);
        foreach ($list as $key => $value) {
            $list[$key]->created = $list[$key]->created_at->diffForHumans();
        }

        return response()->json($this->paginateRet($total, $page, $list));
    }
}

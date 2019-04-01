<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostTag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $post_tags = PostTag::all();

        return view('home', [
            "list" => $post_tags,
        ]);
    }

    public function postArticle(Request $request)
    {
        $post = $request->except(["_token"]);

        $data = [
            "title"   => $post["title"],
            "content" => $post["content"],
            "tag_ids" => array_key_exists("category", $post) ? implode(",", $post["category"]) : "",
        ];

        Post::create($data);

        return response()->redirectToRoute("home")->with("alert", "添加成功");
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $post_tags = PostTag::all();

        return view('edit', [
            "post" => $post,
            "tags" => $post_tags,
        ]);
    }

    public function postEdit(Request $request)
    {
        $post = $request->except(["_token"]);
        dd($post);

        $data = [
            "title"   => $post["title"],
            "content" => $post["content"],
            "tag_ids" => array_key_exists("category", $post) ? implode(",", $post["category"]) : "",
        ];

        Post::where('id', $data['id'])->update($data);

        return response()->redirectToRoute("home")->with("alert", "编辑成功");
    }
}

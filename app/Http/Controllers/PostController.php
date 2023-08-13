<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\PostTag;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $topTags = DB::table('post_tag')->selectRaw('tag_id, count(*) as count')->groupBy('tag_id')->orderBy('count', 'desc')->get();

        // $topTags = DB::table('post_tag')
        // ->selectRaw('tag_id')
        // ->groupBy('tag_id')
        // ->orderByRaw('COUNT(*) DESC')->take(2)
        // ->get();

        $topTags = PostTag::selectRaw('tags.name, post_tag.tag_id, count(*) as count')
        ->join('tags', 'post_tag.tag_id', '=', 'tags.id')
        ->groupBy('post_tag.tag_id', 'tags.name')
        ->orderByRaw('count DESC')->take(10)
        ->get();

        // dd($topTags);

        return view('home', [
            "title" => "Home",
            "active" => "home",
            "posts" => Post::latest()->get(),
            "topTags" => $topTags

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}

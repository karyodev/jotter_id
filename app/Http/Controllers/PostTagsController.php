<?php

namespace App\Http\Controllers;

use App\Models\Post_tags;
use App\Http\Requests\StorePost_tagsRequest;
use App\Http\Requests\UpdatePost_tagsRequest;

class PostTagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePost_tagsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePost_tagsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post_tags  $post_tags
     * @return \Illuminate\Http\Response
     */
    public function show(Post_tags $post_tags)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post_tags  $post_tags
     * @return \Illuminate\Http\Response
     */
    public function edit(Post_tags $post_tags)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePost_tagsRequest  $request
     * @param  \App\Models\Post_tags  $post_tags
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePost_tagsRequest $request, Post_tags $post_tags)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post_tags  $post_tags
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post_tags $post_tags)
    {
        //
    }
}

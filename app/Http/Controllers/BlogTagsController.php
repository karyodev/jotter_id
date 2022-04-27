<?php

namespace App\Http\Controllers;

use App\Models\Blog_tags;
use App\Http\Requests\StoreBlog_tagsRequest;
use App\Http\Requests\UpdateBlog_tagsRequest;

class BlogTagsController extends Controller
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
     * @param  \App\Http\Requests\StoreBlog_tagsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlog_tagsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog_tags  $blog_tags
     * @return \Illuminate\Http\Response
     */
    public function show(Blog_tags $blog_tags)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog_tags  $blog_tags
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog_tags $blog_tags)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlog_tagsRequest  $request
     * @param  \App\Models\Blog_tags  $blog_tags
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlog_tagsRequest $request, Blog_tags $blog_tags)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog_tags  $blog_tags
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog_tags $blog_tags)
    {
        //
    }
}

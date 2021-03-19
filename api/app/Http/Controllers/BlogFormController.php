<?php

namespace App\Http\Controllers;

use App\Models\BlogForm;
use Illuminate\Http\Request;

class BlogFormController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return BlogForm::create($request->input());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogForm  $blogForm
     * @return \Illuminate\Http\Response
     */
    public function show(BlogForm $blogForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogForm  $blogForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogForm $blogForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogForm  $blogForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogForm $blogForm)
    {
        //
    }
}

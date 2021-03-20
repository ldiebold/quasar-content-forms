<?php

namespace App\Http\Controllers;

use App\Models\NewsForm;
use Illuminate\Http\Request;

class NewsFormController extends Controller
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
        return NewsForm::create($request->input());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewsForm  $newsForm
     * @return \Illuminate\Http\Response
     */
    public function show(NewsForm $newsForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewsForm  $newsForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsForm $newsForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsForm  $newsForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsForm $newsForm)
    {
        //
    }
}

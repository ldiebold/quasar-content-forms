<?php

namespace App\Http\Controllers;

use App\Models\ShowcaseForm;
use Illuminate\Http\Request;

class ShowcaseFormController extends Controller
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
        return ShowcaseForm::create($request->input());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShowcaseForm  $showcaseForm
     * @return \Illuminate\Http\Response
     */
    public function show(ShowcaseForm $showcaseForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShowcaseForm  $showcaseForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShowcaseForm $showcaseForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShowcaseForm  $showcaseForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShowcaseForm $showcaseForm)
    {
        //
    }
}

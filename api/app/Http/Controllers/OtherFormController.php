<?php

namespace App\Http\Controllers;

use App\Models\OtherForm;
use Illuminate\Http\Request;

class OtherFormController extends Controller
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
        return OtherForm::create($request->input());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OtherForm  $otherForm
     * @return \Illuminate\Http\Response
     */
    public function show(OtherForm $otherForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OtherForm  $otherForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OtherForm $otherForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OtherForm  $otherForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(OtherForm $otherForm)
    {
        //
    }
}

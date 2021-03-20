<?php

namespace App\Http\Controllers;

use App\Models\NewExtensionForm;
use Illuminate\Http\Request;

class NewExtensionFormController extends Controller
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
        return NewExtensionForm::create($request->input());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewExtensionForm  $newExtensionForm
     * @return \Illuminate\Http\Response
     */
    public function show(NewExtensionForm $newExtensionForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewExtensionForm  $newExtensionForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewExtensionForm $newExtensionForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewExtensionForm  $newExtensionForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewExtensionForm $newExtensionForm)
    {
        //
    }
}

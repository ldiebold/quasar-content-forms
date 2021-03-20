<?php

namespace App\Http\Controllers;

use App\Models\ExtensionFeatureForm;
use Illuminate\Http\Request;

class ExtensionFeatureFormController extends Controller
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
        return ExtensionFeatureForm::create($request->input());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExtensionFeatureForm  $extensionFeatureForm
     * @return \Illuminate\Http\Response
     */
    public function show(ExtensionFeatureForm $extensionFeatureForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExtensionFeatureForm  $extensionFeatureForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExtensionFeatureForm $extensionFeatureForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExtensionFeatureForm  $extensionFeatureForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExtensionFeatureForm $extensionFeatureForm)
    {
        //
    }
}

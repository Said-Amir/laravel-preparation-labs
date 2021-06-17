<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features = Feature::paginate(2);
        return view("backoffice.feature.all", compact("features"));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Feature $feature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        return view("backoffice.feature.edit", compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feature $feature)
    {
        
        $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);

        $feature->title = $request->title;
        $feature->description = $request->description;
        $feature->text = $request->text;
        $feature->fact1 = $request->fact1;
        $feature->fact2 = $request->fact2;
        $feature->fact3 = $request->fact3;

        if ($request->file("image") !== null) {
            $feature->image = $request->file("image")->hashName();
            $request->file("image")->storePublicly("img", "public");
        }

        $feature->updated_at = now();
        
        $feature->save();

        return redirect()->route('feature.index', compact('feature'))->with("message", "La section feature a bien été modifiée.");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutFact;
use Illuminate\Http\Request;

class AboutFactController extends Controller
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
        return view("backoffice.aboutfact.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $aboutFact = new AboutFact();

        $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);

        $aboutFact->icon = $request->icon;
        $aboutFact->title = $request->title;
        $aboutFact->description = $request->description;
        $aboutFact->about_id = 1;
        $aboutFact->updated_at = now();
        
        $aboutFact->save();

        return redirect()->route('about.index', compact('aboutFact'))->with("message", "$aboutFact->title a bien été ajouté.");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutFact  $aboutFact
     * @return \Illuminate\Http\Response
     */
    public function show(AboutFact $aboutFact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutFact  $aboutFact
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutFact $aboutFact)
    {

        return view("backoffice.aboutfact.edit", compact("aboutFact"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutFact  $aboutFact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutFact $aboutFact)
    {

        $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);

        $aboutFact->icon = $request->icon;
        $aboutFact->title = $request->title;
        $aboutFact->description = $request->description;
        $aboutFact->about_id = 1;
        $aboutFact->updated_at = now();
        
        $aboutFact->save();

        return redirect()->route('about.index', compact('aboutFact'))->with("message", "$aboutFact->title a bien été modifié.");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutFact  $aboutFact
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutFact $aboutFact)
    {
        $aboutFact->delete();
        return redirect()->back();
    }
}
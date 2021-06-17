<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutFact;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        $facts = AboutFact::all();
        return view("backoffice.about.all", compact("about", "facts"));
    }

    public function edit(About $about)
    {
        return view("backoffice.about.edit", compact("about"));
    }

    public function update(About $about, Request $request)
    {
        $request->validate([
            'title'=>'required',
            'subtitle'=>'required',
            'button'=>'required'
        ]);

        $about->title = $request->title;
        $about->subtitle = $request->subtitle;
        $about->button = $request->button;

        $about->updated_at = now();
        
        $about->save();

        return redirect()->route('about.index', compact('about'))->with("message", "La section about a bien été modifiée.");

    }
}
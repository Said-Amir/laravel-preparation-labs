<?php

namespace App\Http\Controllers;

use App\Models\Titre;
use Illuminate\Http\Request;

class TitreController extends Controller
{
    public function index()
    {
        $titres = Titre::paginate(3);
        return view("backoffice.titre.all", compact("titres"));
    }

    public function edit(Titre $titre)
    {
        return view("backoffice.titre.edit", compact('titre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Titre $titre)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required'
        ]);

        $titre->title = $request->title;
        $titre->description = $request->description;

        $titre->updated_at = now();
        
        $titre->save();

        return redirect()->route('titre.index', compact('titre'))->with("message", "La titre a bien été modifiée.");

    }

}
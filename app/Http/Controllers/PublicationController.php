<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $publications = Publication::all();

        return view('publication.index', [
            'publications' => $publications,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("publication.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $publication = new Publication();
        $publication->title = $request->input("title");
        $publication->description = $request->input("description");
        $publication->content = $request->input("content");
        $publication->save();
        return redirect()->route("publication.create")->with('message', 'Publicação Criada Com Sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $publication = Publication::findOrFail($id); // busca pelo registro no banco pelo id

        return view('publication.show', [
            'publication' => $publication, 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $publication = Publication::findOrFail($id);
        $publication->delete();
        return redirect()->route("publication.index");
    }
}

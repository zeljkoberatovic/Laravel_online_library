<?php

namespace App\Http\Controllers;

use App\Models\Authors;
use App\Http\Requests\RulesAuthors;
use Illuminate\Http\Request;


class AutoriController extends Controller
{
      

    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $authors = Authors::query()->orderBy('name_surname', 'asc')->get();
        return view('autori.index', ['authors' => $authors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RulesAuthors $request)
    {
        $data = new Authors();  
        $validated = $request->validated();   
        $data = Authors::create($validated);
        $request->session()->flash('msg_success', 'Novi autor je uspješno dodan!');  
        return redirect()->route('autori.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view( 'autori.show', ['data' => Authors::findOrFail($id)] );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view( 'autori.edit', ['author' => Authors::findOrFail($id) ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RulesAuthors $request, string $id)
    {
        $item = Authors::findOrFail($id);
        $validated = $request->validated();
        $item->fill($validated);
        $item->save();
        $request->session()->flash('msg_success', 'Izmjena je uspješno završena!');  
        return redirect()->route('autori.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item_deleted = Authors::findOrFail($id);
        $item_deleted->delete();
        session()->flash('msg_success', "Stavka je uspješno obrisana!");
        return redirect()->route('autori.index' );
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Critter;

class CrittersController extends Controller
{
    /**
     * Display a listing of the critters.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $critters = Critter::all();
        return view('critters.index', compact('critters'));
    }

    /**
     * Show the form for creating a new critter.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('critters.register');
    }

    /**
     * Store a newly created critter in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'species' => 'required|string|max:255',
        'type_1' => 'required|string|max:255',
        'type_2' => 'nullable|string|max:255',
        'type_3' => 'nullable|string|max:255',
        'description' => 'required|string',
        'habitat' => 'required|string|max:255',
        'encounter_difficulty' => 'required|in:common,rare,ultra rare,legendary',
        'sound' => 'required|string|max:255',
    ]);

    $critter = new Critter();
    $critter->name = $request->input('name');
    $critter->species = $request->input('species');
    $critter->type_1 = $request->input('type_1');
    $critter->type_2 = $request->input('type_2');
    $critter->type_3 = $request->input('type_3');
    $critter->description = $request->input('description');
    $critter->habitat = $request->input('habitat');
    $critter->encounter_difficulty = $request->input('encounter_difficulty');
    $critter->sound = $request->input('sound');
    
    // Asignar el user_id del usuario autenticado (si estás usando autenticación)
    $critter->user_id = auth()->id(); // Esto asume que tienes autenticación configurada
    
    $critter->save();

    return redirect()->route('critters.index');
}

    /**
     * Display the specified critter.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $critter = Critter::findOrFail($id);
        return view('critters.show', compact('critter'));
    }

    /**
     * Show the form for editing the specified critter.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $critter = Critter::findOrFail($id);
        return view('critters.edit', compact('critter'));
    }

    /**
     * Update the specified critter in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'species' => 'required|string|max:255',
            'age' => 'required|integer',
        ]);

        $critter = Critter::findOrFail($id);
        $critter->name = $request->input('name');
        $critter->species = $request->input('species');
        $critter->age = $request->input('age');
        $critter->save();

        return redirect()->route('critters.show', ['id' => $critter->id]);
    }

    /**
     * Remove the specified critter from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $critter = Critter::findOrFail($id);
        $critter->delete();

        return redirect()->route('critters.index');
    }
}

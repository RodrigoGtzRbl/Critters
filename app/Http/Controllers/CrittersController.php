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
            'image' => 'required|file|mimes:png|max:1024', //10MB
            'sound' => 'required|file|mimes:mp3|max:4028', //2MB
        ]);

        if ($request->hasFile('image')) {
            $imageFile = $request->file('image'); //get the sound
            $imageFileName = $imageFile->getClientOriginalName(); //Get files' name

            $imageFile->move(public_path('media/images'), $imageFileName); //save the image
        }

        if ($request->hasFile('sound')) {
            $soundFile = $request->file('sound'); //get the sound
            $soundFileName = $soundFile->getClientOriginalName(); //Get files' name

            $soundFile->move(public_path('media/sounds'), $soundFileName); //save the sound
        }

        $critter = new Critter();

        $critter->name = $request->input('name');
        $critter->species = $request->input('species');
        $critter->type_1 = $request->input('type_1');
        $critter->type_2 = $request->input('type_2');
        $critter->type_3 = $request->input('type_3');
        $critter->description = $request->input('description');
        $critter->region = $request->input('habitat');
        $critter->encounter_difficulty = $request->input('encounter_difficulty');
        $critter->image = $imageFileName ?? null;
        $critter->sound = $soundFileName ?? null;
        $critter->user_id = auth()->id();

        $critter->save();

        //Redirect to show method the new Critter
        return redirect()->route('critters.show', ['id' => $critter->id]);
    }

    /**
     * Display the specified critter.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $critters = Critter::where('id', $id)->get();

        return view('crittopedia', compact('critters'));
    }

    /**
     * Display all the critters.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        $critters = Critter::get();

        return view('crittopedia', compact('critters'));
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

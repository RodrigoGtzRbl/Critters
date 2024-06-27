<?php

namespace App\Http\Controllers;

use App\Models\Critter;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CritterRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CritterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $critters = Critter::paginate();

        return view('critter.index', compact('critters'))
            ->with('i', ($request->input('page', 1) - 1) * $critters->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $critter = new Critter();

        return view('critter.create', compact('critter'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CritterRequest $request): RedirectResponse
    {
        Critter::create($request->validated());

        return Redirect::route('critters.index')
            ->with('success', 'Critter created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $critter = Critter::find($id);

        return view('critter.show', compact('critter'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $critter = Critter::find($id);

        return view('critter.edit', compact('critter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CritterRequest $request, Critter $critter): RedirectResponse
    {
        $critter->update($request->validated());

        return Redirect::route('critters.index')
            ->with('success', 'Critter updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Critter::find($id)->delete();

        return Redirect::route('critters.index')
            ->with('success', 'Critter deleted successfully');
    }
}

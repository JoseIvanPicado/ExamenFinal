<?php

namespace App\Http\Controllers;

use App\Models\Boss;
use App\Http\Requests\BossRequest;

class BossController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bosses = Boss::latest()->paginate(5);
        return view('bosses.index', compact('bosses'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bosses = new Boss();

        return view('bosses.create', compact('bosses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BossRequest $request)
    {
        Boss::create($request->validated());

        return redirect()->route('bosses.index')
            ->with('success', 'Jefe creado con exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $bosses = Boss::find($id);

        return view('bosses.show', compact('bosses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $bosses = Boss::find($id);

        return view('bosses.edit', compact('bosses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BossRequest $request, int $id)
    {
        $bosses = Boss::find($id);
        $bosses->update($request->validated());

        return redirect()->route('bosses.index')
            ->with('updated', 'Jefe actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $bosses = Boss::find($id);
        $bosses->delete();

        return redirect()->route('bosses.index')
            ->with('deleted', 'Jefe eliminado con exito');
    }
}

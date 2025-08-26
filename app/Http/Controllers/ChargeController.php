<?php

namespace App\Http\Controllers;

use App\Models\Charge;
use App\Http\Requests\ChargeRequest;

class ChargeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $charges = Charge::latest()->paginate(5);
        return view('charges.index', compact('charges'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $charges = new Charge();

        return view('charges.create', compact('charges'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ChargeRequest $request)
    {
        Charge::create($request->validated());

        return redirect()->route('charges.index')
            ->with('succes', 'Cargo creado con exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $charges = Charge::find($id);

        if (!$charges) {
            return redirect()->route('charges.index')->with('error', 'Cargo no encontrado.');
        }

        return view('charges.show', compact('charges'));
    }

    /**
     * Show esta diferente, si causa error, corregir.
     */
    public function edit(int $id)
    {
        $charges = Charge::find($id);

        if (!$charges) {
            return redirect()->route('charges.index')->with('error', 'Cargo no encontrado.');
        }

        return view('charges.edit', compact('charges'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ChargeRequest $request, int $id)
    {
        $charges = Charge::find($id);

        if (!$charges) {
            return redirect()->route('charges.index')->with('error', 'Cargo no encontrado.');
        }

        $charges->update($request->validated());

        return redirect()->route('charges.index')
            ->with('updated', 'Cargo actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $charges = Charge::find($id);

        if (!$charges) {
            return redirect()->route('charges.index')->with('error', 'Cargo no encontrado.');
        }

        $charges->delete();

        return redirect()->route('charges.index')
            ->with('deleted', 'Cargo eliminado con exito');
    }
}

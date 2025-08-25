<?php

namespace App\Http\Controllers;

use App\Models\Charge;
use Illuminate\Http\Request;

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

        return view('charges.create', compact('charge'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Charge::create($request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]));
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
    public function edit(string $id)
    {
        $charges = Charge::find($id);

        if (!$charges) {
            return redirect()->route('charges.index')->with('error', 'Cargo no encontrado.');
        }

        return view('charges.edit', compact('charge'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $charges = Charge::find($id);

        if (!$charges) {
            return redirect()->route('charges.index')->with('error', 'Cargo no encontrado.');
        }

        $charges->update($request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]));

        return redirect()->route('charges.index')
            ->with('updated', 'Cargo actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
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

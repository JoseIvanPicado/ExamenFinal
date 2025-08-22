<?php

namespace App\Http\Controllers;

use App\Models\Departament;
use App\Models\Employee;
use App\Models\Boss;
use App\Models\Charge;
use App\Http\Requests\DepartamentRequest;

class DepartamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departaments = Departament::latest()->paginate(5);
        return view('departaments.index', compact('departaments'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departament = new Departament();

        $employees = Employee::all();
        $bosses = Boss::all();
        $charges = Charge::all();

        return view('departaments.create', compact('departament', 'employees', 'bosses', 'charges'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DepartamentRequest $request)
    {
        Departament::create($request->validated());

        return redirect()->route('departaments.index')
            ->with('success', 'Departamento creado con exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $departaments = Departament::find($id);

        return view('departaments.show', compact('departaments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $departaments = Departament::find($id);

        $employees = Employee::all();
        $bosses = Boss::all();
        $charges = Charge::all();

        return view('departaments.edit', compact('departaments', 'employees', 'bosses', 'charges'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DepartamentRequest $request, int $id)
    {
        $departaments = Departament::find($id);
        $departaments->update($request->validated());

        return redirect()->route('departaments.index')
            ->with('updated', 'Departamento actualizado con exito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $departaments = Departament::find($id);
        $departaments->delete();

        return redirect()->route('departaments.index')
            ->with('deleted', 'Departamento eliminado con exito.');
    }
}

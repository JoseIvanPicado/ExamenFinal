<?php

namespace App\Http\Controllers;

use App\Models\Horary;
use App\Models\Departament;
use App\Http\Requests\HoraryRequest;
use App\Models\Employee;
use App\Models\Boss;

class HoraryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $horaries = Horary::latest()->paginate(5);
        return view('horaries.index', compact('horaries'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $horaries = new Horary();

        $departaments = Departament::all();
        $employees = Employee::all();
        $bosses = Boss::all();

        return view('horaries.create', compact('horaries', 'departaments', 'employees', 'bosses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HoraryRequest $request)
    {
        Horary::create($request->validated());

        return redirect()->route('horaries.index')
            ->with('success', 'Horario creado con exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $horaries = Horary::find($id);

        return view('horaries.show', compact('horaries'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $horaries = Horary::find($id);

        $departaments = Departament::all();
        $employees = Employee::all();
        $bosses = Boss::all();

        return view('horaries.edit', compact('horaries', 'departaments', 'employees', 'bosses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HoraryRequest $request, int $id)
    {
        $horaries = Horary::find($id);
        $horaries->update($request->validated());

        return redirect()->route('horaries.index')
            ->with('update', 'Horario actualizado con exito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $horaries = Horary::find($id);
        $horaries->delete();

        return redirect()->route('horaries.index')
            ->with('deleted', 'Horario eliminado con exito.');
    }
}

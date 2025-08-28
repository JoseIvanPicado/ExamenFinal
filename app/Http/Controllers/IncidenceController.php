<?php

namespace App\Http\Controllers;

use App\Models\Incidence;
use App\Models\Employee;
use App\Models\Departament;
use App\Models\Charge;
use App\Models\Boss;
use App\Http\Requests\IncidenceRequest;

use App\Exports\IncidencesExport;
use Maatwebsite\Excel\Facades\Excel;

class IncidenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incidences = Incidence::with('employee', 'departament', 'charge', 'boss')->paginate(5);
        return view('incidences.index', compact('incidences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $incidences = new Incidence();

        $employees = Employee::all();
        $departaments = Departament::all();
        $charges = Charge::all();

        $bosses = Boss::all();

        return view('incidences.create', compact('incidences', 'employees', 'departaments', 'charges', 'bosses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(IncidenceRequest $request)
    {
        Incidence::create($request->validated());

        return redirect()->route('incidences.index')
            ->with('success', 'Incidencia creada con exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $incidences = Incidence::find($id);

        if (!$incidences) {
            return redirect()->route('incidences.index')->with('error', 'Incidencia no encontrada.');
        }

        return view('incidences.show', compact('incidences'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $incidences = Incidence::find($id);

        if (!$incidences) {
            return redirect()->route('incidences.index')->with('error', 'Incidencia no encontrada.');
        }

        $employees = Employee::all();
        $departaments = Departament::all();
        $charges = Charge::all();
        $bosses = Boss::all();

        return view('incidences.edit', compact('incidences', 'employees', 'departaments', 'charges', 'bosses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(IncidenceRequest $request, int $id)
    {
        $incidences = Incidence::find($id);

        if (!$incidences) {
            return redirect()->route('incidences.index')->with('error', 'Incidencia no encontrada.');
        }


        $incidences->update($request->validated());

        return redirect()->route('incidences.index')
        ->with('updated', 'Incidencia actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $incidences = Incidence::find($id);

        if (!$incidences) {
            return redirect()->route('incidences.index')->with('error', 'Incidencia no encontrada.');
        }

        $incidences->delete();

        return redirect()->route('incidences.index')
            ->with('deleted', 'Incidencia eliminada con éxito.');
    }

    public function exportExcel()
    {
        return Excel::download(new IncidencesExport, 'incidences.xlsx');
    }
}

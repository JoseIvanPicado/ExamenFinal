<?php

namespace App\Http\Controllers;

use App\Models\Attendance_registration;
use App\Models\Employee;
use App\Models\Charge;
use App\Models\Incidence;
use App\Http\Requests\Attendance_registrationRequest;

class Attendance_registrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attendance_registrarions = Attendance_registration::latest()->paginate(5);
        return view('attendance_registrarions.index', compact('attendance_registrarions'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $attendance_registrarions = new Attendance_registration();

        $employees = Employee::all();
        $charges = Charge::all();
        $incidences = Incidence::all();

        return view('attendance_registrarions.create', compact('attendance_registrarions', 'employees', 'charges', 'incidences'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Attendance_registrationRequest $request)
    {
        Attendance_registration::create($request->validated());

        return redirect()->route('attendance_registrarions.index')
            ->with('success', 'Registro de asistencia creado con exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $attendance_registrarions = Attendance_registration::find($id);

        return view('attendance_registrarions.show', compact('attendance_registrarions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $attendance_registrarions = Attendance_registration::find($id);

        $employees = Employee::all();
        $charges = Charge::all();
        $incidences = Incidence::all();

        return view('attendance_registrarions.edit', compact('attendance_registrarions', 'employees', 'charges', 'incidences'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Attendance_registrationRequest $request, int $id)
    {
        $attendance_registrarions = Attendance_registration::find($id);
        $attendance_registrarions->update($request->validated());

        return redirect()->route('attendance_registrarions.index')
            ->with('update', 'Registro de asistencia actualizado con exito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $attendance_registrarions = Attendance_registration::find($id);
        $attendance_registrarions->delete();

        return redirect()->route('attendance_registrarions.index')
            ->with('deleted', 'Registro de asistencia eliminado con exito.');
    }
}

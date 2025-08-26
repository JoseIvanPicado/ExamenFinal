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
        $attendance_registrations = Attendance_registration::with ('employees', 'charges', 'incidences')->paginate(5);
        return view('attendance_registrations.index', compact('attendance_registrations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $attendance_registrations = new Attendance_registration();

        $employees = Employee::all();
        $charges = Charge::all();
        $incidences = Incidence::all();

        return view('attendance_registrations.create', compact('attendance_registrations', 'employees', 'charges', 'incidences'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Attendance_registrationRequest $request)
    {
        Attendance_registration::create($request->validated());

        return redirect()->route('attendance_registrations.index')
            ->with('success', 'Registro de asistencia creado con exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $attendance_registrations = Attendance_registration::find($id);

        $employees = Employee::all();
        $charges = Charge::all();
        $incidences = Incidence::all();

        return view('attendance_registrations.show', compact('attendance_registrations'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $attendance_registrations = Attendance_registration::find($id);

        $employees = Employee::all();
        $charges = Charge::all();
        $incidences = Incidence::all();

        return view('attendance_registrations.edit', compact('attendance_registrations', 'employees', 'charges', 'incidences'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Attendance_registrationRequest $request, int $id)
    {
        $attendance_registrations = Attendance_registration::find($id);
        $attendance_registrations->update($request->validated());

        return redirect()->route('attendance_registrations.index')
            ->with('update', 'Registro de asistencia actualizado con exito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $attendance_registrations = Attendance_registration::find($id);
        $attendance_registrations->delete();

        return redirect()->route('attendance_registrations.index')
            ->with('deleted', 'Registro de asistencia eliminado con exito.');
    }
}

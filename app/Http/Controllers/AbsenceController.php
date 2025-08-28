<?php

namespace App\Http\Controllers;

use App\Models\Absence;
use App\Models\Employee;
use App\Models\Boss;
use App\Http\Requests\AbsenceRequest;
use App\Models\Attendance_registration;

use App\Exports\AbsenceExport;
use Maatwebsite\Excel\Facades\Excel;

class AbsenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $absences = Absence::with('employee', 'attendance_registration', 'boss')->paginate(5);
        return view('absences.index', compact('absences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $absences = new Absence();

        $employees = Employee::all();
        $attendance_registrations = Attendance_registration::all();
        $bosses = Boss::all();

        return view('absences.create', compact('absences', 'employees', 'attendance_registrations', 'bosses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AbsenceRequest $request)
    {
        Absence::create($request->validated());

        return redirect()->route('absences.index')
            ->with('success', 'Ausencia creada con exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $absences = Absence::find($id);

        $employees = Employee::all();
        $attendance_registrations = Attendance_registration::all();
        $bosses = Boss::all();

        return view('absences.show', compact('absences', 'employees', 'attendance_registrations', 'bosses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $absences = Absence::find($id);

        $employees = Employee::all();
        $attendance_registrations = Attendance_registration::all();
        $bosses = Boss::all();

        return view('absences.edit', compact('absences', 'employees', 'attendance_registrations',  'bosses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AbsenceRequest $request, int $id)
    {
        $absences = Absence::find($id);
        $absences->update($request->validated());

        return redirect()->route('absences.index')
            ->with('updated', 'Ausencia actualizada con exito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $absences = Absence::find($id);
        $absences->delete();

        return redirect()->route('absences.index')
            ->with('delated', 'Ausencia eliminada con exito.');
    }


    public function export()
    {
        return Excel::download(new AbsenceExport, 'absences.xlsx');
    }
}

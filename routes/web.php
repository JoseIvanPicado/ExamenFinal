<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\BossController;
use App\Http\Controllers\ChargeController;
use App\Http\Controllers\Attendance_registrationController;
use App\Http\Controllers\DepartamentController;
use App\Http\Controllers\HoraryController;
use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\IncidenceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Exports\EmployeesExport;
use App\Exports\Attendance_registrationExport;
use App\Exports\AbsenceExport;
use App\Exports\IncidenceExport;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/employees/export/excel', function () {
    return Excel::download(new EmployeesExport, 'Employees.xlsx');
})->name('employees.export.excel');

Route::get('/attendances/export/excel', function () {
    return Excel::download(new Attendance_registrationExport, 'Attendance_registrations.xlsx');
})->name('attendance_registrations.export.excel');

Route::get('/absences/export/excel', function () {
    return Excel::download(new AbsenceExport, 'Absences.xlsx');
})->name('absences.export.excel');

Route::get('/incidences/export/excel', function (){
    return Excel::download(new IncidenceController, 'Incidences.xlsx');
})->name('incidences.export.excel');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::prefix('/profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/update', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    //rutas de ejemplo sin controlador con prefijo

    //rutas de posts de tipo resource
     Route::resource('/employees', EmployeeController::class);
     Route::resource('/bosses', BossController::class);
     Route::resource('/charges', ChargeController::class);
     Route::resource('attendance_registrations', Attendance_registrationController::class);
     Route::resource('departaments', DepartamentController::class);
     Route::resource('horaries', HoraryController::class);
     Route::resource('absences', AbsenceController::class);
     Route::resource('incidences', IncidenceController::class);

    // Route::resource('/categories', CategoryController::class);
    // Route::resource('/animals', AnimalController::class);
});

require __DIR__ . '/auth.php';

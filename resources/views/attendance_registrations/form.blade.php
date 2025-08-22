<h6 class="heading-small text-muted mb-4">Información del registro de asistencias</h6>

<div class="pl-lg-4">

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="creation_date">Fecha del registro
                </label>
                <input type="date" id="creation_date" name="creation_date" class="form-control form-control-alternative"
                value="{{ old('creation_date', isset($attendance_registrations->creation_date)) ? $attendance_registrations->creation_date->format(Y-m-d) : '' }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="time_in">Hora de entrada
                </label>
                <input type="time" id="time_in" name="time_in" class="form-control form-control-alternative"
                value="{{ old('time_in', isset($attendance_registrations->time_in)) ? $attendance_registrations->time_in->format(Y-m-d\TH:i) : '' }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="time_exit">Hora de salida
                </label>
                <input type="time" id="time_exit" name="time_exit" class="form-control form-control-alternative"
                value="{{ old('time_exit', isset($attendance_registrations->time_exit)) ? $attendance_registrations->time_exit->format(Y-m-d\TH:i) : '' }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="hours_worked">Horas trabajadas
                </label>
                <input type="time" id="hours_worked" name="hours_worked" class="form-control form-control-alternative"
                value="{{ old('hours_worked', isset($attendance_registrations->hours_worked)) ? $attendance_registrations->hours_worked->format(Y-m-d\TH:i) : '' }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="overtime">Horas extras
                </label>
                <input type="time" id="overtime" name="overtime" class="form-control form-control-alternative"
                value="{{ old('overtime', isset($attendance_registrations->overtime)) ? $attendance_registrations->overtime->format(Y-m-d\TH:i) : '' }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="employees_id">
                    <i class="fas fa-user-graduate"> Nombre de empleado
                </label>
                <select name="employees_id" id="employees_id" class="form-control form-control-alternative">
                    <option disabled selected>Seleccione un empleado</option>
                    @foreach ($employees as $employee)
                        <option value="{{ $employee->id}}"
                            {{ old('$employee_id', $attendance_registrations->employee_id ?? '') == $employee->id ? 'selected' : '' }}>
                            {{ $employee->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="employees_id">
                    <i class="fas fa-user-graduate"> Nombre del cargo
                </label>
                <select name="charges_id" id="charges_id" class="form-control form-control-alternative">
                    <option disabled selected>Seleccione un empleado</option>
                    @foreach ($charges_id as $charge)
                        <option value="{{ $charge->id}}"
                            {{ old('$charge_id', $attendance_registrations->charge_id ?? '') == $charge->id ? 'selected' : '' }}>
                            {{ $charge->name_charge }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="incidences_id">
                    <i class="fas fa-user-graduate"> Incidencias
                </label>
                <select name="incidences_id" id="incidences_id" class="form-control form-control-alternative">
                    <option disabled selected>Incidencias</option>
                    @foreach ($incidences_id as $incidence)
                        <option value="{{ $incidence->id}}"
                            {{ old('$incidence_id', $attendance_registrations->incidence_id ?? '') == $incidence->id ? 'selected' : '' }}>
                            {{ $incidence->type }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

</div>

    <hr class="my-4"/>

    <h6 class="heading-small text-muted mb-4">Guardar</h6>

    <div class="pl-lg-4">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i>Guardar horario
            </button>
        </div>
    </div>

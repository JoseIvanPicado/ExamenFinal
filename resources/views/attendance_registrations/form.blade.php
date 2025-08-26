<div class="pl-lg-4">

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="creation_date">Fecha de creación</label>
                <input type="date" id="creation_date" name="creation_date" class="form-control form-control-alternative"
                    placeholder="Ingresar nombre de sección"
                    value="{{ old('creation_date', $attendance_registrations->creation_date)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="time_in">Hora de entrada
                </label>
                <input type="time" id="time_in" name="time_in" class="form-control form-control-alternative"
                value="{{ old('time_in', $attendance_registrations->time_in)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="time_exit">Hora de salida
                </label>
                <input type="time" id="time_exit" name="time_exit" class="form-control form-control-alternative"
                value="{{ old('time_exit', $attendance_registrations->time_exit)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="hours_worked">Horas trabajadas
                </label>
                <input type="time" id="hours_worked" name="hours_worked" class="form-control form-control-alternative"
                value="{{ old('hours_worked', $attendance_registrations->hours_worked)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="overtime">Horas extras
                </label>
                <input type="time" id="overtime" name="overtime" class="form-control form-control-alternative"
                value="{{ old('overtime', $attendance_registrations->overtime)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="employee_id"><i class="fas fa-user-circle"></i> Trabajador</label>

                <select name="employee_id" id="employee_id" class="form-control form-control-alternative">
                    <option disabled>Seleccionar Trabajador</option>
                    @foreach ($employees as $employee)
                        <option value="{{ $employee->id }}" @selected(old('employee_id', $employee->employee_id) == $employee->id)>
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
                <label class="form-control-label" for="charge_id"><i class="fas fa-user-circle"></i> Trabajador</label>

                <select name="charge_id" id="charge_id" class="form-control form-control-alternative">
                    <option disabled>Seleccionar Cargo designado</option>
                    @foreach ($charges as $charge)
                        <option value="{{ $charge->id }}" @selected(old('charge_id', $charge->charge_id) == $charge->id)>
                            {{ $charge->name_chargues }}
                        </option>
                    @endforeach
                </select>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="incidence_id"><i class="fas fa-user-circle"></i> Incidencias</label>

                <select name="incidence_id" id="incidence_id" class="form-control form-control-alternative">
                    <option disabled>Incidencias</option>
                    @foreach ($incidences as $incidence)
                        <option value="{{ $charge->id }}" @selected(old('incidences_id', $incidence->incidence_id) == $incidence->id)>
                            {{ $incidence->status }}
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

<div class="pl-lg-4">

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
                <label class="form-control-label" for="date_in">Ingresar fecha de creacion</label>
                <input type="date" id="date_in" name="date_in" class="form-control form-control-alternative"
                    placeholder="Ingresar fecha de creacion"
                    value="{{ old('date_in', $absences->date_in)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="date_end">Ingresar fecha de la ausencia</label>
                <input type="date" id="date_end" name="date_end" class="form-control form-control-alternative"
                    placeholder="Ingresar fecha de la ausencia"
                    value="{{ old('date_end', $absences->date_end)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
               <label for="type">Tipo de ausencia</label>
               <select name="type" id="type" class="form-control">
                <option value=""disabled>Seleccione el tipo de ausencia</option>
                <option value="Enfermedad" {{ old('type', $absences->type ?? '') =='Enfermedad' ? 'selected':''}}>Justificada</option>
                <option value="Citas médicas" {{ old('type', $absences->type ?? '') =='Citas médicas' ? 'selected':''}}>Injustificada</option>
                <option value="Vacaciones" {{ old('type', $absences->type ?? '') =='Vacaciones' ? 'selected':''}}>Vacaciones</option>
                <option value="Servicio militar o jurado" {{ old('type', $absences->type ?? '') =='Servicio militar o jurado' ? 'selected':''}}>Servicio militar o jurado</option>
                <option value="Otros permisos" {{ old('type', $absences->type ?? '') =='Otros permisos' ? 'selected':''}}>Otros permisos</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="reasson">Ingresar razón de la ausencia</label>
                <input type="text" id="reasson" name="reasson" class="form-control form-control-alternative"
                    placeholder="Ingresar razón de la ausencia"
                    value="{{ old('reasson', $absences->reasson)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
               <label for="status">Estado de la ausencia</label>
               <select name="status" id="status" class="form-control">
                <option value=""disabled>Seleccione el estado de la ausencia</option>
                <option value="Justificada" {{ old('status', $absences->status ?? '') =='Justificada' ? 'selected':''}}>Justificada</option>
                <option value="Injustificada" {{ old('status', $absences->status ?? '') =='Injustificada' ? 'selected':''}}>Injustificada</option>
                </select>
            </div>
        </div>
    </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-control-label" for="attendance_registration_id"><i class="fas fa-circle"></i> Registro de asistencia</label>

                    <select name="attendance_registration_id" id="attendance_registration_id" class="form-control form-control-alternative">
                        <option disabled>Seleccionar registro de asistencia</option>
                        @foreach ($attendance_registrations as $attendance_registration)
                            <option value="{{ $attendance_registration->id }}" @selected(old('attendance_registrations_id', $attendance_registration->attendance_registration) == $attendance_registration->id)>
                                {{ $attendance_registration->hours_worked }}
                            </option>
                        @endforeach
                    </select>

                </div>
            </div>
        </div>

    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="boss_id">
                <i class="fas fa-solid fa-aligin-justify"></i> Jefe a cargo
            </label>
            <select name="boss_id" id="boss_id" class="form-control form-control-alternative">
                <option disabled selected> Seleccionar jefe a cargo</option>
                @foreach ($bosses as $boss)
                    <option value="{{ $boss->id }}"
                        {{ old('bosses_id', $absence->boss_id ?? '') == $boss->id ? 'selected' : '' }}>
                        {{ $boss->last_name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

</div>

    <hr class="my-4" />

    <h6 class="heading-small text-muted mb-4">Guardar</h6>

    <div class="pl-lg-4">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Guardar Ausencia
            </button>
        </div>
    </div>




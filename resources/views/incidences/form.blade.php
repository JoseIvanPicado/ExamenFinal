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
                <label class="form-control-label" for="departament_id"><i class="fa-solid fa-location-dot"></i>
                    Departamento</label>

                <select name="departament_id" id="departament_id" class="form-control form-control-alternative">
                    <option disabled>Seleccionar Departamento</option>
                    @foreach ($departaments as $departament)
                        <option value="{{ $departament->id }}" @selected(old('departament_id', $departament->departament_id) == $departament->id)>
                            {{ $departament->name }}
                        </option>
                    @endforeach
                </select>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="charge_id"><i class="fas fa-graduation-cap"></i> Cargo</label>

                <select name="charge_id" id="charge_id" class="form-control form-control-alternative">
                    <option disabled>Seleccionar Cargo</option>
                    @foreach ($charges as $charge)
                        <option value="{{ $charge->id }}" @selected(old('charge_id', $charge->charge_id) == $charge->id)>
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
                <label class="form-control-label" for="creation_date">Fecha de creacion de la incidencia</label>
                <input type="date" id="creation_date" name="creation_date"
                    class="form-control form-control-alternative"
                    placeholder="Ingresar fecha de creacion de la incidencia"
                    value="{{ old('creation_date', isset($incidences->creation_date)) ? $incidences->creation_date->format(y - m - d) : '' }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="type">Tipo de incidencia</label>
                <select name="type" id="type" class="form-control">
                    <option value="" disabled>Seleccione un tipo de incidencia</option>
                    <option value="Incidencias Previstas"
                        {{ old('type', $incidences->type ?? '') == 'Incidencias Previstas' ? 'selected' : '' }}>
                        Incidencias Previstas</option>
                    <option value="Incidencias Inprevistas"
                        {{ old('type', $incidences->type ?? '') == 'Incidencias Inprevistas' ? 'selected' : '' }}>
                        Incidencias Inprevistas</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="reasson">Razón de incidencia</label>
                <select name="reasson" id="reasson" class="form-control">
                    <option value="" disabled>Seleccione la razon de la incidencia</option>
                    <option value="Vacaciones"
                        {{ old('reasson', $incidences->reasson ?? '') == 'Vacaciones' ? 'selected' : '' }}>Vacaciones
                    </option>
                    <option value="Incapacidad por maternidad"
                        {{ old('reasson', $incidences->reasson ?? '') == 'Incapacidad por maternidad' ? 'selected' : '' }}>
                        Incapacidad por maternidad</option>
                    <option value="Permisos solicitados"
                        {{ old('reasson', $incidences->reasson ?? '') == 'Permisos solicitados' ? 'selected' : '' }}>
                        Permisos solicitados</option>
                    <option value="Permisos solicitados"
                        {{ old('reasson', $incidences->reasson ?? '') == 'Permisos solicitados' ? 'selected' : '' }}>
                        Permisos solicitados</option>
                    <option value="Incapacidades por condiciones médicas específicas"
                        {{ old('reasson', $incidences->reasson ?? '') == 'Incapacidades por condiciones médicas específicas' ? 'selected' : '' }}>
                        Incapacidades por condiciones médicas específicas</option>
                    <option value="Horas extra"
                        {{ old('reasson', $incidences->reasson ?? '') == 'Horas extra' ? 'selected' : '' }}>Horas extra
                    </option>
                    <option value="Días económicos"
                        {{ old('reasson', $incidences->reasson ?? '') == 'Días económicos' ? 'selected' : '' }}>Días
                        económicos</option>
                    <option value="Accidentes laborales"
                        {{ old('reasson', $incidences->reasson ?? '') == 'Accidentes laborales' ? 'selected' : '' }}>
                        Accidentes laborales"></option>
                    <option value="Enfermedades repentinas"
                        {{ old('reasson', $incidences->reasson ?? '') == 'Ausencias no planificadas' ? 'selected' : '' }}>
                        Ausencias no planificadas"></option>
                    <option value="Retrasos"
                        {{ old('reasson', $incidences->reasson ?? '') == 'Retrasos' ? 'selected' : '' }}>Retrasos">
                    </option>
                    <option value="Incidencias de seguridad"
                        {{ old('reasson', $incidences->reasson ?? '') == 'Incidencias de seguridad' ? 'selected' : '' }}>
                        Incidencias de seguridad"></option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="penalty">Razón de incidencia</label>
                <select name="penalty" id="penalty" class="form-control">
                    <option value="" disabled>Seleccione la penalizacion por incidencia</option>
                    <option value="Amonestación"
                        {{ old('penalty', $incidences->penalty ?? '') == 'Amonestación' ? 'selected' : '' }}>
                        Amonestación</option>
                    <option value="Descuento"
                        {{ old('penalty', $incidences->penalty ?? '') == 'Descuento' ? 'selected' : '' }}>Descuento
                    </option>
                    <option value="Suspensión"
                        {{ old('penalty', $incidences->penalty ?? '') == 'Suspensión' ? 'selected' : '' }}>Suspensión
                    </option>
                    <option value="Otro..."
                        {{ old('penalty', $incidences->penalty ?? '') == 'Otro...' ? 'selected' : '' }}>Otro...
                    </option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="mediation">Acuerdo entre ambas partes</label>
                <input type="text" id="mediation" name="mediation" class="form-control form-control-alternative"
                    placeholder="Ingresar fecha de creacion de la incidencia"
                    value="{{ old('mediation', $incidences->mediation) }}">
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="generated_by">Generado por...</label>
                <input type="text" id="generated_by" name="generated_by"
                    class="form-control form-control-alternative"
                    placeholder="Ingresar fecha de creacion de la incidencia"
                    value="{{ old('generated_by', $incidences->generated_by) }}">
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="status">Estado de incidencia</label>
                <select name="status" id="status" class="form-control">
                    <option value="" disabled>Seleccione el estado actual de la incidencia</option>
                    <option value="Aprobado"
                        {{ old('status', $incidences->status ?? '') == 'Amonestación' ? 'selected' : '' }}>Amonestación
                    </option>
                    <option value="Desestimado"
                        {{ old('status', $incidences->status ?? '') == 'Descuento' ? 'selected' : '' }}>Descuento
                    </option>
                    <option value="En espera"
                        {{ old('status', $incidences->status ?? '') == 'Suspensión' ? 'selected' : '' }}>Suspensión
                    </option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="boss_id"><i class="fas fa-graduation-cap"></i> Jefe
                    responsable</label>

                <select name="boss_id" id="boss_id" class="form-control form-control-alternative">
                    <option disabled>Seleccionar el jefe responsable</option>
                    @foreach ($bosses as $boss)
                        <option value="{{ $boss->id }}" @selected(old('boss_id', $boss->boss_id) == $boss->id)>
                            {{ $boss->first_name }}
                        </option>
                    @endforeach
                </select>

            </div>
        </div>
    </div>

</div>

<hr class="my-4" />

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i>Guardar Incidencia
        </button>
    </div>
</div>

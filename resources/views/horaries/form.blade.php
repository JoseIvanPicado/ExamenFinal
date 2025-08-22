<h6 class="heading-small text-muted mb-4">Información del Horario</h6>

<div class="pl-lg-4">

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
                                {{ old('$employee_id', $horaries->employee_id ?? '') == $employee->id ? 'selected' : '' }}>
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
                    <label class="form-control-label" for="expected_input">Hora de entrada
                    </label>
                    <input type="time" id="expected_input" name="expected_input" class="form-control form-control-alternative"
                    value="{{ old('expected_input', isset($horaries->expected_input)) ? $horaries->expected_input->format(Y-m-d) : '' }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-control-label" for="expected_exit">Hora de salida
                    </label>
                    <input type="time" id="expected_exit" name="expected_exit" class="form-control form-control-alternative"
                    value="{{ old('expected_exit', isset($horaries->expected_exit)) ? $horaries->expected_exit->format(Y-m-d) : '' }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-control-label" for="over_time">Horas extras laboradas
                    </label>
                    <input type="time" id="over_time" name="over_time" class="form-control form-control-alternative"
                    value="{{ old('over_time', isset($horaries->over_time)) ? $horaries->over_time->format(Y-m-d) : '' }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-control-label" for="departament_id"><i class="fas fa-graduation-cap"></i> Departamento laboral</label>

                    <select name="departament_id" id="departament_id" class="form-control form-control-alternative">
                        <option disabled>Seleccionar el departamento del empleado</option>
                        @foreach ($departaments as $departament)
                            <option value="{{ $departament->id }}" @selected(old('departament_id', $departament->departament_id) == $departament->id)>
                                {{ $departament->name_departament }}
                            </option>
                        @endforeach
                    </select>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-control-label" for="boss_id"><i class="fas fa-graduation-cap"></i> Jefe responsable</label>

                    <select name="boss_id" id="boss_id" class="form-control form-control-alternative">
                        <option disabled>Seleccionar el jefe </option>
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

    <hr class="my-4"/>

    <h6 class="heading-small text-muted mb-4">Guardar</h6>

    <div class="pl-lg-4">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i>Guardar horario
            </button>
        </div>
    </div>

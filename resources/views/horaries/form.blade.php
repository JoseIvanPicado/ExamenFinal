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
                <label class="form-control-label" for="expected_input">Hora de entrada</label>
                <input type="time" id="expected_input" name="expected_input" class="form-control form-control-alternative"
                    placeholder="Hora de entrada"
                    value="{{ old('expected_input', $horaries->expected_input) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="expected_exit">Hora de salida</label>
                <input type="time" id="expected_exit" name="expected_exit" class="form-control form-control-alternative"
                    placeholder="Hora de salida"
                    value="{{ old('expected_exit', $horaries->expected_exit) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="overtime">Hora de extras</label>
                <input type="time" id="overtime" name="overtime" class="form-control form-control-alternative"
                    placeholder="Hora de salida"
                    value="{{ old('overtime', $horaries->overtime) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="departament_id"><i class="fas fa-user-circle"></i> Departamento</label>

                <select name="departament_id" id="departament_id" class="form-control form-control-alternative">
                    <option disabled>Seleccionar Departamento</option>
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
                <label class="form-control-label" for="boss_id"><i class="fas fa-user-circle"></i> Departamento</label>

                <select name="boss_id" id="boss_id" class="form-control form-control-alternative">
                    <option disabled>Seleccionar Departamento</option>
                    @foreach ($bosses as $boss)
                        <option value="{{ $boss->id }}" @selected(old('boss_id', $boss->boss_id) == $boss->id)>
                            {{ $boss->last_name }}
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

<h6 class="heading-small text-muted mb-4">Información de departamento</h6>

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
                            {{ old('$employee_id', $departaments->employee_id ?? '') == $employee->id ? 'selected' : '' }}>
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
                <label class="form-control-label" for="name_departament">Ingresar nombre del departamento</label>
                <input type="text" id="name_departament" name="name_departament" class="form-control form-control-alternative"
                    placeholder="Ingresar nombre del departamento"
                    value="{{ old('name_departament', $departaments->name_departament)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="location">Ingresar localidad del departamento</label>
                <input type="text" id="location" name="location" class="form-control form-control-alternative"
                    placeholder="Ingresar localidad del departamento"
                    value="{{ old('location', $departaments->location)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description">Ingresar descripción del departamento</label>
                <input type="text" id="description" name="description" class="form-control form-control-alternative"
                    placeholder="Ingresar descripción del departamento"
                    value="{{ old('description', $departaments->description)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="state">Ingresar estado del departamento</label>
                <input type="text" id="state" name="state" class="form-control form-control-alternative"
                    placeholder="Ingresar descripción del departamento"
                    value="{{ old('state', $departaments->state)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="capacity_staff">Ingresar la capacidad del departamento</label>
                <input type="number" id="capacity_staff" name="capacity_staff" class="form-control form-control-alternative"
                    placeholder="Ingresar la capacidad del departamento"
                    value="{{ old('capacity_staff', $departaments->capacity_staff)}}">
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
                    @foreach ($bosses_id as $boss_id)
                        <option value="{{ $boss_id }}"
                            {{ old('boss_id', $departament->boss_id ?? '' ) == $boss_id->id ? 'selected' : ''}}>
                            {{ $boss_id->first_name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="charges_id">
                    <i class="fas fa-solid fa-aligin-justify"></i>Cargo designado
                </label>
                <select name="charge_id" id="charge_id" class="form-control form-control-alternative">
                    <option disabled selected> Seleccionar cargo</option>
                    @foreach ($charges_id as $charge_id)
                        <option value="{{ $charge_id }}"
                            {{ old('charge_id', $charge->charge_id ?? '' ) == $charge_id->id ? 'selected' : ''}}>
                            {{ $charge_id->name_chargues }}
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
                <i class="fas fa-save"></i> Guardar Ausencia
            </button>
        </div>
    </div>




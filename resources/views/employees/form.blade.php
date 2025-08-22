<h6 class="heading-small text-muted mb-4">Información del Empleado</h6>

<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">
                <i class="fas fa-user"></i> Nombre completo
                </label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Ingresar nombre del empleado"
                    value="{{ old('name', $employee->name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="last_name">
                <i class="fas fa-user"></i> Apellido Completo
                </label>
                <input type="text" id="last_name" name="last_name" class="form-control form-control-alternative"
                    placeholder="Ingresar apellido del empleado"
                    value="{{ old('last_name', $employee->last_name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="date_of_birth">Fecha de nacimiento
                </label>
                <input type="date" id="date_of_birth" name="date_of_birth" class="form-control form-control-alternative"
                    value="{{ old('date_of_birth', isset($employee->date_of_birth)) ? $employee->date_of_birth->format(Y-m-d) : '' }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="gender">Genero</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="" disabled>Seleccione un Genero</option>
                    <option value="Masculino" {{ old('gender', $employee->gender ?? '') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                    <option value="Femenino" {{ old('gender', $employee->gender ?? '') == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="marital_status">Estado Civil</label>
                <select name="marital_status" id="marital_status" class="form-control">
                    <option value="" disabled>Seleccione su Estado Civil</option>
                    <option value="Soltero" {{ old('marital_status', $employee->marital_status ?? '') == 'Soltero' ? 'selected' : '' }}>Soltero</option>
                    <option value="Casado" {{ old('marital_status', $employee->marital_status ?? '') == 'Casado' ? 'selected' : '' }}>Casado</option>
                    <option value="Divorciado" {{ old('marital_status', $employee->marital_status ?? '') == 'Divorciado' ? 'selected' : '' }}>Divorciado</option>
                    <option value="Viudo" {{ old('marital_status', $employee->marital_status ?? '') == 'Viudo' ? 'selected' : '' }}>Viudo</option>
                    <option value="Unión Libre" {{ old('marital_status', $employee->marital_status ?? '') == 'Unión Libre' ? 'selected' : '' }}>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="number_phone">
                <i class="fas fa-phone"></i> Número telefónico
                </label>
                <input type="number" id="number_phone" name="number_phone" class="form-control form-control-alternative"
                    placeholder="Ingresar número telefónico del empleado"
                    value="{{ old('number_phone', $employee->number_phone) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="emergency_contact_phone">
                <i class="fas fa-phone-alt"></i> Número de emergencia
                </label>
                <input type="number" id="emergency_contact_phone" name="emergency_contact_phone"
                    class="form-control form-control-alternative"
                    placeholder="Ingresar número de emergencia del empleado"
                    value="{{ old('emergency_contact_phone', $employee->emergency_contact_phone) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="emergency_contact_name">
                <i class="fas fa-user-friends"></i> Nombre de contacto para emergencias
                </label>
                <input type="text" id="emergency_contact_name" name="emergency_contact_name"
                    class="form-control form-control-alternative"
                    placeholder="Ingresar nombre de contacto para emergencias"
                    value="{{ old('emergency_contact_name', $employee->emergency_contact_name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="email">
                <i class="fas fa-envelope"></i> Correo electrónico
                </label>
                <input type="email" id="email" name="email" class="form-control form-control-alternative"
                    placeholder="Ingresar correo electrónico del empleado"
                    value="{{ old('email', $employee->email) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="nacionality">Nacionalidad</label>
                <select name="nacionality" id="nacionality" class="form-control">
                    <option value="" disabled>Seleccione un Genero</option>
                    <option value="Nicaragua" {{ old('nacionality', $employee->nacionality ?? '') == 'Nicaragua' ? 'selected' : '' }}>Nicaragua</option>
                    <option value="Panamá" {{ old('nacionality', $employee->nacionality ?? '') == 'Panamá' ? 'selected' : '' }}>Panamá</option>
                    <option value="Costa Rica" {{ old('nacionality', $employee->nacionality ?? '') == 'Costa Rica' ? 'selected' : '' }}>Costa Rica</option>
                    <option value="Honduras" {{ old('nacionality', $employee->nacionality ?? '') == 'Honduras' ? 'selected' : '' }}>Honduras</option>
                    <option value="El Salvador" {{ old('nacionality', $employee->nacionality ?? '') == 'El Salvador' ? 'selected' : '' }}>El Salvador</option>
                    <option value="Guatemala" {{ old('nacionality', $employee->nacionality ?? '') == 'Guatemala' ? 'selected' : '' }}>Guatemala</option>
                    <option value="México" {{ old('nacionality', $employee->nacionality ?? '') == 'México' ? 'selected' : '' }}>México</option>
                    <option value="Colombia" {{ old('nacionality', $employee->nacionality ?? '') == 'Colombia' ? 'selected' : '' }}>Colombia</option>
                    <option value="Venezuela" {{ old('nacionality', $employee->nacionality ?? '') == 'Venezuela' ? 'selected' : '' }}>Venezuela</option>
                    <option value="Ecuador" {{ old('nacionality', $employee->nacionality ?? '') == 'Ecuador' ? 'selected' : '' }}>Ecuador</option>
                    <option value="Estados Unidos" {{ old('nacionality', $employee->nacionality ?? '') == 'Estados Unidos' ? 'selected' : '' }}>Estados Unidos</option>
                    <option value="España" {{ old('nacionality', $employee->nacionality ?? '') == 'España' ? 'selected' : '' }}>España</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="educative_level">Nivel Educativo</label>
                <select name="educative_level" id="educative_level" class="form-control">
                    <option value="" disabled>Seleccione su Nivel Educativo</option>
                    <option value="Primaria" {{ old('educative_level', $employee->educative_level ?? '') == 'Primaria' ? 'selected' : '' }}>Primaria</option>
                    <option value="Bachiller" {{ old('educative_level', $employee->educative_level ?? '') == 'Bachiller' ? 'selected' : '' }}>Bachiller</option>
                    <option value="Universitario" {{ old('educative_level', $employee->educative_level ?? '') == 'Universitario Rica' ? 'selected' : '' }}>Universitario</option>
                    <option value="Técnico" {{ old('educative_level', $employee->educative_level ?? '') == 'Técnico' ? 'selected' : '' }}>Técnico</option>
                    <option value="Postgrado" {{ old('educative_level', $employee->educative_level ?? '') == 'Postgrado' ? 'selected' : '' }}>Postgrado</option>
                    <option value="Doctorado" {{ old('educative_level', $employee->educative_level ?? '') == 'Doctorado' ? 'selected' : '' }}>Doctorado</option>
                    <option value="Otro" {{ old('educative_level', $employee->educative_level ?? '') == 'Otro' ? 'selected' : '' }}>Otro</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="identification">
                <i class="fas fa-id-card"></i> Cédula de identificación
                </label>
                <input type="text" id="identification" name="identification"
                    class="form-control form-control-alternative"
                    placeholder="Ingresar cédula de identificación del empleado"
                    value="{{ old('identification', $employee->identification) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="address">
                <i class="fas fa-map-marker-alt"></i> Dirección
                </label>
                <input type="text" id="address" name="address" class="form-control form-control-alternative"
                    placeholder="Ingresar dirección del empleado"
                    value="{{ old('address', $employee->address) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="hire_date">
                <i class="fas fa-calendar-alt"></i> Fecha de contratación
                </label>
                <input type="date" id="hire_date" name="hire_date" class="form-control form-control-alternative"
                    value="{{ old('hire_date', isset($employee->hire_date) ? $employee->hire_date->format('Y-m-d') : '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group
                <label class="form-control-label" for="position">
                <i class="fas fa-briefcase"></i> Cargo
                </label>
                <input type="text" id="position" name="position" class="form-control form-control-alternative"
                    placeholder="Ingresar cargo del empleado"
                    value="{{ old('position', $employee->position) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="departament">
                <i class="fas fa-building"></i> Departamento
                </label>
                <input type="text" id="departament" name="departament" class="form-control form-control-alternative"
                    placeholder="Ingresar departamento del empleado"
                    value="{{ old('departament', $employee->departament) }}">
            </div>
        </div>
    </div>
</div>

    <hr class="my-4">
    <h6 class="heading-small text-muted mb-4"> Guardar</h6>

<div class="row">
    <div class="col-lg-6">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar
        </button>
    </div>
</div>

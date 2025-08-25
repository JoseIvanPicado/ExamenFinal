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
                    value="{{ old('name', $employees->name) }}">
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
                    value="{{ old('last_name', $employees->last_name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="years_old">Fecha de nacimiento</label>
                <input type="date" id="years_old" name="years_old" class="form-control form-control-alternative"
                    placeholder="Ingresar fecha de nacimiento"
                    value="{{ old('years_old', $employees->years_old)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="gender">Genero</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="" disabled>Seleccione un Genero</option>
                    <option value="Masculino" {{ old('gender', $employees->gender ?? '') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                    <option value="Femenino" {{ old('gender', $employees->gender ?? '') == 'Femenino' ? 'selected' : '' }}>Femenino</option>
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
                    <option value="Soltero" {{ old('marital_status', $employees->marital_status ?? '') == 'Soltero' ? 'selected' : '' }}>Soltero</option>
                    <option value="Casado" {{ old('marital_status', $employees->marital_status ?? '') == 'Casado' ? 'selected' : '' }}>Casado</option>
                    <option value="Divorciado" {{ old('marital_status', $employees->marital_status ?? '') == 'Divorciado' ? 'selected' : '' }}>Divorciado</option>
                    <option value="Viudo" {{ old('marital_status', $employees->marital_status ?? '') == 'Viudo' ? 'selected' : '' }}>Viudo</option>
                    <option value="Unión Libre" {{ old('marital_status', $employees->marital_status ?? '') == 'Unión Libre' ? 'selected' : '' }}>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="number_phone">
                <i class="fas fa-phone-alt"></i> Número telefónico
                </label>
                <input type="number" id="number_phone" name="number_phone" class="form-control form-control-alternative"
                    placeholder="Ingresar número telefónico del empleado"
                    value="{{ old('number_phone', $employees->number_phone) }}">
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
                    value="{{ old('emergency_contact_phone', $employees->emergency_contact_phone) }}">
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
                    value="{{ old('emergency_contact_name', $employees->emergency_contact_name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="mail">
                <i class="fas fa-envelope"></i> Correo electrónico
                </label>
                <input type="email" id="mail" name="mail" class="form-control form-control-alternative"
                    placeholder="Ingresar correo electrónico del empleado"
                    value="{{ old('mail', $employees->mail) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="nacionality">Nacionalidad</label>
                <select name="nacionality" id="nacionality" class="form-control">
                    <option value="" disabled>Seleccione un Genero</option>
                    <option value="Nicaragua" {{ old('nacionality', $employees->nacionality ?? '') == 'Nicaragua' ? 'selected' : '' }}>Nicaragua</option>
                    <option value="Panamá" {{ old('nacionality', $employees->nacionality ?? '') == 'Panamá' ? 'selected' : '' }}>Panamá</option>
                    <option value="Costa Rica" {{ old('nacionality', $employees->nacionality ?? '') == 'Costa Rica' ? 'selected' : '' }}>Costa Rica</option>
                    <option value="Honduras" {{ old('nacionality', $employees->nacionality ?? '') == 'Honduras' ? 'selected' : '' }}>Honduras</option>
                    <option value="El Salvador" {{ old('nacionality', $employees->nacionality ?? '') == 'El Salvador' ? 'selected' : '' }}>El Salvador</option>
                    <option value="Guatemala" {{ old('nacionality', $employees->nacionality ?? '') == 'Guatemala' ? 'selected' : '' }}>Guatemala</option>
                    <option value="México" {{ old('nacionality', $employees->nacionality ?? '') == 'México' ? 'selected' : '' }}>México</option>
                    <option value="Colombia" {{ old('nacionality', $employees->nacionality ?? '') == 'Colombia' ? 'selected' : '' }}>Colombia</option>
                    <option value="Venezuela" {{ old('nacionality', $employees->nacionality ?? '') == 'Venezuela' ? 'selected' : '' }}>Venezuela</option>
                    <option value="Ecuador" {{ old('nacionality', $employees->nacionality ?? '') == 'Ecuador' ? 'selected' : '' }}>Ecuador</option>
                    <option value="Estados Unidos" {{ old('nacionality', $employees->nacionality ?? '') == 'Estados Unidos' ? 'selected' : '' }}>Estados Unidos</option>
                    <option value="España" {{ old('nacionality', $employees->nacionality ?? '') == 'España' ? 'selected' : '' }}>España</option>
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
                    <option value="Primaria" {{ old('educative_level', $employees->educative_level ?? '') == 'Primaria' ? 'selected' : '' }}>Primaria</option>
                    <option value="Bachiller" {{ old('educative_level', $employees->educative_level ?? '') == 'Bachiller' ? 'selected' : '' }}>Bachiller</option>
                    <option value="Universitario" {{ old('educative_level', $employees->educative_level ?? '') == 'Universitario Rica' ? 'selected' : '' }}>Universitario</option>
                    <option value="Técnico" {{ old('educative_level', $employees->educative_level ?? '') == 'Técnico' ? 'selected' : '' }}>Técnico</option>
                    <option value="Postgrado" {{ old('educative_level', $employees->educative_level ?? '') == 'Postgrado' ? 'selected' : '' }}>Postgrado</option>
                    <option value="Doctorado" {{ old('educative_level', $employees->educative_level ?? '') == 'Doctorado' ? 'selected' : '' }}>Doctorado</option>
                    <option value="Otro" {{ old('educative_level', $employees->educative_level ?? '') == 'Otro' ? 'selected' : '' }}>Otro</option>
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
                    value="{{ old('identification', $employees->identification) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="adress">
                <i class="fas fa-map-marker-alt"></i> Dirección
                </label>
                <input type="text" id="adress" name="adress" class="form-control form-control-alternative"
                    placeholder="Ingresar dirección del empleado"
                    value="{{ old('adress', $employees->adress) }}">
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="hire_date">Fecha de contratacion</label>
                <input type="date" id="hire_date" name="hire_date" class="form-control form-control-alternative"
                    placeholder="Ingresar fecha de contratacion del empleado"
                    value="{{ old('hire_date', $employees->hire_date)}}">
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
                    value="{{ old('position', $employees->position) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="departament">
                <i class="fas fa-building"></i> Departamento de residencia
                </label>
                <input type="text" id="departament" name="departament" class="form-control form-control-alternative"
                    placeholder="Ingresar departamento del empleado"
                    value="{{ old('departament', $employees->departament) }}">
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

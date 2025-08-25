<h6 class="heading-small text-muted mb-4">Información del Jefe</h6>

<div class="pl-lg-4">

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">
                <i class="fas fa-user"></i> Nombre completo
                </label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Ingresar nombre del empleado"
                    value="{{ old('name', $bosses->first_name) }}">
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
                    value="{{ old('last_name', $bosses->last_name) }}">
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
                    value="{{ old('identification', $bosses->identification) }}">
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
                    value="{{ old('number_phone', $bosses->number_phone) }}">
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
                    value="{{ old('email', $bosses->email) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="nacionality">
                <i class="fas fa-flag"></i> Nacionalidad
                </label>
                <input type="text" id="nacionality" name="nacionality" class="form-control form-control-alternative"
                    placeholder="Ingresar nacionalidad del empleado"
                    value="{{ old('nacionality', $bosses->nacionality) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="years_old">Fecha de nacimiento</label>
                <input type="date" id="years_old" name="years_old" class="form-control form-control-alternative"
                    placeholder="Ingresar fecha de nacimiento"
                    value="{{ old('years_old', $bosses->years_old)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="gender">Genero</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="" disabled>Seleccione un Genero</option>
                    <option value="Masculino" {{ old('gender', $bosses->gender ?? '') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                    <option value="Femenino" {{ old('gender', $bosses->gender ?? '') == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="marital_states">Estado Civil</label>
                <select name="marital_states" id="marital_states" class="form-control">
                    <option value="" disabled>Seleccione su Estado Civil</option>
                    <option value="Soltero" {{ old('marital_states', $bosses->marital_states ?? '') == 'Soltero' ? 'selected' : '' }}>Soltero</option>
                    <option value="Casado" {{ old('marital_states', $bosses->marital_states ?? '') == 'Casado' ? 'selected' : '' }}>Casado</option>
                    <option value="Divorciado" {{ old('marital_states', $bosses->marital_states ?? '') == 'Divorciado' ? 'selected' : '' }}>Divorciado</option>
                    <option value="Viudo" {{ old('marital_states', $bosses->marital_states ?? '') == 'Viudo' ? 'selected' : '' }}>Viudo</option>
                    <option value="Unión Libre" {{ old('marital_states', $bosses->marital_states ?? '') == 'Unión Libre' ? 'selected' : '' }}>
                </select>
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
                    value="{{ old('adress', $bosses->adress) }}">
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
                    value="{{ old('emergency_contact_phone', $bosses->emergency_contact_phone) }}">
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
                    value="{{ old('emergency_contact_name', $bosses->emergency_contact_name) }}">
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
                    value="{{ old('hire_date', isset($bosses->hire_date) ? $boss->hire_date->format('Y-m-d') : '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="start_date_position">
                <i class="fas fa-calendar-alt"></i> Fecha de inicio en su puesto actual
                </label>
                <input type="date" id="start_date_position" name="start_date_position" class="form-control form-control-alternative"
                    value="{{ old('start_date_position', isset($bosses->start_date_position) ? $boss->start_date_position->format('Y-m-d') : '') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="position">
                <i class="fas fa-briefcase"></i> Cargo del empleado
                </label>
                <input type="text" id="position" name="position" class="form-control form-control-alternative"
                    placeholder="Ingresar cargo del empleado"
                    value="{{ old('position', $bosses->position) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="departament_charge">
                <i class="fas fa-building"></i> Departamento laboral
                </label>
                <input type="text" id="departament_charge" name="departament_charge" class="form-control form-control-alternative"
                    placeholder="Ingresar departamento del empleado"
                    value="{{ old('departament_charge', $bosses->departament_charge) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="team_size">
                <i class="fas fa-building"></i> Personal a disposición
                </label>
                <input type="number" id="team_size" name="team_size" class="form-control form-control-alternative"
                    placeholder="Ingresar Personal a disposición del empleado"
                    value="{{ old('team_size', $bosses->team_size) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="budget_responsibility">
                <i class="fas fa-building"></i> Responsabilidad presupuestaria
                </label>
                <input type="number" id="budget_responsibility" name="budget_responsibility" class="form-control form-control-alternative"
                    placeholder="Ingresar responsabilidad presupuestaria del jefe"
                    value="{{ old('budget_responsibility', $bosses->budget_responsibility) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="educative_level">Nivel Educativo</label>
                <select name="educative_level" id="educative_level" class="form-control">
                    <option value="" disabled>Seleccione su Nivel Educativo</option>
                    <option value="Primaria" {{ old('educative_level', $bosses->educative_level ?? '') == 'Primaria' ? 'selected' : '' }}>Primaria</option>
                    <option value="Bachiller" {{ old('educative_level', $bosses->educative_level ?? '') == 'Bachiller' ? 'selected' : '' }}>Bachiller</option>
                    <option value="Universitario" {{ old('educative_level', $bosses->educative_level ?? '') == 'Universitario Rica' ? 'selected' : '' }}>Universitario</option>
                    <option value="Técnico" {{ old('educative_level', $bosses->educative_level ?? '') == 'Técnico' ? 'selected' : '' }}>Técnico</option>
                    <option value="Postgrado" {{ old('educative_level', $bosses->educative_level ?? '') == 'Postgrado' ? 'selected' : '' }}>Postgrado</option>
                    <option value="Doctorado" {{ old('educative_level', $bosses->educative_level ?? '') == 'Doctorado' ? 'selected' : '' }}>Doctorado</option>
                    <option value="Otro" {{ old('educative_level', $bosses->educative_level ?? '') == 'Otro' ? 'selected' : '' }}>Otro</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="work_experience">
                <i class="fas fa-briefcase"></i> Experiencia laboral
                </label>
                <textarea id="work_experience" name="work_experience" class="form-control form-control-alternative"
                    placeholder="Describir experiencia laboral del jefe">{{ old('work_experience', $bosses->work_experience) }}</textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="photo">
                <i class="fas fa-image"></i> Foto
                </label>
                <input type="file" id="photo" name="photo" class="form-control form-control-alternative">
                @if(isset($boss->photo))
                    <img src="{{ Storage::url($bosses->photo) }}" alt="Foto del jefe" width="100" class="mt-2">
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="observations">
                <i class="fas fa-sticky-note"></i> Observaciones
                </label>
                <textarea id="observations" name="observations" class="form-control form-control-alternative"
                    placeholder="Agregar observaciones">{{ old('observations', $bosses->observations) }}</textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="status">Estado</label>
                <select name="status" id="status" class="form-control">
                    <option value="active" {{ old('status', $bosses->status ?? '') == 'active' ? 'selected' : '' }}>Activo</option>
                    <option value="inactive" {{ old('status', $bosses->status ?? '') == 'inactive' ? 'selected' : '' }}>Inactivo</option>
                </select>
            </div>
        </div>
    </div>

<h6 class="heading-small text-muted mb-4">Información del cargo</h6>

<div class="pl-lg-4">

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="name_chargues">Nombre del cargo</label>
                <select name="name_chargues" id="name_chargues" class="form-control">
                    <option value="" disabled>Seleccione un cargo</option>
                    <option value="Director" {{ old('name_chargues', $charges->name_chargues ?? '') == 'Director' ? 'selected' : '' }}>Director</option>
                    <option value="Sub Director" {{ old('name_chargues', $charges->name_chargues ?? '') == 'Sub Director' ? 'selected' : '' }}>Sub Director</option>
                    <option value="Coordinador Academico" {{ old('name_chargues', $charges->name_chargues ?? '') == 'Coordinador Academico' ? 'selected' : '' }}>Coordinador Academico</option>
                    <option value="Jefe de estudios" {{ old('name_chargues', $charges->name_chargues ?? '') == 'Jefe de estudios' ? 'selected' : '' }}>Jefe de estudios</option>
                    <option value="Maestro/Docente" {{ old('name_chargues', $charges->name_chargues ?? '') == 'Maestro/Docente' ? 'selected' : '' }}>Maestro/Docente</option>
                    <option value="Secretario/ria" {{ old('name_chargues', $charges->name_chargues ?? '') == 'Secretario/ria' ? 'selected' : '' }}>Secretario/ria</option>
                    <option value="Personal de administracion" {{ old('name_chargues', $charges->name_chargues ?? '') == 'Personal de administracion' ? 'selected' : '' }}>Personal de administracion</option>
                    <option value="Orientador" {{ old('name_chargues', $charges->name_chargues ?? '') == 'Orientador' ? 'selected' : '' }}>Orientador</option>
                    <option value="Personal de mantenimiento" {{ old('name_chargues', $charges->name_chargues ?? '') == 'Personal de mantenimiento' ? 'selected' : '' }}>Personal de mantenimiento</option>
                    <option value="Personal de servicios generales" {{ old('name_chargues', $charges->name_chargues ?? '') == 'Personal de limpieza' ? 'selected' : '' }}>Personal de limpieza</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="type_charges">Tipo de cargo</label>
                <select name="type_charges" id="type_charges" class="form-control">
                    <option value="" disabled>Seleccione su tipo de cargo</option>
                    <option value="Directivo" {{ old('type_charges', $charges->type_charges ?? '') == 'Directivo' ? 'selected' : '' }}>Directivo</option>
                    <option value="Docente" {{ old('type_charges', $charges->type_charges ?? '') == 'Docente' ? 'selected' : '' }}>Docente</option>
                    <option value="Administrativo" {{ old('type_charges', $charges->type_charges ?? '') == 'Administrativo' ? 'selected' : '' }}>Administrativo</option>
                    <option value="Apoyo" {{ old('type_charges', $charges->type_charges ?? '') == 'Apoyo' ? 'selected' : '' }}>Apoyo</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="academic_level">Nivel Educativo</label>
                <select name="academic_level" id="academic_level" class="form-control">
                    <option value="" disabled>Seleccione su Nivel Educativo</option>
                    <option value="Bachiller" {{ old('academic_level', $charges->educative_level ?? '') == 'Bachiller' ? 'selected' : '' }}>Bachiller</option>
                    <option value="Universitario" {{ old('academic_level', $charges->educative_level ?? '') == 'Universitario' ? 'selected' : '' }}>Universitario</option>
                    <option value="Técnico" {{ old('academic_level', $charges->educative_level ?? '') == 'Técnico' ? 'selected' : '' }}>Técnico</option>
                    <option value="Postgrado" {{ old('academic_level', $charges->educative_level ?? '') == 'Postgrado' ? 'selected' : '' }}>Postgrado</option>
                    <option value="Doctorado" {{ old('academic_level', $charges->educative_level ?? '') == 'Doctorado' ? 'selected' : '' }}>Doctorado</option>
                    <option value="Otro" {{ old('academic_level', $charges->educative_level ?? '') == 'Otro' ? 'selected' : '' }}>Otro</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="experience_work">
                <i class="fas fa-user"></i> Experencia de trabajo
                </label>
                <input type="text" id="experience_work" name="experience_work" class="form-control form-control-alternative"
                    placeholder="Ingresar su experencia de trabajo"
                    value="{{ old('experience_work', $charges->experience_work) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="requeriments">
                <i class="fas fa-user"></i> Requerimientos
                </label>
                <input type="text" id="requeriments" name="requeriments" class="form-control form-control-alternative"
                    placeholder="Ingresar Requerimientos"
                    value="{{ old('requeriments', $charges->requeriments) }}">
            </div>
        </div>
    </div>

    <hr class="my-4" />

    <h6 class="heading-small text-muted mb-4">Guardar</h6>

    <div class="pl-lg-4">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Guardar cargo
            </button>
        </div>
    </div>

<form class="p-4 border rounded bg-light" method="POST" action="{{ route('usuarios.update', $usuario->id) }}">
    @csrf
    @method('PUT')
    <h5 class="mb-3">Actualizacion Datos Personales</h5>

    <div class="row g-3">
        <div class="col-md-2">
            <label class="form-label">RUT</label>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" name="rut" value="{{ $usuario->rutUsuario() }}" required>
                <div class="form-control-icon">
                    <i class="bi bi-credit-card-2-front"></i>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <label class="form-label">Nombres</label>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" name="nombres" value="{{ $usuario->nombres }}" required>
                <div class="form-control-icon">
                    <i class="bi bi-person"></i>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <label class="form-label">Apellido Paterno</label>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" name="paterno" value="{{ $usuario->apellidop }}" required>
                <div class="form-control-icon">
                    <i class="bi bi-person-badge"></i>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <label class="form-label">Apellido Materno</label>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" name="materno" value="{{ $usuario->apellidom }}" required>
                <div class="form-control-icon">
                    <i class="bi bi-person-badge-fill"></i>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <label class="form-label">Fecha Nacimiento</label>
            <div class="form-group position-relative has-icon-right">
                <input type="date" class="form-control" name="fecha_nacimiento" value="{{ $usuario->fecha_nacimiento }}" required>
                <div class="form-control-icon">
                    <i class="bi bi-calendar-date"></i>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <label class="form-label">Teléfono</label>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" name="telefono" value="{{ $usuario->telefono }}" required>
                <div class="form-control-icon">
                    <i class="bi bi-telephone"></i>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <label class="form-label">Dirección</label>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" name="direccion" value="{{ $usuario->direccion }}" required>
                <div class="form-control-icon">
                    <i class="bi bi-geo-alt"></i>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <label class="form-label">Sexo</label>
            <select name="sexo" class="form-select" required>
                <option value="">--Seleccione--</option>
                @foreach($sexo as $key => $value)
                    <option value="{{ $key }}" {{ $usuario->sexo_id == $key ? 'selected' : '' }}> {{ $value }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-2">
            <label class="form-label">AFP</label>
            <select name="afp" class="form-select" required>
                <option value="">--Seleccione--</option>
                @foreach($afp as $key => $value)
                    <option value="{{ $key }}" {{ $usuario->afp_id == $key ? 'selected' : '' }}> {{ $value }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-2">
            <label class="form-label">Previsión</label>
            <select name="prevision" class="form-select" required>
                <option value="">--Seleccione--</option>
                @foreach($prevision as $key => $value)
                    <option value="{{ $key }}" {{ $usuario->prevision_id == $key ? 'selected' : '' }}> {{ $value }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-2">
            <label class="form-label">Fecha Ingreso</label>
            <div class="form-group position-relative has-icon-right">
                <input type="date" class="form-control" name="fecha_ingreso" value="{{ $usuario->fecha_ingreso }}" required>
                <div class="form-control-icon">
                    <i class="bi bi-calendar-check"></i>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <label class="form-label">Estado Civil</label>
            <select name="estado_civil" class="form-select" required>
                <option value="">--Seleccione--</option>
                @foreach($civil as $key => $value)
                    <option value="{{ $key }}" {{ $usuario->estado_civil_id == $key ? 'selected' : '' }}> {{ $value }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-2">
            <label class="form-label">Nacionalidad</label>
            <select name="nacionalidad" class="form-select" required>
                <option value="">--Seleccione--</option>
                @foreach($nacionalidad as $key => $value)
                    <option value="{{ $key }}" {{ $usuario->nacionalidad_id == $key ? 'selected' : '' }}> {{ $value }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-2">
            <label class="form-label">Profesión</label>
            <select id="profesion" name="profesion" class="form-control" required>
                <option value="">--Seleccione--</option>
                @foreach($profesion as $key => $value)
                    <option value="{{ $key }}" {{ $usuario->profesion_id == $key ? 'selected' : '' }}> {{ $value }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-4">
            <label class="form-label">Email Personal</label>
            <div class="form-group position-relative has-icon-right">
                <input type="email" class="form-control" name="email" value="{{ $usuario->email }}" required>
                <div class="form-control-icon">
                    <i class="bi bi-envelope"></i>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <label class="form-label">Email Institucional</label>
            <div class="form-group position-relative has-icon-right">
                <input type="email" class="form-control" name="email_institucional" value="{{ $usuario->email_institucional }}" required>
                <div class="form-control-icon">
                    <i class="bi bi-envelope-fill"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <button type="submit" class="btn btn-primary">
            <i class="bi bi-save"></i> Actualizar Usuario
        </button>
    </div>
</form> 
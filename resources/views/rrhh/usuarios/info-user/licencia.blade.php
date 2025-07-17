<form class="p-4 border rounded bg-light" id="form_licencias_medicas" method="POST" action="#">
    {{ csrf_field() }}
    <h4 class="mb-4 text-center">Registro de Licencias Médicas</h4>

    <div class="row g-3">
        <!-- Folio -->
        <div class="col-md-3">
            <label class="form-label"><i class="bi bi-file-earmark-bar-graph"></i> Folio</label>
            <div class="form-group position-relative has-icon-right">
                <input type="number" class="form-control" name="folio_licencia" autocomplete="off" required min="0">
                <div class="form-control-icon">
                    <i class="bi bi-file-earmark-bar-graph"></i>
                </div>
            </div>
        </div>
        <!-- Fecha Emision -->
        <div class="col-md-2">
            <label class="form-label"><i class="bi bi-calendar-plus"></i> Fecha de Emisión</label>
            <input type="date" class="form-control" name="fecha_emision_licencia" autocomplete="off" required>
        </div>
        <!-- Fecha Inicio -->
        <div class="col-md-2">
            <label class="form-label"><i class="bi bi-calendar-event"></i> Fecha Inicio</label>
            <input type="date" class="form-control" name="fecha_inicio_licencia" autocomplete="off" required>
        </div>
        <!-- Fecha Término -->
        <div class="col-md-2">
            <label class="form-label"><i class="bi bi-calendar-check-fill"></i> Fecha Término</label>
            <input type="date" class="form-control" name="fecha_termino_licencia" autocomplete="off" required>
        </div>
        <!-- Medico -->
        <div class="col-md-3">
            <label class="form-label"><i class="bi bi-person-badge"></i> Médico</label>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" name="medico" autocomplete="off" required>
                <div class="form-control-icon">
                    <i class="bi bi-person-badge"></i>
                </div>
            </div>
        </div>

        <!-- Licencia Tipo ID -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-journal-text"></i> Tipo de Licencia</label>
            <select name="licencia_tipo_id" class="form-select" required>
                <option value="">--Seleccione--</option>
                @foreach($licencia_tipo as $key => $value)
                    <option value="{{ $key }}"> {{ $value }}</option>
                @endforeach
                
            </select>
        </div>
        <!-- Licencia Tipo Reposo ID -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-hospital"></i> Tipo de Reposo</label>
            <select name="licencia_tipo_reposo_id" class="form-select" required>
                <option value="">--Seleccione--</option>
                @foreach($licencia_reposo as $key => $value)
                    <option value="{{ $key }}"> {{ $value }}</option>
                @endforeach
                
            </select>
        </div>
        <!-- Licencia Lugar Reposo ID -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-geo-alt"></i> Lugar de Reposo</label>
            <select name="licencia_lugar_reposo_id" class="form-select" required>
                <option value="">--Seleccione--</option>
                @foreach($licencia_lugar_reposo as $key => $value)
                    <option value="{{ $key }}"> {{ $value }}</option>
                @endforeach
            </select>
        </div>

    </div>
    <div class="mt-4">
        <button type="submit" id="btn_guardar_licencia" class="btn btn-primary">
            <i class="bi bi-save"></i> Guardar Licencia Médica
        </button>
    </div>
</form>
<form class="p-4 border rounded bg-light" id="form_orden_trabajo" method="POST" action="#">
    {{ csrf_field() }}
    <h4 class="mb-4 text-center">Registro de Orden de Trabajo</h4>

    <div class="row g-3">
        <!-- Departamento -->
        <div class="col-md-2">
            <label class="form-label"><i class="bi bi-building"></i> Departamento</label>
            <select name="departamento_id" class="form-select" required>
                <option value="">--Seleccione--</option>
                 @foreach($departamento as $key => $value)
                    <option value="{{ $key }}"> {{ $value }}</option>
                @endforeach 
            </select>
        </div>
        <!-- Tipo de Orden -->
        <div class="col-md-2">
            <label class="form-label"><i class="bi bi-list-task"></i> Tipo de Orden</label>
            <select name="tipo_orden_id" id="tipo_orden_id" class="form-select" required>
                <option value="">--Seleccione--</option>
                @foreach($tipo_ot as $key => $value)
                    <option value="{{ $key }}"> {{ $value }}</option>
                @endforeach 
            </select>
        </div>
        <!-- Fecha Inicio -->
        <div class="col-md-2">
            <label class="form-label"><i class="bi bi-calendar-date"></i> Fecha Inicio</label>
            <input type="date" class="form-control" name="fecha_inicio_ot" autocomplete="off" required>
        </div>

        <!-- Fecha Término -->
        <div class="col-md-2">
            <label class="form-label"><i class="bi bi-calendar-date-fill"></i> Fecha Término</label>
            <input type="date" class="form-control" name="fecha_termino_ot" autocomplete="off" required>
        </div>

        <!-- Jornada -->
        <div class="col-md-2">
            <label class="form-label"><i class="bi bi-clock"></i> Jornada</label>
            <div class="form-group position-relative has-icon-right">
                <input type="number" class="form-control" name="jornada" autocomplete="off" required min="1">
                <div class="form-control-icon">
                    <i class="bi bi-clock"></i>
                </div>
            </div>
        </div>
        <!-- Nivel -->
        <div class="col-md-2">
            <label class="form-label"><i class="bi bi-bar-chart-steps"></i> Nivel</label>
            <div class="form-group position-relative has-icon-right">
                <input type="number" class="form-control" name="nivel_ot" autocomplete="off" value="{{ $usuario->nivel }}" min="1">
                <div class="form-control-icon">
                    <i class="bi bi-bar-chart-steps"></i>
                </div>
            </div>
        </div>

        <!-- Monto Contrato (Conditional: Codigo Trabajo) -->
        <div class="col-md-4 conditional-field" id="monto_contrato_container">
            <label class="form-label"><i class="bi bi-currency-dollar"></i> Monto Contrato</label>
            <div class="form-group position-relative has-icon-right">
                <input type="number" class="form-control" name="monto_contrato" autocomplete="off">
                <div class="form-control-icon">
                    <i class="bi bi-currency-dollar"></i>
                </div>
            </div>
        </div>

        <!-- Valores Económicos (Conditional: Honorario) -->
        <div class="col-md-2 conditional-field" id="valor_semana_container">
            <label class="form-label"><i class="bi bi-cash"></i> Valor Semana</label>
            <div class="form-group position-relative has-icon-right">
                <input type="number" class="form-control" name="valor_semana" autocomplete="off">
                <div class="form-control-icon">
                    <i class="bi bi-cash"></i>
                </div>
            </div>
        </div>
        <div class="col-md-2 conditional-field" id="valor_semana_extension_container">
            <label class="form-label"><i class="bi bi-cash-coin"></i> Valor Semana Ext.</label>
            <div class="form-group position-relative has-icon-right">
                <input type="number" class="form-control" name="valor_semana_extension" autocomplete="off">
                <div class="form-control-icon">
                    <i class="bi bi-cash-coin"></i>
                </div>
            </div>
        </div>
        <div class="col-md-2 conditional-field" id="valor_nocturno_container">
            <label class="form-label"><i class="bi bi-moon"></i> Valor Nocturno</label>
            <div class="form-group position-relative has-icon-right">
                <input type="number" class="form-control" name="valor_nocturno" autocomplete="off">
                <div class="form-control-icon">
                    <i class="bi bi-moon"></i>
                </div>
            </div>
        </div>
        <div class="col-md-2 conditional-field" id="valor_finde_semana_container">
            <label class="form-label"><i class="bi bi-sun"></i> Valor Fin de Semana</label>
            <div class="form-group position-relative has-icon-right">
                <input type="number" class="form-control" name="valor_finde_semana" autocomplete="off">
                <div class="form-control-icon">
                    <i class="bi bi-sun"></i>
                </div>
            </div>
        </div>
        <!-- Fondo ID -->
        <div class="col-md-4 conditional-field" id="fondo_ot">
            <label class="form-label"><i class="bi bi-wallet"></i> Fondo</label>
            <select name="fondo_ot_id" class="form-select">
                <option value="">--Seleccione--</option>
                @foreach($fondo as $key => $value)
                    <option value="{{ $key }}"> {{ $value }}</option>
                @endforeach 
            </select>
        </div>

        <!-- Reemplazante ID (Conditional: Reemplazo) -->
        <div class="col-md-4 conditional-field" id="reemplazante_id_container">
            <label class="form-label"><i class="bi bi-person-fill-add"></i> Reemplazante</label>
            <select name="reemplazante_id" id="reemplazante_id" class="form-control  chosen-select" multiple>
                @foreach($usu as $key => $value)
                    <option value="{{ $key }}"> {{ $value }}</option>
                @endforeach      
            </select>
        </div>

        <!-- Motivo Reemplazo (Conditional: Reemplazo) -->
        <div class="col-md-8 conditional-field" id="motivo_reemplazo_container">
            <label class="form-label"><i class="bi bi-chat-left-text"></i> Motivo Reemplazo</label>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" name="motivo_reemplazo" autocomplete="off">
                <div class="form-control-icon">
                    <i class="bi bi-chat-left-text"></i>
                </div>
            </div>
        </div>
        <!-- Centro de Costo -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-cash-stack"></i> Centro de Costo</label>
            <select name="centro_costo_id" class="form-select" required>
                <option value="">--Seleccione--</option>
                @foreach($centro_costo as $key => $value)
                <option value="{{ $key }}"> {{ $value }}</option>
                @endforeach
            </select>
        </div>
        <!-- Profesión -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-mortarboard"></i> Profesión</label>
            <select name="profesion_ot_id" class="form-select" required>
                <option value="">--Seleccione--</option>
                 @foreach($profesion as $key => $value)
                    <option value="{{ $key }}" {{ $usuario->profesion_id == $key ? 'selected' : '' }}> {{ $value }}</option>
                @endforeach
            </select>
        </div>

        <!-- Previsión -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-shield-lock"></i> Previsión</label>
            <select name="prevision_ot_id" class="form-select" required>
                <option value="">--Seleccione--</option>
                @foreach($prevision as $key => $value)
                    <option value="{{ $key }}" {{ $usuario->prevision_id == $key ? 'selected' : '' }}> {{ $value }}</option>
                @endforeach
            </select>
        </div>

        <!-- AFP -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-building"></i> AFP</label>
            <select name="afp_ot_id" class="form-select" required>
                <option value="">--Seleccione--</option>
                @foreach($afp as $key => $value)
                    <option value="{{ $key }}" {{ $usuario->afp_id == $key ? 'selected' : '' }}> {{ $value }}</option>
                @endforeach
            </select>
        </div>

        <!-- Dirección OT -->
        <div class="col-md-8">
            <label class="form-label"><i class="bi bi-geo-alt"></i> Dirección OT</label>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" name="direccion_ot" autocomplete="off" value="{{ $usuario->direccion }}" required>
                <div class="form-control-icon">
                    <i class="bi bi-geo-alt"></i>
                </div>
            </div>
        </div>

        <!-- Teléfono OT -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-telephone"></i> Teléfono OT</label>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" name="telefono_ot" autocomplete="off" value="{{ $usuario->telefono }}" required>
                <div class="form-control-icon">
                    <i class="bi bi-telephone"></i>
                </div>
            </div>
        </div>

    </div>

    <div class="mt-4">
        <button type="submit" id="btn_guardar_ot" class="btn btn-primary">
            <i class="bi bi-save"></i> Guardar Orden de Trabajo
        </button>
    </div>
</form>
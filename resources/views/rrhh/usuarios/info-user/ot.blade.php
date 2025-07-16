<form class="p-4 border rounded bg-light" id="orden_trabajo" method="POST" action="#">
    {{ csrf_field() }}
    <h4 class="mb-4 text-center">Registro de Orden de Trabajo</h4>

    <div class="row g-3">                        
        <!-- Fecha Inicio -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-calendar-date"></i> Fecha Inicio</label>
            <input type="date" class="form-control" name="fecha_inicio" autocomplete="off" required>
        </div>

        <!-- Fecha Término -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-calendar-date-fill"></i> Fecha Término</label>
            <input type="date" class="form-control" name="fecha_termino" autocomplete="off" required>
        </div>

        <!-- Tipo de Orden -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-list-task"></i> Tipo de Orden</label>
            <select name="tipo_orden_id" class="form-select" required>
                <option value="">--Seleccione--</option>
                {{-- Assuming $tiposOrden is passed from the backend 
                @foreach($tiposOrden as $key => $value)
                    <option value="{{ $key }}"> {{ $value }}</option>
                @endforeach
                --}}
            </select>
        </div>

        <!-- Jornada -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-clock"></i> Jornada</label>
            <div class="form-group position-relative has-icon-right">
                <input type="number" class="form-control" name="jornada" autocomplete="off" required min="1">
                <div class="form-control-icon">
                    <i class="bi bi-clock"></i>
                </div>
            </div>
        </div>

        <!-- Monto Contrato -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-currency-dollar"></i> Monto Contrato</label>
            <div class="form-group position-relative has-icon-right">
                <input type="number" class="form-control" name="monto_contrato" autocomplete="off">
                <div class="form-control-icon">
                    <i class="bi bi-currency-dollar"></i>
                </div>
            </div>
        </div>

        <!-- Valores Económicos (Optional/Nullable) -->
        <div class="col-md-3">
            <label class="form-label"><i class="bi bi-cash"></i> Valor Semana</label>
            <div class="form-group position-relative has-icon-right">
                <input type="number" class="form-control" name="valor_semana" autocomplete="off">
                <div class="form-control-icon">
                    <i class="bi bi-cash"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <label class="form-label"><i class="bi bi-cash-coin"></i> Valor Semana Ext.</label>
            <div class="form-group position-relative has-icon-right">
                <input type="number" class="form-control" name="valor_semana_extension" autocomplete="off">
                <div class="form-control-icon">
                    <i class="bi bi-cash-coin"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <label class="form-label"><i class="bi bi-moon"></i> Valor Nocturno</label>
            <div class="form-group position-relative has-icon-right">
                <input type="number" class="form-control" name="valor_nocturno" autocomplete="off">
                <div class="form-control-icon">
                    <i class="bi bi-moon"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <label class="form-label"><i class="bi bi-sun"></i> Valor Fin de Semana</label>
            <div class="form-group position-relative has-icon-right">
                <input type="number" class="form-control" name="valor_finde_semana" autocomplete="off">
                <div class="form-control-icon">
                    <i class="bi bi-sun"></i>
                </div>
            </div>
        </div>

        <!-- Fondo ID -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-wallet"></i> Fondo</label>
            <select name="fondo_id" class="form-select">
                <option value="">--Seleccione--</option>
                {{-- Assuming $fondos is passed from the backend 
                @foreach($fondos as $key => $value)
                    <option value="{{ $key }}"> {{ $value }}</option>
                @endforeach
                --}}
            </select>
        </div>

        <!-- Profesión -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-mortarboard"></i> Profesión</label>
            <select name="profesion_id" class="form-select" required>
                <option value="">--Seleccione--</option>
                {{-- Assuming $profesiones is passed from the backend 
                @foreach($profesiones as $key => $value)
                    <option value="{{ $key }}"> {{ $value }}</option>
                @endforeach
                --}}
            </select>
        </div>

        <!-- Previsión -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-shield-lock"></i> Previsión</label>
            <select name="prevision_id" class="form-select" required>
                <option value="">--Seleccione--</option>
                {{-- Assuming $previsiones is passed from the backend 
                @foreach($previsiones as $key => $value)
                    <option value="{{ $key }}"> {{ $value }}</option>
                @endforeach
                --}}
            </select>
        </div>

        <!-- AFP -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-building"></i> AFP</label>
            <select name="afp_id" class="form-select" required>
                <option value="">--Seleccione--</option>
                {{-- Assuming $afps is passed from the backend 
                @foreach($afps as $key => $value)
                    <option value="{{ $key }}"> {{ $value }}</option>
                @endforeach
                --}}
            </select>
        </div>

        <!-- Dirección OT -->
        <div class="col-md-8">
            <label class="form-label"><i class="bi bi-geo-alt"></i> Dirección OT</label>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" name="direcion_ot" autocomplete="off" required>
                <div class="form-control-icon">
                    <i class="bi bi-geo-alt"></i>
                </div>
            </div>
        </div>

        <!-- Teléfono OT -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-telephone"></i> Teléfono OT</label>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" name="telefono_ot" autocomplete="off" required>
                <div class="form-control-icon">
                    <i class="bi bi-telephone"></i>
                </div>
            </div>
        </div>

        <!-- Reemplazante ID -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-person-fill-add"></i> Reemplazante</label>
            <select name="reemplazante_id" class="form-select">
                <option value="">--Seleccione--</option>
                {{-- Assuming $reemplazantes is passed from the backend 
                @foreach($reemplazantes as $key => $value)
                    <option value="{{ $key }}"> {{ $value }}</option>
                @endforeach
                --}}
            </select>
        </div>

        <!-- Motivo Reemplazo -->
        <div class="col-md-8">
            <label class="form-label"><i class="bi bi-chat-left-text"></i> Motivo Reemplazo</label>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" name="motivo_reemplazo" autocomplete="off">
                <div class="form-control-icon">
                    <i class="bi bi-chat-left-text"></i>
                </div>
            </div>
        </div>

        <!-- Departamento -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-building"></i> Departamento</label>
            <select name="departamento_id" class="form-select" required>
                <option value="">--Seleccione--</option>
                {{-- Assuming $departamentos is passed from the backend 
                @foreach($departamentos as $key => $value)
                    <option value="{{ $key }}"> {{ $value }}</option>
                @endforeach
                --}}
            </select>
        </div>

        <!-- Centro de Costo -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-cash-stack"></i> Centro de Costo</label>
            <select name="centro_costo_id" class="form-select">
                <option value="">--Seleccione--</option>
                {{-- Assuming $centrosCosto is passed from the backend 
                @foreach($centrosCosto as $key => $value)
                    <option value="{{ $key }}"> {{ $value }}</option>
                @endforeach
                --}}
            </select>
        </div>

        <!-- Nivel -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-bar-chart-steps"></i> Nivel</label>
            <div class="form-group position-relative has-icon-right">
                <input type="number" class="form-control" name="nivel" autocomplete="off" min="1">
                <div class="form-control-icon">
                    <i class="bi bi-bar-chart-steps"></i>
                </div>
            </div>
        </div>

        <!-- Estado -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-check-circle"></i> Estado</label>
            <select name="estado_id" class="form-select" required>
                <option value="">--Seleccione--</option>
                {{-- Assuming $estados is passed from the backend 
                @foreach($estados as $key => $value)
                    <option value="{{ $key }}"> {{ $value }}</option>
                @endforeach
                --}}
            </select>
        </div>

        <!-- Usuario Crea ID (Hidden or Read-only, typically set by backend) -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-person-check"></i> Creado por Usuario</label>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" name="usuario_crea_display" value="Usuario Actual" disabled>
                <input type="hidden" name="usuario_crea_id" value=""> 
                <div class="form-control-icon">
                    <i class="bi bi-person-check"></i>
                </div>
            </div>
        </div>

        <!-- Fecha Creación (Hidden or Read-only, typically set by backend) -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-calendar-plus"></i> Fecha Creación</label>
            <input type="date" class="form-control" name="fecha_creacion" value="{{ date('Y-m-d') }}" readonly>
        </div>

    </div>

    <div class="mt-4">
        <button type="submit" id="btn_guardar_ot" class="btn btn-primary">
            <i class="bi bi-save"></i> Guardar Orden de Trabajo
        </button>
    </div>
</form> 
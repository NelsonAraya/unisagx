<form class="p-4 border rounded bg-light" id="form_permisos" method="POST" action="{{ route('usuarios.permiso',$usuario->id) }}">
    {{ csrf_field() }}
    <h4 class="mb-4 text-center">Registro de Permisos</h4>

    <div class="row g-3">
        <!-- Permiso Tipo ID -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-file-earmark-text"></i> Tipo de Permiso</label>
            <select id="permiso_tipo_id" name="permiso_tipo_id" class="form-select" required>
                <option value="">--Seleccione--</option>
                @foreach($permiso_tipo as $key => $value)
                    <option value="{{ $key }}"> {{ $value }}</option>
                @endforeach
                
            </select>
        </div>
        <!-- Fecha Inicio -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-calendar-event"></i> Fecha Inicio</label>
            <input type="date" class="form-control" id="fecha_inicio_permiso" name="fecha_inicio_permiso" autocomplete="off" required>
        </div>

        <!-- Fecha Término -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-calendar-check-fill"></i> Fecha Término</label>
            <input type="date" class="form-control" id="fecha_termino_permiso" name="fecha_termino_permiso" autocomplete="off" required>
        </div>

        <!-- Motivo -->
        <div class="col-12">
            <label class="form-label"><i class="bi bi-chat-left-text"></i> Motivo</label>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" name="motivo_permiso" autocomplete="off" required>
                <div class="form-control-icon">
                    <i class="bi bi-chat-left-text"></i>
                </div>
            </div>
        </div>
        <!-- Conditional Days Table Container -->
        <div class="col-12" id="diasPermisoContainer">
            <h5 class="mb-3">Detalle Permisos Adminsitrativos</h5>
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="diasPermisoTable">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Tipo de Jornada</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Rows will be generated here by JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <button type="submit" id="btn_guardar_permiso" class="btn btn-primary">
            <i class="bi bi-save"></i> Guardar Permiso
        </button>
    </div>
</form>
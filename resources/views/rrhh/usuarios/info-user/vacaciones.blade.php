<form class="p-4 border rounded bg-light" id="form_feriados_legales" method="POST" action="#">
    {{ csrf_field() }}
    <h4 class="mb-4 text-center">Registro de Feriados Legales</h4>

    <div class="row g-3">
        <!-- Fecha Inicio -->
        <div class="col-md-6">
            <label class="form-label"><i class="bi bi-calendar-event"></i> Fecha Inicio</label>
            <input type="date" class="form-control" id="fecha_inicio_vacaciones" name="fecha_inicio_vacaciones" autocomplete="off" required>
        </div>

        <!-- Fecha Término -->
        <div class="col-md-6">
            <label class="form-label"><i class="bi bi-calendar-check-fill"></i> Fecha Término</label>
            <input type="date" class="form-control" id="fecha_termino_vacaciones" name="fecha_termino_vacaciones" autocomplete="off" required>
        </div>

        <!-- Cantidad Días -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-hash"></i> Cantidad de Días</label>
            <div class="form-group position-relative has-icon-right">
                <input type="number" class="form-control" id="cantidad_dias_vacaciones" name="cantidad_dias_vacaciones" autocomplete="off" required min="0">
                <div class="form-control-icon">
                    <i class="bi bi-hash"></i>
                </div>
            </div>
        </div>

        <!-- Días Progresivos -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-arrow-bar-up"></i> Días Progresivos (Opcional)</label>
            <div class="form-group position-relative has-icon-right">
                <input type="number" class="form-control" name="dias_progresivos" autocomplete="off" min="0" value="0">
                <div class="form-control-icon">
                    <i class="bi bi-arrow-bar-up"></i>
                </div>
            </div>
        </div>

        <!-- Días Adicionales -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-plus-circle"></i> Días Adicionales</label>
            <div class="form-group position-relative has-icon-right">
                <input type="number" class="form-control" name="dias_adicionales" autocomplete="off" min="0" value="0">
                <div class="form-control-icon">
                    <i class="bi bi-plus-circle"></i>
                </div>
            </div>
        </div>

        <!-- Fuera Ciudad -->
        <div class="col-md-6">
            <label class="form-label"><i class="bi bi-globe"></i> Fuera de Ciudad</label>
            <div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="fuera_ciudad" id="fuera_ciudad_s" value="S" required>
                    <label class="form-check-label" for="fuera_ciudad_s">Sí</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="fuera_ciudad" id="fuera_ciudad_n" value="N" checked required>
                    <label class="form-check-label" for="fuera_ciudad_n">No</label>
                </div>
            </div>
        </div>

        <!-- Observación -->
        <div class="col-12">
            <label class="form-label"><i class="bi bi-chat-dots"></i> Observación (Opcional)</label>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" name="observacion_vacaciones" autocomplete="off">
                <div class="form-control-icon">
                    <i class="bi bi-chat-dots"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <button type="submit" id="btn_guardar_feriado_legal" class="btn btn-primary">
            <i class="bi bi-save"></i> Guardar Feriado Legal
        </button>
    </div>
</form>
<!-- Section: Date Range Form -->
<form class="p-4 border rounded bg-light mb-4" id="calendar_form">
       
    <h5 class="mb-3"><i class="bi bi-calendar-range"></i> Seleccionar Rango de Fechas</h5>
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label"><i class="bi bi-calendar-date"></i> Fecha Inicio</label>
            <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio_asistencia" autocomplete="off" required>
        </div>
        <div class="col-md-6">
            <label class="form-label"><i class="bi bi-calendar-date-fill"></i> Fecha Término</label>
            <input type="date" class="form-control" name="fecha_termino" id="fecha_termino_asistencia" autocomplete="off" required>
        </div>
    </div>
    <div class="mt-4 text-end">
        <button type="submit" class="btn btn-primary">
            <i class="bi bi-calendar-plus"></i> Generar Calendario
        </button>
    </div>
</form>

<!-- Section: Calendar Display Area -->
<div class="p-4 border rounded bg-light section-separator position-relative">
    <h5 class="mb-3"><i class="bi bi-calendar-event"></i> Registros </h5>
    <div id="calendar_display_area">
        <!-- Calendar will be generated here by JavaScript -->
        <div class="loading-overlay" id="calendar_loading_overlay">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Cargando...</span>
            </div>
        </div>
    </div>
    <div id="no_date_range_message" class="alert alert-info text-center mt-3" style="display: block;">
        Por favor, selecciona un rango de fechas para generar el calendario.
    </div>
</div>


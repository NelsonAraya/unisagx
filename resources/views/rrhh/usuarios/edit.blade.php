@extends('layouts.main')
@section('css')
<style>
#diasPermisoContainer {
            display: none; /* Hidden by default */
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #dee2e6;
            border-radius: 0.5rem;
            background-color: #fff;
        }
#diasPermisoTable th, #diasPermisoTable td {
            vertical-align: middle;
}
#diasPermisoTable .form-check-inline {
            margin-right: 1rem;
}



</style>
@endsection
@section('content')
<div id="main-content">
        <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>RRHH</h3>
                            <p class="text-subtitle text-muted">Pagina Inicial unisag-x</p>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Editar Usuario</h4>
                        </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#perfil"
                                    role="tab" aria-controls="perfil" aria-selected="true">Perfil</a>
                            </li>                                       
                            <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="ordenes-tab" data-bs-toggle="tab" href="#ordenes"
                                    role="tab" aria-controls="ordenes" aria-selected="false">Ordenes de Trabajo</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="permisos-tab" data-bs-toggle="tab" href="#permisos"
                                    role="tab" aria-controls="permisos" aria-selected="false">Permisos</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="vacaciones-tab" data-bs-toggle="tab" href="#vacaciones"
                                    role="tab" aria-controls="vacaciones" aria-selected="false">Vacaciones</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="licencia-tab" data-bs-toggle="tab" href="#licencia"
                                    role="tab" aria-controls="licencia" aria-selected="false">Licencias Medicas</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="anotacion-tab" data-bs-toggle="tab" href="#anotacion"
                                    role="tab" aria-controls="anotacion" aria-selected="false">Anotaciones</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="capacitacion-tab" data-bs-toggle="tab" href="#capacitacion"
                                    role="tab" aria-controls="capacitacion" aria-selected="false">Capacitaciones</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="asistencia-tab" data-bs-toggle="tab" href="#asistencia"
                                    role="tab" aria-controls="asistencia" aria-selected="false">Asistencia</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="perfil" role="tabpanel" aria-labelledby="home-tab">
                                 @include('rrhh.usuarios.info-user.perfil')
                            </div>
                            <div class="tab-pane fade" id="ordenes" role="tabpanel" aria-labelledby="ordenes-tab">
                                 @include('rrhh.usuarios.info-user.ot')            
                            </div>
                            <div class="tab-pane fade" id="permisos" role="tabpanel" aria-labelledby="permisos-tab">
                                 @include('rrhh.usuarios.info-user.permisos')
                            </div>
                            <div class="tab-pane fade" id="vacaciones" role="tabpanel" aria-labelledby="vacaciones-tab">
                                 @include('rrhh.usuarios.info-user.vacaciones')
                            </div>
                            <div class="tab-pane fade" id="licencia" role="tabpanel" aria-labelledby="licencia-tab">
                                 @include('rrhh.usuarios.info-user.licencia')
                            </div>
                            <div class="tab-pane fade" id="anotacion" role="tabpanel" aria-labelledby="anotacion-tab">
                                 
                            </div>
                            <div class="tab-pane fade" id="capacitacion" role="tabpanel" aria-labelledby="capacitacion-tab">
                                 
                            </div>
                            <div class="tab-pane fade" id="asistencia" role="tabpanel" aria-labelledby="asistencia-tab">
                                 
                            </div>       
                        </div>
                    </div>                                                    
                </section>
        </div> 
@endsection
@section('js')
<script>

    const lastTab = localStorage.getItem('tabActiva');
    if (lastTab) {
        const triggerEl = document.querySelector(`a[href="${lastTab}"]`);
        if (triggerEl) {
            new bootstrap.Tab(triggerEl).show();
        }
        localStorage.removeItem('tabActiva'); // Limpiamos después de usar
    }

    $("#btn_guardar_permiso").click(function(e) {

        e.preventDefault(); // Evitar el envío tradicional por si acaso
        // Validamos el formulario antes de continuar
        if (!$('#form_permisos')[0].checkValidity()) {
            $('#form_permisos')[0].reportValidity();
            return;
        }

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger"
            },
            buttonsStyling: false
            });
            swalWithBootstrapButtons.fire({
            title: "¿Desea Guardar el Nuevo Permiso?",
            text: "¡No podrás revertir esto!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Si, Guardar",
            cancelButtonText: "No, Cancelar",
            reverseButtons: false
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    position: 'top-end',
                    title: 'Guardando Permiso.....',
                    showConfirmButton: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
                // Enviar por AJAX
                $.ajax({
                    type: "POST",
                    url: "{{ route('usuarios.permiso',$usuario->id) }}",  // ruta Laravel
                    data: $('#form_permisos').serialize(),  // serializa todos los inputs
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Permiso guardado exitosamente',
                            showConfirmButton: false,
                            timer: 2000
                        }).then(() => {
                            localStorage.setItem('tabActiva', '#permisos'); 
                            location.reload();
                        });
                    },
                    error: function(xhr) {
                        let mensaje = 'Mensaje Error';

                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            mensaje = `<strong>${xhr.responseJSON.message}</strong><br><small>${xhr.responseJSON.error}</small>`;
                        }

                        Swal.fire({
                            icon: 'error',
                            title: 'Error al Guardar Permiso',
                            html: mensaje
                        });
                    }
                });

            } else if (result.dismiss === Swal.DismissReason.cancel) {
                swalWithBootstrapButtons.fire({
                title: "Cancelado",
                text: "Los datos no fueron guardados",
                icon: "error"
                });
            }
        });
    }); 

    $("#btn_guardar_feriado_legal").click(function(e) {

        e.preventDefault(); // Evitar el envío tradicional por si acaso
        // Validamos el formulario antes de continuar
        if (!$('#form_feriados_legales')[0].checkValidity()) {
            $('#form_feriados_legales')[0].reportValidity();
            return;
        }
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger"
            },
            buttonsStyling: false
            });
            swalWithBootstrapButtons.fire({
            title: "¿Desea Guardar el Nuevo Feriado Legal?",
            text: "¡No podrás revertir esto!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Si, Guardar",
            cancelButtonText: "No, Cancelar",
            reverseButtons: false
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    position: 'top-end',
                    title: 'Guardando Feriado Legal.....',
                    showConfirmButton: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
                // Enviar por AJAX
                $.ajax({
                    type: "POST",
                    url: "{{ route('usuarios.feriado',$usuario->id) }}",  // ruta Laravel
                    data: $('#form_feriados_legales').serialize(),  // serializa todos los inputs
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Feriado Legal guardado exitosamente',
                            showConfirmButton: false,
                            timer: 2000
                        }).then(() => {
                            localStorage.setItem('tabActiva', '#vacaciones'); 
                            location.reload();
                        });
                    },
                    error: function(xhr) {
                        let mensaje = 'Mensaje Error';

                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            mensaje = `<strong>${xhr.responseJSON.message}</strong><br><small>${xhr.responseJSON.error}</small>`;
                        }

                        Swal.fire({
                            icon: 'error',
                            title: 'Error al Guardar Feriado Legal',
                            html: mensaje
                        });
                    }
                });

            } else if (result.dismiss === Swal.DismissReason.cancel) {
                swalWithBootstrapButtons.fire({
                title: "Cancelado",
                text: "Los datos no fueron guardados",
                icon: "error"
                });
            }
        });
    }); 


    const permisoTipoSelect = document.getElementById('permiso_tipo_id');
    const fechaInicioInput = document.getElementById('fecha_inicio_permiso');
    const fechaTerminoInput = document.getElementById('fecha_termino_permiso');
    const diasPermisoContainer = document.getElementById('diasPermisoContainer');
    const diasPermisoTableBody = document.querySelector('#diasPermisoTable tbody');

    const GOCE_SUELDO_ID = '6';

    function toggleDiasPermisoTable() {
        const selectedPermisoTipo = permisoTipoSelect.value;
        if (selectedPermisoTipo === GOCE_SUELDO_ID) {
            diasPermisoContainer.style.display = 'block';
            generateDiasPermisoTable();
        } else {
            diasPermisoContainer.style.display = 'none';
            diasPermisoTableBody.innerHTML = ''; // Clear table when hidden
        }
    }

    function generateDiasPermisoTable() {
        const fechaInicioStr = fechaInicioInput.value;
        const fechaTerminoStr = fechaTerminoInput.value;

        if (!fechaInicioStr || !fechaTerminoStr) {
            diasPermisoTableBody.innerHTML = '<tr><td colspan="2" class="text-center">Seleccione las fechas de inicio y término para ver el detalle.</td></tr>';
            return;
        }

        const startDate = new Date(fechaInicioStr + 'T00:00:00'); // Add T00:00:00 to avoid timezone issues
        const endDate = new Date(fechaTerminoStr + 'T00:00:00'); // Add T00:00:00

        if (startDate > endDate) {
            diasPermisoTableBody.innerHTML = '<tr><td colspan="2" class="text-center text-danger">La fecha de inicio no puede ser posterior a la fecha de término.</td></tr>';
            return;
        }

        diasPermisoTableBody.innerHTML = ''; // Clear existing rows

        let currentDate = new Date(startDate);
        let dayCount = 0;

        while (currentDate <= endDate) {
            const dateString = currentDate.toISOString().split('T')[0]; // YYYY-MM-DD
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${dateString}</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jornadas[${dateString}]" id="jornada_${dateString}_completo" value="COMPLETO" checked>
                        <label class="form-check-label" for="jornada_${dateString}_completo">Día Completo</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jornadas[${dateString}]" id="jornada_${dateString}_manana" value="MAÑANA">
                        <label class="form-check-label" for="jornada_${dateString}_manana">Mañana</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jornadas[${dateString}]" id="jornada_${dateString}_tarde" value="TARDE">
                        <label class="form-check-label" for="jornada_${dateString}_tarde">Tarde</label>
                    </div>
                </td>
            `;
            diasPermisoTableBody.appendChild(row);
            currentDate.setDate(currentDate.getDate() + 1); // Move to the next day
            dayCount++;
        }

        if (dayCount === 0) {
            diasPermisoTableBody.innerHTML = '<tr><td colspan="2" class="text-center">No hay días en el rango seleccionado.</td></tr>';
        }
    }

    // Event Listeners
    permisoTipoSelect.addEventListener('change', toggleDiasPermisoTable);
    fechaInicioInput.addEventListener('change', generateDiasPermisoTable);
    fechaTerminoInput.addEventListener('change', generateDiasPermisoTable);

    // Initial call to set visibility and generate table if dates are pre-filled
    toggleDiasPermisoTable();


    const fechaInicioVacaciones = document.getElementById('fecha_inicio_vacaciones');
    const fechaTerminoVacaciones = document.getElementById('fecha_termino_vacaciones');
    const cantidadDiasInput = document.getElementById('cantidad_dias_vacaciones');

    function calculateWeekdays() {
        const fechaInicioStr = fechaInicioVacaciones.value;
        const fechaTerminoStr = fechaTerminoVacaciones.value;

        if (!fechaInicioStr || !fechaTerminoStr) {
            cantidadDiasInput.value = ''; // Clear if dates are not set
            return;
        }

        const startDate = new Date(fechaInicioStr + 'T00:00:00'); // Add T00:00:00 to avoid timezone issues
        const endDate = new Date(fechaTerminoStr + 'T00:00:00'); // Add T00:00:00

        if (startDate > endDate) {
            cantidadDiasInput.value = 0; // Set to 0 if end date is before start date
            return;
        }

        let weekdaysCount = 0;
        let currentDate = new Date(startDate);

        while (currentDate <= endDate) {
            const dayOfWeek = currentDate.getDay(); // 0 = Sunday, 1 = Monday, ..., 6 = Saturday
            if (dayOfWeek !== 0 && dayOfWeek !== 6) { // Check if it's not Saturday (6) or Sunday (0)
                weekdaysCount++;
            }
            currentDate.setDate(currentDate.getDate() + 1); // Move to the next day
        }

        cantidadDiasInput.value = weekdaysCount;
    }
    // Add event listeners to trigger calculation on date change
    fechaInicioVacaciones.addEventListener('change', calculateWeekdays);
    fechaTerminoVacaciones.addEventListener('change', calculateWeekdays);
    // Initial calculation in case dates are pre-filled on load
    calculateWeekdays();

  
</script> 
@endsection
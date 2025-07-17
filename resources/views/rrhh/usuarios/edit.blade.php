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
#meritoPanel {
    display: none; /* Hidden by default */
    margin-top: 20px;
    padding: 15px;
    border: 1px solid #dee2e6;
    border-radius: 0.5rem; 
    background-color: #fff;
}
#meritoPanel .nav-link {
    border-radius: 0.5rem 0.5rem 0 0;
}
#meritoPanel .tab-pane {
    padding: 15px;
    border: 1px solid #dee2e6; 
    border-top: none;
    border-radius: 0 0 0.5rem 0.5rem;
    background-color: #f8f9fa;
}
#meritoPanel .form-check {
    margin-bottom: 0.5rem;
}
#meritoPanel .nav-link:focus {
    outline: none;
    box-shadow: none;
}

/* Bank Account Section Styling */
.bank-account-item {
    border: 1px solid #e9ecef;
    border-radius: 0.5rem;
    padding: 15px;
    margin-bottom: 15px;
    background-color: #fefefe;
    box-shadow: 0 0.05rem 0.1rem rgba(0, 0, 0, 0.05);
}
.bank-account-item .btn-danger {
    border-radius: 0.5rem;
}

.status-select-wrapper {
    background-color: #f0f0f0; /* Light grey default */
    border: 1px solid transparent;  /* Agrega borde por defecto */
    border-radius: 0.25rem;
    padding: 0.5rem;
    transition: background-color 0.3s ease, border-color 0.3s ease;
}

.status-active {
    background-color: #d4edda; /* Light green */
    border-color: #28a745;     /* Verde */
}

.status-inactive {
    background-color: #f8d7da; /* Light red */
    border-color: #dc3545;     /* Rojo */
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
                                 @include('rrhh.usuarios.info-user.anotaciones')
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
    
    $("#solicitado_por").chosen({
		max_selected_options: 1,
		width: "100%"

	});

    $("#reemplazante_id").chosen({
		max_selected_options: 1,
		width: "100%"

	});

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

    $("#btn_guardar_licencia").click(function(e) {

        e.preventDefault(); // Evitar el envío tradicional por si acaso
        // Validamos el formulario antes de continuar
        if (!$('#form_licencias_medicas')[0].checkValidity()) {
            $('#form_licencias_medicas')[0].reportValidity();
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
            title: "¿Desea Guardar la Nueva Licencia Medica?",
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
                    title: 'Guardando Licencia Medica.....',
                    showConfirmButton: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
                // Enviar por AJAX
                $.ajax({
                    type: "POST",
                    url: "{{ route('usuarios.licencia',$usuario->id) }}",  // ruta Laravel
                    data: $('#form_licencias_medicas').serialize(),  // serializa todos los inputs
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Licencia Medica guardada exitosamente',
                            showConfirmButton: false,
                            timer: 2000
                        }).then(() => {
                            localStorage.setItem('tabActiva', '#licencia'); 
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

    $("#btn_guardar_anotacion").click(function(e) {

        e.preventDefault(); // Evitar el envío tradicional por si acaso
        // Validamos el formulario antes de continuar
        if (!$('#form_anotaciones')[0].checkValidity()) {
            $('#form_anotaciones')[0].reportValidity();
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
            title: "¿Desea Guardar la Nueva Anotacion?",
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
                    title: 'Guardando Anotacion.....',
                    showConfirmButton: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
                // Enviar por AJAX
                $.ajax({
                    type: "POST",
                    url: "{{ route('usuarios.anotacion',$usuario->id) }}",  // ruta Laravel
                    data: $('#form_anotaciones').serialize(),  // serializa todos los inputs
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Anotacion guardada exitosamente',
                            showConfirmButton: false,
                            timer: 2000
                        }).then(() => {
                            localStorage.setItem('tabActiva', '#anotacion'); 
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
                            title: 'Error al Guardar Anotacion',
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

    $("#btn_guardar_cuenta_bancaria").click(function(e) {

        e.preventDefault(); // Evitar el envío tradicional por si acaso
        // Validamos el formulario antes de continuar
        if (!$('#form_cuenta_bancaria')[0].checkValidity()) {
            $('#form_cuenta_bancaria')[0].reportValidity();
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
            title: "¿Desea Guardar la Nueva Cuenta Bancaria?",
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
                    title: 'Guardando Cuenta Bancaria.....',
                    showConfirmButton: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
                // Enviar por AJAX
                $.ajax({
                    type: "POST",
                    url: "{{ route('usuarios.cbancaria',$usuario->id) }}",  // ruta Laravel
                    data: $('#form_cuenta_bancaria').serialize(),  // serializa todos los inputs
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Cuenta Bancaria guardada exitosamente',
                            showConfirmButton: false,
                            timer: 2000
                        }).then(() => {
                            localStorage.setItem('tabActiva', '#perfil'); 
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
                            title: 'Error al Guardar Anotacion',
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

    $("#btn_actualizar_perfil").click(function(e) {

        e.preventDefault(); // Evitar el envío tradicional por si acaso
        // Validamos el formulario antes de continuar
        if (!$('#form_actualizar_perfil')[0].checkValidity()) {
            $('#form_actualizar_perfil')[0].reportValidity();
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
            title: "¿Desea Actualizar el Usuario?",
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
                    title: 'Actualizando Usuario.....',
                    showConfirmButton: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
                // Enviar por AJAX
                $.ajax({
                    type: "POST",
                    url: "{{ route('usuarios.update',$usuario->id) }}",  // ruta Laravel
                    data: $('#form_actualizar_perfil').serialize(),  // serializa todos los inputs
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Usuario Actualizado exitosamente',
                            showConfirmButton: false,
                            timer: 2000
                        }).then(() => {
                            localStorage.setItem('tabActiva', '#perfil'); 
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

    const anotacionTipoSelect = document.getElementById('anotacion_tipo_id');
    const meritoPanel = document.getElementById('meritoPanel');
    const anotacionTextarea = document.getElementById('anotacion_textarea');
    const meritoCheckboxes = document.querySelectorAll('.merito-checkbox');
    const MERITO_ID = '1'; 
    // Object to store selected items by category
    const selectedMeritoItems = {
        "I - Competencia": [],
        "II - Conducta Funcionaria": [],
        "III - Desempeño en Equipos de Trabajo": []
    };

    function updateAnotacionTextarea() {
        let textContent = [];
        for (const category in selectedMeritoItems) {
            if (selectedMeritoItems[category].length > 0) {
                // Format each category with a header and list items
                textContent.push(`${category}:\n- ${selectedMeritoItems[category].join('\n- ')}`);
            }
        }
        anotacionTextarea.value = textContent.join('\n\n'); // Add double line break between categories
    }

    function toggleMeritoPanel() {
        // Log the selected value to the console for debugging
        console.log('Selected Anotacion Tipo ID:', anotacionTipoSelect.value);
        console.log('Expected MERITO_ID:', MERITO_ID);

        // Clear the textarea on ANY change of the dropdown selection
        anotacionTextarea.value = '';

        // Also clear the selectedMeritoItems and uncheck checkboxes if not "MERITO"
        if (anotacionTipoSelect.value !== MERITO_ID) {
            meritoPanel.style.display = 'none';
            meritoCheckboxes.forEach(checkbox => {
                checkbox.checked = false;
            });
            for (const category in selectedMeritoItems) {
                selectedMeritoItems[category] = [];
            }
        } else {
            meritoPanel.style.display = 'block';
            // If switching back to MERITO, re-populate textarea based on existing selections (if any)
            updateAnotacionTextarea();
        }
    }

    meritoCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const category = this.dataset.category;
            const value = this.value;

            if (this.checked) {
                if (!selectedMeritoItems[category].includes(value)) {
                    selectedMeritoItems[category].push(value);
                }
            } else {
                selectedMeritoItems[category] = selectedMeritoItems[category].filter(item => item !== value);
            }
            updateAnotacionTextarea();
        });
    });

    // Event listener for the Tipo de Anotación select
    anotacionTipoSelect.addEventListener('change', toggleMeritoPanel);
    // Initial call to set visibility on page load
    toggleMeritoPanel();


    const tipoOrdenSelect = document.getElementById('tipo_orden_id');

    // Containers for conditional fields
    const montoContratoContainer = document.getElementById('monto_contrato_container');
    const valorSemanaContainer = document.getElementById('valor_semana_container');
    const valorSemanaExtensionContainer = document.getElementById('valor_semana_extension_container');
    const valorNocturnoContainer = document.getElementById('valor_nocturno_container');
    const valorFindeSemanaContainer = document.getElementById('valor_finde_semana_container');
    const reemplazanteIdContainer = document.getElementById('reemplazante_id_container');
    const motivoReemplazoContainer = document.getElementById('motivo_reemplazo_container');
    const fondoIdContainer = document.getElementById('fondo_ot'); 

    const HONORARIO_ID = '4'; 
    const CODIGO_TRABAJO_ID = '5'; 
    const REEMPLAZO_ID = '3'; 

    function toggleConditionalFields() {
        const selectedTipoOrden = tipoOrdenSelect.value;

        // Hide all conditional fields first
        montoContratoContainer.style.display = 'none';
        valorSemanaContainer.style.display = 'none';
        valorSemanaExtensionContainer.style.display = 'none';
        valorNocturnoContainer.style.display = 'none';
        valorFindeSemanaContainer.style.display = 'none';
        reemplazanteIdContainer.style.display = 'none';
        motivoReemplazoContainer.style.display = 'none';
        fondoIdContainer.style.display = 'none';
        // Show fields based on selected type
        if (selectedTipoOrden === HONORARIO_ID) {
            valorSemanaContainer.style.display = 'block';
            valorSemanaExtensionContainer.style.display = 'block';
            valorNocturnoContainer.style.display = 'block';
            valorFindeSemanaContainer.style.display = 'block';
             fondoIdContainer.style.display = 'block';
        } else if (selectedTipoOrden === CODIGO_TRABAJO_ID) {
            montoContratoContainer.style.display = 'block';
        } else if (selectedTipoOrden === REEMPLAZO_ID) {
            reemplazanteIdContainer.style.display = 'block';
            motivoReemplazoContainer.style.display = 'block';
        }
    }

    // Add event listener to the Tipo de Orden select
    tipoOrdenSelect.addEventListener('change', toggleConditionalFields);

    // Initial call to set visibility on page load
    toggleConditionalFields();


</script> 
@endsection
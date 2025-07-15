@extends('layouts.main')

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
                    <form class="p-4 border rounded bg-light" id="form_usuarios"  method="POST" action="{{ route('usuarios.store') }}">
                        {{ csrf_field() }}
                        <h4 class="mb-3">Registro de Usuario</h4>

                        <div class="row g-3">
                            <div class="col-md-2">
                                <label class="form-label"><i class="bi bi-credit-card-2-front"></i> RUT</label>
                                <div class="form-group position-relative has-icon-right"> 
                                    <input type="text" class="form-control" name="rut" autocomplete="off" required>
                                    <div class="form-control-icon"> 
                                        <i class="bi bi-credit-card-2-front"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><i class="bi bi-person"></i> Nombres</label>
                                <div class="form-group position-relative has-icon-right"> 
                                    <input type="text" class="form-control" name="nombres" autocomplete="off" required>
                                    <div class="form-control-icon"> 
                                        <i class="bi bi-person"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label"><i class="bi bi-person-badge"></i> Apellido Paterno</label>
                                <div class="form-group position-relative has-icon-right"> 
                                    <input type="text" class="form-control" name="paterno" autocomplete="off" required>
                                    <div class="form-control-icon"> 
                                        <i class="bi bi-person-badge"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label"><i class="bi bi-person-badge-fill"></i> Apellido Materno</label>
                                <div class="form-group position-relative has-icon-right"> 
                                    <input type="text" class="form-control" name="materno" autocomplete="off" required>
                                    <div class="form-control-icon"> 
                                        <i class="bi bi-person-badge-fill"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label"><i class="bi bi-calendar-date"></i> Fecha Nacimiento</label>
                                <input type="date" class="form-control" name="fecha_nacimiento" autocomplete="off" required>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label"><i class="bi bi-telephone"></i> Teléfono</label>
                                <div class="form-group position-relative has-icon-right"> 
                                    <input type="text" class="form-control" name="telefono" autocomplete="off" required>
                                    <div class="form-control-icon"> 
                                        <i class="bi bi-telephone"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <label class="form-label"><i class="bi bi-geo-alt"></i> Dirección</label>
                                <div class="form-group position-relative has-icon-right"> 
                                    <input type="text" class="form-control" name="direccion" autocomplete="off" required>
                                    <div class="form-control-icon"> 
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label"><i class="bi bi-gender-ambiguous"></i> Sexo</label>
                                <select name="sexo" class="form-select" required>
                                        <option value="">--Seleccione--</option>
                                            @foreach($sexo as $key => $value)
                                                <option value="{{ $key }}"> {{ $value }}</option>
                                            @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label"><i class="bi bi-shield-lock"></i> AFP</label>
                                <select name="afp" class="form-select" required>
                                        <option value="">--Seleccione--</option>
                                            @foreach($afp as $key => $value)
                                                <option value="{{ $key }}"> {{ $value }}</option>
                                            @endforeach
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label class="form-label"><i class="bi bi-shield-lock"></i> Previsión</label>
                                <select name="prevision" class="form-select" required>
                                        <option value="">--Seleccione--</option>
                                            @foreach($prevision as $key => $value)
                                                <option value="{{ $key }}"> {{ $value }}</option>
                                            @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label"><i class="bi bi-calendar-check"></i> Fecha Ingreso</label>
                                <input type="date" class="form-control" name="fecha_ingreso" autocomplete="off" required>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label"><i class="bi bi-people-fill"></i> Estado Civil</label>
                                <select name="estado_civil" class="form-select" required>
                                        <option value="">--Seleccione--</option>
                                            @foreach($civil as $key => $value)
                                                <option value="{{ $key }}"> {{ $value }}</option>
                                            @endforeach
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label class="form-label"><i class="bi bi-flag"></i> Nacionalidad</label>
                                <select name="nacionalidad" class="form-select" required>
                                        <option value="">--Seleccione--</option>
                                            @foreach($nacionalidad as $key => $value)
                                                <option value="{{ $key }}"> {{ $value }}</option>
                                            @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label"><i class="bi bi-mortarboard"></i> Profesión</label>
                                <select id="profesion" name="profesion" class="form-control" required>
                                        <option value="">--Seleccione--</option>
                                            @foreach($profesion as $key => $value)
                                                <option value="{{ $key }}"> {{ $value }}</option>
                                            @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><i class="bi bi-envelope"></i> Email Personal</label>
                                <div class="form-group position-relative has-icon-right"> 
                                    <input type="email" class="form-control" name="email" autocomplete="off" required>
                                    <div class="form-control-icon"> 
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><i class="bi bi-envelope-fill"></i> Email Institucional</label>
                                <div class="form-group position-relative has-icon-right"> 
                                    <input type="email" class="form-control" name="email_institucional" autocomplete="off">
                                    <div class="form-control-icon"> 
                                        <i class="bi bi-envelope-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="button" id="btn_guardar" class="btn btn-primary">
                                <i class="bi bi-save"></i> Guardar Usuario
                            </button>
                        </div>
                    </form>                       
                </section>
        </div> 
@endsection
@section('js')
    <script>
       /*  SELECT MULTIPLE
        $("#profesion").chosen({
		    max_selected_options: 9,
		    width: "100%"

	    }); 
        */
       $("#btn_guardar").click(function(e) {

            e.preventDefault(); // Evitar el envío tradicional por si acaso

            // Validamos el formulario antes de continuar
            if (!$('#form_usuarios')[0].checkValidity()) {
                $('#form_usuarios')[0].reportValidity();
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
                title: "¿Desea Guardar el Nuevo Usuario?",
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
                        title: 'Guardando Usuario.....',
                        showConfirmButton: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });

                    // Enviar por AJAX
                    $.ajax({
                        type: "POST",
                        url: "{{ route('usuarios.store') }}",  // ruta Laravel
                        data: $('#form_usuarios').serialize(),  // serializa todos los inputs
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Usuario guardado exitosamente',
                                showConfirmButton: false,
                                timer: 2000
                            }).then(() => {
                                // Opcional: recargar página o redirigir
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
                                    title: 'Error al Guardar Usuario',
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

        
    </script> 
@endsection
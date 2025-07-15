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
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Editar Usuario</h4>
                        </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home"
                                    role="tab" aria-controls="home" aria-selected="true">Perfil</a>
                            </li>                                       
                            <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile"
                                    role="tab" aria-controls="profile" aria-selected="false">Documentos</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact"
                                    role="tab" aria-controls="contact" aria-selected="false">Asistencia</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                            </div>
                        </div>
                </div>    
                        
                    


                                           
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
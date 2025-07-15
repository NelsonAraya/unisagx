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
                           <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-0">Listado de Usuarios</h4>
                                <a href="{{ route('usuarios.create') }}" class="btn btn-success" role="button">Nuevo Usuario</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="tbl_usuario">
                                            <thead>
                                                <tr>
                                                    <th>Rut</th>
                                                    <th>Nombres</th>
                                                    <th>Paterno</th>
                                                    <th>Materno</th>
                                                    <th>Estado</th>
                                                    <th>Ver</th>
                                                </tr>
                                            </thead>
                                        <tbody>
                                    
                                        </tbody>
                                    </table>
                                </div>    
                            </div>
                        </div>
                </section>
        </div> 
@endsection
@section('js')
    <script>
        $('#tbl_usuario').DataTable({
            "ajax":'{{ route('usuarios.all') }}',
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
            },
            "ordering": false,
            "columns": [
                { "data": "rut" },
                { "data": "nombres" },
                { "data": "apellidop" },
                { "data": "apellidom" },
                { "data": "estado.nombre", 
                  "render": function(data, type, row, meta) {
                        let color = 'secondary'; // gris por defecto
                        if(data.toLowerCase() === 'activo') color = 'success';
                        else if(data.toLowerCase() === 'inactivo') color = 'danger';
              
                    return `<span class="badge bg-${color}">${data}</span>`;
                }
                },
                {
                    "targets": -1,
                    "data": null,
                    "render": function(data, type, row) {
                        let template = `<a href="{{ route('usuarios.edit', 'xid') }}" class="btn btn-info">
                                            <i class="bi bi-eye"></i>
                                        </a>`;
                        return template.replace('xid', row.id);
                    }
                }
            ],
        });       
    </script> 
@endsection
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
                                    <tr>
                                        <td>17096233-8</td>
                                        <td>Nelson Antonio</td>
                                        <td>Araya</td>
                                        <td>Vacca</td>
                                        <td>
                                            <span class="badge bg-success">Activo</span>
                                        </td>
                                        <td> 
                                            <a href="#" class="btn btn-info justify-content-center">
		                                        <span class="bi bi-person" aria-hidden="true"></span>
		                                    </a>
                                        </td>
                                    </tr> 
                                </tbody>
                               </table>    
                            </div>
                        </div>
                </section>
        </div> 
@endsection
@section('js')
    <script>
        let dataTable = new simpleDatatables.DataTable("#tbl_usuario",{
            perPageSelect: false,
            perPage: 10,           // Define cuántos registros quieres mostrar por página
            labels: {
                placeholder: "Buscar...",
                perPage: "Mostrar {select} registros por página",
                noRows: "No se encontraron registros",
                info: "Mostrando {start} a {end} de {rows} registros",
            },
            sortable: false
        });
        
    </script> 
@endsection
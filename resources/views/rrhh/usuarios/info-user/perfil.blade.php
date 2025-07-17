<form class="p-4 border rounded bg-light" id="form_actualizar_perfil" method="POST" action="{{ route('usuarios.update', $usuario->id) }}">
    @csrf
    @method('PUT')
    <h5 class="mb-3">Actualizacion Datos Personales</h5>

    <div class="row g-3">
        <div class="col-md-2">
            <label class="form-label">RUT</label>
            <div class="form-group position-relative has-icon-right">
                <input type="text" class="form-control" name="rut" value="{{ $usuario->rutUsuario() }}" readonly>
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
                <input type="email" class="form-control" name="email" value="{{ $usuario->email }}" >
                <div class="form-control-icon">
                    <i class="bi bi-envelope"></i>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <label class="form-label">Email Institucional</label>
            <div class="form-group position-relative has-icon-right">
                <input type="email" class="form-control" name="email_institucional" value="{{ $usuario->email_institucional }}">
                <div class="form-control-icon">
                    <i class="bi bi-envelope-fill"></i>
                </div>
            </div>
        </div>

        <!-- New: Estado de Usuario -->
        <div class="col-md-2">
            <label class="form-label"><i class="bi bi-person-check-fill"></i> Estado de Usuario</label>
            <div class="status-select-wrapper {{ $usuario->estado_id == 1 ? 'status-active' : ($usuario->estado_id == 2 ? 'status-inactive' : '') }}">
                <select name="estado_id" id="user_status_select" class="form-select" required>
                    <option value="">--Seleccione--</option>
                    @foreach($estado_usuario as $key => $value)
                        <option value="{{ $key }}" {{ $usuario->estado_id == $key ? 'selected' : '' }}> {{ $value }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <hr class="my-4">
        <!-- New: Cuentas Bancarias Section -->
        <h5 class="mb-3">Cuentas Bancarias</h5>
        <div id="bank_accounts_container">
            {{-- Iterate over existing bank accounts if any --}}
            @if(isset($usuario->cuentas_bancarias) && $usuario->cuentas_bancarias->count() > 0)
                    <div class="row fw-bold">
                        <div class="col-md-4">Banco</div>
                        <div class="col-md-4">Tipo de Cuenta</div>
                        <div class="col-md-3">Número de Cuenta</div>
                        <div class="col-md-1">Acción</div>
                    </div>
                @foreach($usuario->cuentas_bancarias as $cuenta)
                    <div class="row g-3 bank-account-item align-items-center mt-2">
                        <div class="col-md-4">
                            <p class="form-control-plaintext m-0">{{ $cuenta->banco->nombre }}</p>
                        </div>
                        <div class="col-md-4">
                            <p class="form-control-plaintext m-0">{{ $cuenta->banco_cuenta->nombre }}</p>
                        </div>
                        <div class="col-md-3">
                            <p class="form-control-plaintext m-0">{{ $cuenta->numero_cuenta }}</p>
                        </div>
                        <div class="col-md-1 d-flex align-items-end">
                            <button type="button" class="btn btn-danger w-100 remove-bank-account">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>





    <div class="mt-4 d-flex justify-content-start gap-2">
        <button type="submit" id="btn_actualizar_perfil" class="btn btn-primary">
            <i class="bi bi-save"></i> Actualizar Usuario
        </button>
        <button type="button" id="add_bank_account_modal_btn" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bankAccountStandaloneModal">
            <i class="bi bi-plus-circle"></i> Agregar Cuenta Bancaria
        </button>
    </div>
</form>

<div class="modal fade" id="bankAccountStandaloneModal" tabindex="-1" aria-labelledby="bankAccountStandaloneModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bankAccountStandaloneModalLabel">Detalles de Cuenta Bancaria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form  method="POST" id="form_cuenta_bancaria" action="{{ route('usuarios.cbancaria', $usuario->id) }}">
                     {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="modal_banco_id_standalone" class="form-label">Banco</label>
                        <select id="modal_banco_id_standalone" name="banco" class="form-select" required>
                            <option value="">--Seleccione--</option>
                            @foreach($banco as $key => $value)
                            <option value="{{ $key }}"> {{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="modal_banco_cuenta_tipo_id_standalone" class="form-label">Tipo de Cuenta</label>
                        <select id="modal_banco_cuenta_tipo_id_standalone" name="banco_cuenta" class="form-select" required>
                            <option value="">--Seleccione--</option>
                            @foreach($banco_cuenta as $key => $value)
                            <option value="{{ $key }}"> {{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="modal_numero_cuenta_standalone" class="form-label">Número de Cuenta</label>
                        <input type="text" id="modal_numero_cuenta_standalone" name="numero_cuenta" class="form-control" autocomplete="off"  required>
                    </div>         
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" id="btn_guardar_cuenta_bancaria">Guardar Cuenta</button>
            </div>
                </form>
        </div>
    </div>
</div>
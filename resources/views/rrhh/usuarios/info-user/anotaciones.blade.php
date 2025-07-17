<form class="p-4 border rounded bg-light" id="form_anotaciones" method="POST" action="{{ route('usuarios.anotacion',$usuario->id) }}">
    {{ csrf_field() }}
    <h4 class="mb-4 text-center">Registro de Anotaciones</h4>

    <div class="row g-3">
        <!-- Anotacion Tipo ID -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-tag"></i> Tipo de Anotación</label>
            <select name="anotacion_tipo_id" id="anotacion_tipo_id" class="form-select" required>
                <option value="">--Seleccione--</option>
                @foreach($anotacion_tipo as $key => $value)
                    <option value="{{ $key }}"> {{ $value }}</option>
                @endforeach
            </select>
        </div>
        <!-- Fecha Anotacion -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-calendar-date"></i> Fecha de Anotación</label>
            <input type="date" class="form-control" name="fecha_anotacion" autocomplete="off" required>
        </div>
        <!-- Solicitado Por -->
        <div class="col-md-4">
            <label class="form-label"><i class="bi bi-person-lines-fill"></i> Solicitado Por</label>
            <select name="solicitado_por" id="solicitado_por" class="form-control  chosen-select" multiple required>
                @foreach($usu as $key => $value)
                    <option value="{{ $key }}"> {{ $value }}</option>
                @endforeach      
            </select>
        </div>
        <!-- Conditional Merito Panel - Moved above textarea -->
        <div class="col-12" id="meritoPanel">
            <h5 class="mb-3">Seleccionar Aspectos de Mérito</h5>
            <ul class="nav nav-tabs" id="meritoTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="competencia-tab" data-bs-toggle="tab" data-bs-target="#competencia" type="button" role="tab" aria-controls="competencia" aria-selected="true">Competencia</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="conducta-tab" data-bs-toggle="tab" data-bs-target="#conducta" type="button" role="tab" aria-controls="conducta" aria-selected="false">Conducta Funcionaria</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="desempeno-tab" data-bs-toggle="tab" data-bs-target="#desempeno" type="button" role="tab" aria-controls="desempeno" aria-selected="false">Desempeño en Equipos</button>
                </li>
            </ul>
            <div class="tab-content" id="meritoTabsContent">
                <div class="tab-pane fade show active" id="competencia" role="tabpanel" aria-labelledby="competencia-tab">
                    <div class="form-check">
                        <input class="form-check-input merito-checkbox" type="checkbox" value="Cantidad de Trabajo" id="comp_cantidad_trabajo" data-category="I - Competencia">
                        <label class="form-check-label" for="comp_cantidad_trabajo">A) Cantidad de Trabajo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input merito-checkbox" type="checkbox" value="Calidad del Trabajo" id="comp_calidad_trabajo" data-category="I - Competencia">
                        <label class="form-check-label" for="comp_calidad_trabajo">B) Calidad del Trabajo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input merito-checkbox" type="checkbox" value="Atención y Trato al Usuario" id="comp_atencion_usuario" data-category="I - Competencia">
                        <label class="form-check-label" for="comp_atencion_usuario">C) Atención y Trato al Usuario</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input merito-checkbox" type="checkbox" value="Preparación y Conocimientos" id="comp_preparacion_conocimiento" data-category="I - Competencia">
                        <label class="form-check-label" for="comp_preparacion_conocimiento">D) Preparación y Conocimientos</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input merito-checkbox" type="checkbox" value="Interés e Iniciativa en el Trabajo" id="comp_interes_iniciativa" data-category="I - Competencia">
                        <label class="form-check-label" for="comp_interes_iniciativa">E) Interés e Iniciativa en el Trabajo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input merito-checkbox" type="checkbox" value="Responsabilidad" id="comp_responsabilidad" data-category="I - Competencia">
                        <label class="form-check-label" for="comp_responsabilidad">F) Responsabilidad</label>
                    </div>
                </div>
                <div class="tab-pane fade" id="conducta" role="tabpanel" aria-labelledby="conducta-tab">
                    <div class="form-check">
                        <input class="form-check-input merito-checkbox" type="checkbox" value="Colaboración" id="cond_colaboracion" data-category="II - Conducta Funcionaria">
                        <label class="form-check-label" for="cond_colaboracion">A) Colaboración</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input merito-checkbox" type="checkbox" value="Puntualidad" id="cond_puntualidad" data-category="II - Conducta Funcionaria">
                        <label class="form-check-label" for="cond_puntualidad">B) Puntualidad</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input merito-checkbox" type="checkbox" value="Asistencia y Permanencia" id="cond_asistencia_permanencia" data-category="II - Conducta Funcionaria">
                        <label class="form-check-label" for="cond_asistencia_permanencia">C) Asistencia y Permanencia</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input merito-checkbox" type="checkbox" value="Presentación Personal" id="cond_presentacion_personal" data-category="II - Conducta Funcionaria">
                        <label class="form-check-label" for="cond_presentacion_personal">D) Presentación Personal</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input merito-checkbox" type="checkbox" value="Adaptación al Trabajo" id="cond_adaptacion_trabajo" data-category="II - Conducta Funcionaria">
                        <label class="form-check-label" for="cond_adaptacion_trabajo">E) Adaptación al Trabajo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input merito-checkbox" type="checkbox" value="Comportamiento" id="cond_comportamiento" data-category="II - Conducta Funcionaria">
                        <label class="form-check-label" for="cond_comportamiento">F) Comportamiento</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input merito-checkbox" type="checkbox" value="Actuación Social" id="cond_actuacion_social" data-category="II - Conducta Funcionaria">
                        <label class="form-check-label" for="cond_actuacion_social">G) Actuación Social</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input merito-checkbox" type="checkbox" value="Cumplimiento de Normas e Instrucciones" id="cond_cumplimiento_normas" data-category="II - Conducta Funcionaria">
                        <label class="form-check-label" for="cond_cumplimiento_normas">H) Cumplimiento de Normas e Instrucciones</label>
                    </div>
                </div>
                <div class="tab-pane fade" id="desempeno" role="tabpanel" aria-labelledby="desempeno-tab">
                    <div class="form-check">
                        <input class="form-check-input merito-checkbox" type="checkbox" value="Integración" id="des_integracion" data-category="III - Desempeño en Equipos de Trabajo">
                        <label class="form-check-label" for="des_integracion">A) Integración</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input merito-checkbox" type="checkbox" value="Liderazgo Positivo" id="des_liderazgo_positivo" data-category="III - Desempeño en Equipos de Trabajo">
                        <label class="form-check-label" for="des_liderazgo_positivo">B) Liderazgo Positivo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input merito-checkbox" type="checkbox" value="Relaciones Interpersonales" id="des_relaciones_interpersonales" data-category="III - Desempeño en Equipos de Trabajo">
                        <label class="form-check-label" for="des_relaciones_interpersonales">C) Relaciones Interpersonales</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input merito-checkbox" type="checkbox" value="Comunicaciones" id="des_comunicaciones" data-category="III - Desempeño en Equipos de Trabajo">
                        <label class="form-check-label" for="des_comunicaciones">D) Comunicaciones</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input merito-checkbox" type="checkbox" value="Participación" id="des_participacion" data-category="III - Desempeño en Equipos de Trabajo">
                        <label class="form-check-label" for="des_participacion">E) Participación</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input merito-checkbox" type="checkbox" value="Cumplimiento de Metas" id="des_cumplimiento_metas" data-category="III - Desempeño en Equipos de Trabajo">
                        <label class="form-check-label" for="des_cumplimiento_metas">F) Cumplimiento de Metas</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Anotacion (Textarea for longer text) -->
        <div class="col-12">
            <label class="form-label"><i class="bi bi-journal-text"></i> Anotación</label>
            <textarea class="form-control" name="anotacion" id="anotacion_textarea" rows="10" required></textarea>
        </div>
    </div>

    <div class="mt-4">
        <button type="submit" id="btn_guardar_anotacion" class="btn btn-primary">
            <i class="bi bi-save"></i> Guardar Anotación
        </button>
    </div>
</form>
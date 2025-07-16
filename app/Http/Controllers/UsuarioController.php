<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nacionalidad;
use App\Models\estado_civiles;
use App\Models\previsiones;
use App\Models\afps;
use App\Models\sexo;
use App\Models\profesiones;
use App\Models\usuario;
use App\Models\permiso_tipo;
use App\Models\permiso;
use App\Models\permiso_bloque;
use App\Models\feriado_legal;
use Carbon\Carbon;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('rrhh.usuarios.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nacionalidad=nacionalidad::pluck('nombre','id');
        $civil=estado_civiles::pluck('nombre','id');
        $prevision=previsiones::pluck('nombre','id');
        $afp=afps::pluck('nombre','id');
        $sexo=sexo::pluck('nombre','id');
        $profesion = profesiones::selectRaw("CONCAT(nombre, ' - (', categoria, ')') AS nombre_completo, id")
                ->pluck('nombre_completo', 'id');

        return view('rrhh.usuarios.create')
                ->with('nacionalidad',$nacionalidad)
                ->with('civil',$civil)
                ->with('afp',$afp)
                ->with('prevision',$prevision)
                ->with('sexo',$sexo)
                ->with('profesion',$profesion);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Limpia puntos y guiones
            $rutLimpio = preg_replace('/[^0-9kK]/', '', $request->rut);
            // Separa el número y el DV
            $numero = substr($rutLimpio, 0, -1);
            $dv = strtoupper(substr($rutLimpio, -1));
            
            $usuario = new usuario();

            // ✅ Validar que el ID (RUT) no exista
            if (usuario::where('id', $numero)->exists()) {
                return response()->json([
                    'message' => 'El RUT ingresado ya existe en la base de datos.',
                    'error' => 'Duplicado'
                ], 409); // 409 Conflict
            }
            
            $usuario->id = $numero;
            $usuario->dv = strtoupper($dv);
            $usuario->nombres = strtolower($request->nombres);
            $usuario->apellidop = strtolower($request->paterno);
            $usuario->apellidom = strtolower($request->materno);
            $usuario->fecha_nacimiento = $request->fecha_nacimiento;
            $usuario->telefono = $request->telefono;
            $usuario->direccion = strtolower($request->direccion);
            $usuario->sexo_id = $request->sexo;
            $usuario->profesion_id = $request->profesion;
            $usuario->afp_id = $request->afp;
            $usuario->prevision_id = $request->prevision;
            $usuario->fecha_ingreso = $request->fecha_ingreso;
            $usuario->estado_civil_id = $request->estado_civil;
            $usuario->nacionalidad_id = $request->nacionalidad;
            $usuario->email = strtolower($request->email);
            $usuario->email_institucional = strtolower($request->email_institucional);
            $usuario->estado_id = 1;
            $usuario->nivel = 15;

            $usuario->save();
            return response()->json(['message' => 'Usuario guardado con éxito'], 200);
            } catch (QueryException $e) {
            // Error SQL
            return response()->json([
                'message' => 'Error al guardar el usuario',
                'error' => $e->getMessage() // puedes quitar esto en producción
            ], 500);

            } catch (\Exception $e) {
                // Cualquier otro error
                return response()->json([
                    'message' => 'Ocurrió un error inesperado',
                    'error' => $e->getMessage() // puedes quitar esto en producción
                ], 500);
            }
    }

    public function getUsuariosData()
    {
        $usuarios = usuario::with('estado')->get();

        // Opcionalmente, formateas el rut u otros campos aquí
        $usuarios->transform(function($usuario) {
            $usuario->rut = $usuario->rutUsuario();  // Tu método para formatear RUT
            return $usuario;
        });

        return response()->json(['data' => $usuarios]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = usuario::findOrFail($id);

        $sexo = sexo::pluck('nombre', 'id');
        $afp = afps::pluck('nombre', 'id');
        $prevision = previsiones::pluck('nombre', 'id');
        $civil = estado_civiles::pluck('nombre', 'id');
        $nacionalidad = nacionalidad::pluck('nombre', 'id');
        $profesion = profesiones::pluck('nombre', 'id');

        $permiso_tipo = permiso_tipo::pluck('nombre', 'id');

    return view('rrhh.usuarios.edit', compact(
        'usuario', 
        'sexo', 
        'afp', 
        'prevision', 
        'civil', 
        'nacionalidad', 
        'profesion',
        'permiso_tipo'
    ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    public function setPermiso(Request $request , string $id)
    {
        try {
        $permiso = new permiso();
        $permiso->usuario_id = $id;
        $permiso->permiso_tipo_id = $request->permiso_tipo_id;
        $permiso->permiso_estado_id = 1;
        $permiso->fecha_permiso = now();
        $permiso->motivo = $request->motivo_permiso;
        $permiso->fecha_inicio = $request->fecha_inicio_permiso;
        $permiso->fecha_termino = $request->fecha_termino_permiso;

        $permiso->save();

        if($permiso->permiso_tipo_id == 6){
            foreach ($request->jornadas as $fecha => $jornada) {
                // $fecha -> '2025-07-17'
                // $jornada -> 'completo', 'mañana' o 'tarde'
                $permiso_bloque = new permiso_bloque();
                $permiso_bloque->permiso_id = $permiso->id;
                $permiso_bloque->fecha = $fecha;
                $permiso_bloque->bloque = $jornada;
                $permiso_bloque->save();
            }
        }
            
        return response()->json(['message' => 'Permiso guardado con éxito'], 200);
        
        } catch (QueryException $e) {
            // Error SQL
            return response()->json([
                'message' => 'Error al guardar el Permiso',
                'error' => $e->getMessage() // puedes quitar esto en producción
            ], 500);

        } catch (\Exception $e) {
                // Cualquier otro error
                return response()->json([
                    'message' => 'Ocurrió un error inesperado',
                    'error' => $e->getMessage() // puedes quitar esto en producción
                ], 500);
        }

    }
    public function setFeriadoLegal(Request $request, string $id)
    {
        try {

            $feriado = new feriado_legal();
            $feriado->usuario_id = $id;
            $feriado->fecha_ingreso = now();
            $feriado->fecha_inicio = $request->fecha_inicio_vacaciones;
            $feriado->fecha_termino = $request->fecha_termino_vacaciones;
            $feriado->cantidad_dias = $request->cantidad_dias_vacaciones;
            $feriado->dias_progresivos = $request->dias_progresivos;
            $feriado->dias_adicionales = $request->dias_adicionales;
            $feriado->fuera_ciudad = $request->fuera_ciudad;
            $feriado->observacion = $request->observacion_vacaciones;
            $feriado->estado_id = 1;
            $feriado->save();

            return response()->json(['message' => 'Feriado Legal guardado con éxito'], 200);

        } catch (QueryException $e) {
            // Error SQL
            return response()->json([
                'message' => 'Error al guardar el Feriado Legal',
                'error' => $e->getMessage() // puedes quitar esto en producción
            ], 500);

        } catch (\Exception $e) {
                // Cualquier otro error
                return response()->json([
                    'message' => 'Ocurrió un error inesperado',
                    'error' => $e->getMessage() // puedes quitar esto en producción
                ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

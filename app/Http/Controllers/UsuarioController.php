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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

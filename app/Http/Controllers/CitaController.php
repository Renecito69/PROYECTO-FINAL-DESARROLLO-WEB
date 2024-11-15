<?php

namespace App\Http\Controllers;

use App\Http\Requests\CitaFormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Cita;
use App\Models\Vehiculo;
use App\Models\Tipo_taller;
use App\Models\Taller;
use Redirect;
use DateTime;
use Session;

class CitaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        $citas = Cita::select('citas.id as id_cita','citas.nombre as nombre_cita','citas.placa as placa','citas.fecha as fecha','citas.tipo_vehiculo','taller','tipo_taller')
        ->join('tipo_taller','citas.tipo_taller','=','tipo_taller.id')
        ->join('talleres','citas.taller','=','talleres.id')
        ->get();
            
        
        $citas = Cita::all();
        $vehiculos = Vehiculo::where('id_usuario', Auth::id())->get();
        return view('cita.index', compact('citas', 'vehiculos'));
    }

    public function create()
    {
        $tipo_taller = Tipo_taller::orderBy('id', 'DESC')->select('id', 'nombre')->get();
        $talleres = Taller::orderBy('id', 'DESC')->select('id', 'nombre_taller')->get();
        return view('cita.create', compact('tipo_taller', 'talleres'));
    }

    public function store(CitaFormRequest $request)
    {
        
        $citas = new cita;
     
        $citas->placa = $request->placa;
        $citas->tipo_vehiculo = $request->tipo_vehiculo;
        $citas->tipo_taller = $request->tipo_taller;
        $citas->nombre = $request->nombre;
        $citas->fecha = $request->fecha;
        $citas->taller = $request->taller;
        $citas->created_at = now();
        $citas->save();

        return redirect('cita')->with('message', 'Cita guardada satisfactoriamente.');
    }

    public function show($id)
    {
        $citas = Cita::findOrFail($id);
        return view('cita.detalle', compact('citas'));
    }

    public function edit($id)
    {
        $citas = Cita::findOrFail($id);
        $tipo_taller = Tipo_taller::orderBy('id', 'DESC')->select('id', 'nombre')->get();
        $talleres = Taller::orderBy('id', 'DESC')->select('id', 'nombre_taller')->get();
        return view('cita.edit', compact('citas', 'tipo_taller', 'talleres'));
    }

    public function update(Request $request, $id)
    {
        $citas = Cita::findOrFail($id);
        $citas->nombre = $request->nombre;
        $citas->placa = $request->placa;
        $citas->tipo_vehiculo = $request->tipo_vehiculo;
        $citas->tipo_taller = $request->tipo_taller;
        $citas->fecha = $request->fecha;
        $citas->taller = $request->taller;
        $citas->updated_at = now();
        $citas->save();

        Session::flash('message', 'Editado satisfactoriamente.');
        return Redirect::to('cita');
    }

    public function destroy($id)
    {
        $citas = Cita::findOrFail($id);
        $citas->delete();

        return redirect('cita')->with('message', 'Cita eliminada satisfactoriamente.');
    }

    public function buscarTaller(Request $request)
    {
        $tipo_taller_id = $request->get('tipo_taller');
        $talleres = Taller::where('tipo_taller_id', $tipo_taller_id)->get();

        if ($talleres->isNotEmpty()) {
            $resultados = $talleres->map(function ($taller) {
                return [
                    'id' => $taller->id,
                    'nombre_taller' => $taller->nombre_taller,
                ];
            });

            return response()->json($resultados);
        } else {
            return response()->json(['error' => 'No se encontraron talleres.'], 404);
        }
    }

    public function validarFecha(Request $request) {
        try {
            $fecha = $request->input('fecha');
            // Contar la cantidad de citas para la fecha seleccionada
            $cantidadCitas = Cita::where('fecha', $fecha)->count();


            // Si hay 3 o más citas para la fecha seleccionada, mostrar un mensaje de error
            if ($cantidadCitas >= 3) {
                return response()->json(['mensaje' => 'Lo sentimos, ya hay 3 citas agendadas para la fecha seleccionada. Por favor, elige otra fecha.']);
            } else {
                return response()->json(['mensaje' => 'La fecha está disponible para agendar la cita.', "fecha"=>"$fecha"]);
            }
        } catch (\Exception $e) {
            return response()->json(['mensaje' => 'Error en el servidor. Por favor, inténtalo de nuevo más tarde.'], 500);
        }
    }

}

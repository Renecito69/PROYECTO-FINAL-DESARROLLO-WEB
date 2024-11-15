<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mantenimiento;
use Redirect;
use Storage;
use DateTime;
use Session;

class MantenimientoController extends Controller
{

    public function index()
    {
        $mantenimiento = Mantenimiento::all(); 
        return view('mantenimiento.index', compact('mantenimiento'));
    }

    public function create()
    {
        $mantenimiento = Mantenimiento::all();
        return view('mantenimiento.create', compact('mantenimiento'));
    }

    public function store(Request $request)
    {
        $mantenimiento= new Mantenimiento;

        $mantenimiento->placa = $request->placa;
        $mantenimiento->kilometraje = $request->kilometraje;
        $mantenimiento->ultimo_mantenimiento = $request->ultimo_mantenimiento;
        $mantenimiento->tipo_vehiculo = $request->tipo_vehiculo;
        $mantenimiento->tipo_taller = $request->tipo_taller;

        $mantenimiento->created_at = (new DateTime)->getTimestamp();
        
        $mantenimiento->save();

        return redirect('mantenimiento')->with('message', 'mantenimiento guardado satisfactoriamente.');
    }

    public function show(string $id)
    {
        $mantenimiento = Mantenimiento::find($id);
        return view('mantenimiento.detalle', compact('mantenimiento'));
    }

    public function destroy(string $id)
    {
        $mantenimiento = Mantenimiento::find($id);
        if (!$mantenimiento) {
            return redirect('mantenimiento')->with('error', 'Mantenimiento no encontrado.');
        }
        $vehiculos->delete();

        return redirect('mantenimiento')->with('message', 'Mantenimiento eliminado satisfactoriamente.');
    }
}

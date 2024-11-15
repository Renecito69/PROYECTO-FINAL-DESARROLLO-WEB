<?php

namespace App\Http\Controllers;

use App\Http\Requests\TallerFormRequest;
use App\Models\Taller;
use Redirect;
use Storage;
use DateTime;
use Session;

class tallerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $talleres = Taller::all();  
        return view('taller.index', compact('talleres'));
    }

    public function create()
    {
        $talleres = Taller::all();
        return view('taller.create', compact('talleres'));
    }

    public function store(TallerFormRequest $request)
    {
        $talleres = new Taller;
    
        $talleres->nombre_taller = $request->nombre_taller;
        $talleres->runt = $request->runt;
        $talleres->camara_comercio = $request->camara_comercio;
        $talleres->direccion = $request->direccion;
        $talleres->tipo_taller_id = $request->tipo_taller_id;

        $talleres->created_at = (new DateTime)->getTimestamp();
    
        $talleres->save();
    
        return redirect('taller')->with('message', 'Taller guardado satisfactoriamente.');
    }
    


    public function show(string $id)
    {
        $talleres = Taller::find($id);
        return view('taller.detalle', compact('talleres'));
    }

    public function edit($id)
    {
        $talleres = Taller::findOrFail($id);
        return view('taller.edit', compact('talleres'));
    }
    
    

    public function update(TallerFormRequest $request, $id)
    {
        $talleres = Taller::find($id);
        $talleres->nombre_taller = $request->nombre_taller;
        $talleres->runt = $request->runt;
        $talleres->camara_comercio = $request->camara_comercio;
        $talleres->direccion = $request->direccion;
        $talleres->tipo_taller_id = $request->tipo_taller;
        

        $talleres->updated_at = (new DateTime)->getTimestamp();

        $talleres->save();

        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('taller');


     }

    public function destroy(string $id)
    {
        $talleres = Taller::find($id);
        if (!$talleres) {
            return redirect('taller')->with('error', 'Taller no encontrado.');
        }
        $talleres->delete();

        return redirect('taller')->with('message', 'Taller eliminado satisfactoriamente.');
    }
}
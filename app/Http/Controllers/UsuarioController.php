<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioFormRequest;
use App\Models\User;
use Redirect;
use Storage;
use DateTime;
use Session;
use Illuminate\Http\Request;

class usuarioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::all();  
        return view('usuario.index', compact('user'));
    }

    public function create()
    {
        $user = User::all();
        return view('usuario.create', compact('user'));
    }

    public function store(UsuarioFormRequest $request)
    {
        $user = new User;
    
        $user->name = $request->name;
        $user->email = $request->email;
        $user->fecha_nacimiento = $request->fecha_nacimiento;
        $user->celular = $request->celular;
        $user->password = bcrypt($request->password);
    
        $user->created_at = now();
    
        $user->save();
    
        return redirect('usuario')->with('message', 'Usuario guardado satisfactoriamente.');
    }
    


    public function show(string $id)
    {
        $user = User::find($id);
        return view('usuario.detalle', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('usuario.edit', compact('user'));
    }
    
    

    public function update(UsuarioFormRequest $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->fecha_nacimiento = $request->fecha_nacimiento;
        $user->celular = $request->celular;
        $user->password = bcrypt($request->password);
    
        $user->updated_at = now();
    
//dd($user);

        $user->save();
    
        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('usuario');
    }

    public function destroy(string $id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect('usuario')->with('error', 'Usuario no encontrado.');
        }
        $user->delete();

        return redirect('usuario')->with('message', 'Usuario eliminado satisfactoriamente.');
    }
}
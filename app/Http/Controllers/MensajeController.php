<?php
 
namespace App\Http\Controllers;
use App\Models\Mensaje;
use Illuminate\Http\Request;
use App\Models\Producto;
use Redirect;
use Storage;
use DateTime;
use Session;
 
class MensajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mensajes = Mensaje::all();
        return view('mensaje.index', compact('mensajes'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mensajes = Mensaje::all();
        return view('mensaje.create', compact('mensajes'));
 
        $users=user::orderBy('id','DESC')
        ->select('users.id','users.name')
        ->get();
 
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mensajes = new Mensaje;
        // Recibo todos los datos del formulario de la vista
        $mensajes->users_id = $request->users_id;
        $mensajes->nombre = $request->nombre;
        $mensajes->mensaje = $request->mensaje;
       
       
        // Guardamos la fecha de creación del registro
        $mensajes->created_at = (new DateTime)->getTimestamp();
        // Inserto todos los datos en mi tabla 'productos'
        $mensajes->save();
        // Hago una redirección a la vista principal con un mensaje
        return redirect('mensaje')->with('message','mensaje Guardado
       Satisfactoriamente !');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
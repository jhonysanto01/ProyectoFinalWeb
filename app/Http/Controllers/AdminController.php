<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/* AQUI UTILIZO EL MODELO USERS PARA PODER EDITAR LOS REGISTROS desde admin*/
use App\Models\User;
use Barry\DomPDF\Facade as PDF;

class AdminController extends Controller
{
    public function __construct()
    {
        //middleware de que este logueado
        $this->middleware('auth');
        $this->middleware('soloadmin');['only' => ['index']];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios= User::all();
        /* como lo envio para la vista home */
        return view('home')->with('usuarios', $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $user = User::find($id);
        return view('actualizarUsuario')->with('usuarios', $user);
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
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->id_rol = $request->id_rol;
        $user->save();
        return redirect()->route('actualizar.index');


        /* $user= User::find($id);
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=$request->input('password');
        $user->id_rol=$request->input('id_rol');
        $user->save();
        return redirect()->route('home'); */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user= User::find($id);
        $user->delete();
        return redirect()->route('home');
    }

    public function generar_pdf(){
        $usuarios= User::all();
        $pdf = \PDF::loadView('generar_pdf', compact('usuarios'));
        return $pdf->download('usuarios.pdf');
    }
}

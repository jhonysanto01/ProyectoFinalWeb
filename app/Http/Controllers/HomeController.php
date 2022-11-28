<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //middleware de que este logueado
        $this->middleware('auth');
        $this->middleware('soloadmin');['only' => ['index']];
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user= User::all();
        return view('home')->with('usuarios', $user);
    }

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
        //
        $user= User::find($id);
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=$request->input('password');
        $user->id_rol=$request->input('id_rol');
        $user->save();
        return redirect()->route('home');
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
        $user= User::find($id);
        $user->delete();
        return redirect()->route('home');
    }
}

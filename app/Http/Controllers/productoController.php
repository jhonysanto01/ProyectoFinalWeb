<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Producto;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $product = Producto::all();
        return view('home')->with('productos',$product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crearProducto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nombre_producto=$request->input('nombre_producto');
        $descripcion_producto=$request->input('descripcion_producto');
        $precio_producto=$request->input('precio_producto');
        $stock_producto=$request->input('stock_producto');
        $id_categoria=$request->input('id_categoria');

        $product = new Producto();
        $product->nombre_producto = $nombre_producto;
        $product->descripcion_producto = $descripcion_producto;
        $product->precio_producto = $precio_producto;
        $product->stock_producto = $stock_producto;
        $product->id_categoria = $id_categoria;
        $product->save();
        return redirect()->route('productos.index');
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
        $product=Producto::find($id);
        return view('actualizarProducto')->with('productos',$product);
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
        $product=Producto::find($id);
        $product->nombre_producto = $request->nombre;
        $product->descripcion_producto = $request->descripcion;
        $product->precio_producto = $request->precio;
        $product->stock_producto = $request->stock;
        $product->id_categoria = $request->id_categoria;
        $product->save();
        return redirect()->route('productos.index');
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
        $product=Producto::find($id);
        $product->delete();
        return redirect()->route('productos.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductoRequest;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Productos = Producto::all();
        return response()->json($Productos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateProductoRequest $request)
    {
        $Producto = Producto::create($request->validated());
        return response()->json($Producto, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Producto = Producto::find($id);
        if (!$Producto) {
            return response()->json(['mensaje' => 'Producto no encontrado'], 404);
        }
        return response()->json($Producto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateProductoRequest $request,$id)
    {
        $Producto = Producto::find($id);
        if (!$Producto) {
            return response()->json(['mensaje' => 'Producto no encontrado'], 404);
        }
        $Producto->update($request->validated());
        return response()->json($Producto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Producto = Producto::find($id);
        if (!$Producto) {
            return response()->json(['mensaje' => 'Producto no encontrado'], 404);
        }
        $Producto->delete();
        return response()->json(['message' => 'Producto eliminado']);
    }
}

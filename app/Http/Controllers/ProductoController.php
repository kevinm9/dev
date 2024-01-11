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
    public function index(Request $request)
    {
        $perPage = isset($request->per_page) ? intval($request->per_page) : 10;
        $query = Producto::query();
        if (isset($request->keyword)) {
            $query->where('nombre', 'like', '%' . $request->keyword . '%')
            ->orWhere('nombre', 'like', '%' . $request->keyword . '%')
            ->orWhere('precio', 'like', '%' . $request->keyword . '%');
        }
        //asc o desc
        if ($request->has(['sortBy', 'sortDesc']) && isset($request->sortBy)) {
            $query->orderBy($request->sortBy,$request->sortDesc);
        }
        $query->with('categoria');
        $perPage = $perPage > 0 ? $perPage : $query->count();
        $Productos=$query->paginate($perPage);
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
        $Producto = Producto::find($id)->load(['categoria']);
        //$Producto = Producto::where('id',$id)->with(['facturas'])->get();
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

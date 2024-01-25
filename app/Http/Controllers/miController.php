<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Producto;
use App\Models\Formasdepago;
use App\Models\Categoria;
use App\Models\Factura;
use Spatie\Permission\Models\Role;

class miController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $c1 = Categoria::create([
        //     'nombre' => 'hogar',
        // ]);
        // $c2 = Categoria::create([
        //     'nombre' => 'escolar',
        // ]);

        // $fp1 = Formasdepago::create([
        //     'nombre' => 'efectivo',
        // ]);
        // $fp2 = Formasdepago::create([
        //     'nombre' => 'tarjeta de debito',
        // ]);

        // $p1 = new Producto([
        //     'categoria_id' => 1,
        //     'nombre' => 'refri',
        //     'precio' => 1,
        //     'stock' => 1,
        // ]);
        // $p2 = new Producto([
        //     'categoria_id' => 1,
        //     'nombre' => 'lavadora',
        //     'precio' => 1,
        //     'stock' => 5,
        // ]);
        // $p3 = new Producto([
        //     'categoria_id' => 2,
        //     'nombre' => 'lapto',
        //     'precio' => 1,
        //     'stock' => 2,
        // ]);
        // $p1->save();
        // $p2->save();
        // $p3->save();

        // $p4 = new Producto([
        //     'nombre' => 'celular',
        //     'precio' => 5,
        //     'stock' => 10
        // ]);

        // $s = $c1->productos()->save($p4);

        $user = User::find($request->id);

        // $factura = Factura::create([
        //     'formasdepago_id' => 2,
        //     'cliente_id' => $user->id,
        //     'total' => 0,
        // ]);

        // $factura->productos()->attach([
        //     $p1->id => ['cantidad' => 10],
        //     $p2->id => ['cantidad' => 20],
        //     $p3->id => ['cantidad' => 30],
        // ]);

        // $total = 0;
        // foreach ($factura->productos as $producto) {
        //     $total += $producto->precio * $producto->pivot->cantidad;
        // }
        // $factura->total = $total;
        // $factura->save();

        //$data1 = User::with('permissions')->get();
        $data1 = $user->getPermissionsViaRoles();

        return response()->json([
            'mensaje' => $data1
        ], 500);

        // if (!$user->hasRole('admin')) {
        //     return response()->json(['mensaje' => 'El usuario no es un administrador'], 500);

        // }

        // if (!$user->can('save products')) {
        //     return response()->json(['mensaje' => 'El usuario no tiene permiso para guardar un producto'], 500);
        // }


        // return User::where('id', $user->id)->with([
        //     'facturas' => [
        //         'formasdepago',
        //         'productos',
        //     ],
        // ])->get();



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255'
        ]);

        $item = Categoria::create($validatedData);
        return response()->json($item, 201);
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

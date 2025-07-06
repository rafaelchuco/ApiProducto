<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $productos = Producto::all();
            return response()->json([
                'status' => 'true',
                'message' => 'Consulta exitosa',
                'products' => $productos
            ]);
        } catch (Exception $ex) {
            return response()->json([
                'status' => 'false',
                'message' => $ex->getMessage()
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $producto = new Producto();

            $producto->nombre = $request->input('nombre');
            $producto->marca = $request->input('marca');
            $producto->precio = $request->input('precio');
            $producto->stock = $request->input('stock');
            $producto->id_categoria = $request->input('id_categoria');

            $producto->save();

            return response()->json([
                'status' => 'true',
                'message' => 'Producto guardado con éxito',
                'product' => $producto
            ]);
        } catch (Exception $ex) {
            return response()->json([
                'status' => 'false',
                'message' => $ex->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {        
        try {
            $producto = Producto::find($id);

            if ($producto == null) {
                return response()->json([
                    'status' => 'false',
                    'message' => 'Producto no encontrado'
                ]);
            }

            return response()->json([
                'status' => 'true',
                'message' => 'Consulta exitosa',
                'product' => $producto
            ]);
        } catch (Exception $ex) {
            return response()->json([
                'status' => 'false',
                'message' => $ex->getMessage()
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {

            $producto = Producto::find($id);

            if ($producto == null) {
                return response()->json([
                    'status' => 'false',
                    'message' => 'Producto no encontrado'
                ]);
            }

            $producto->nombre = $request->input('nombre');
            $producto->marca = $request->input('marca');
            $producto->precio = $request->input('precio');
            $producto->stock = $request->input('stock');
            $producto->id_categoria = $request->input('id_categoria');

            $producto->save();

            return response()->json([
                'status' => 'true',
                'message' => 'Producto actualizado con éxito',
                'product' => $producto
            ]);
        } catch (Exception $ex) {
            return response()->json([
                'status' => 'false',
                'message' => $ex->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $producto = Producto::find($id);

            if ($producto == null) {
                return response()->json([
                    'status' => 'false',
                    'message' => 'Producto no encontrado'
                ]);
            }

            $producto->delete();

            return response()->json([

                'status' => 'true',
                'message' => 'Producto eliminado con éxito',
                'product' => $producto
            ]);
        } catch (Exception $ex) {
            return response()->json([
                'status' => 'false',
                'message' => $ex->getMessage()
            ]);
        }
    }
}

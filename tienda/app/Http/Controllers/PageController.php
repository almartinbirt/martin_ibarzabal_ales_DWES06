<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Producto;
use App\Models\Compra;
use App\Models\Usuario;

class PageController extends Controller
{

    // PRODUCTOS en STOCK - SPRING
    public function stock($id)
    {

        $url = 'http://localhost:8080/stock/' . $id;

        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->body();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'No se pudo obtener la respuesta del microservicio'], 500);
        }

    }

    // PRODUCTOS
    public function productosAll()
    {
        $productos = Producto::all();
        return response()->json($productos);
    }

    public function productoPorID($id)
    {
        $producto = Producto::findOrFail($id);
        return response()->json($producto);
    }

    public function crearProducto(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'precio' => 'required|numeric',
            'cantidad' => 'required|integer',
        ]);

        $producto = Producto::create($request->all());
        return response()->json($producto);
    }

    public function actualizarProducto(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string',
            'precio' => 'required|numeric',
            'cantidad' => 'required|integer',
        ]);

        $producto = Producto::findOrFail($id);
        $producto->update($request->all());
        return response()->json($producto);
    }

    public function borrarProducto($id)
    {

        $producto = Producto::findOrFail($id);
        $producto->delete();
        //$productos = Producto::all();
        //return response()->json($productos);


    }


    // COMPRASS
    public function comprasAll()
    {
        $tablaCompras = Compra::all();
        return response()->json($tablaCompras);
    }


    // USUARIOS
    public function usuariosAll()
    {
        $tablaUsuarios = Usuario::all();
        return response()->json($tablaUsuarios);
    }
}

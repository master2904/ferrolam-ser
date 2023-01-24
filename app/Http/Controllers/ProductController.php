<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::select("*")->orderBy("nombre", "asc")->get();
        return response()->json($product,200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'imagen' => 'required',
        ]);
        Product::create($request->all());
        return $this->index();
    }

    public function show($id)
    {
        return response()->json(Product::find($id));
    }
    public function update(Request $request, $id)
    {
        $producto=Product::find($id);
        if (!$producto) 
            return response()->json("Este Producto no existe",400);
        $producto->update($request->all());
        return $this->index();
    }

    public function destroy($id)
    {
        Product::find($id)->delete();
        return $this->index();
    }
}

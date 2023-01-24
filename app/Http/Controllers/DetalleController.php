<?php
namespace App\Http\Controllers;
use App\Models\Detalle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class DetalleController extends Controller
{
    public function index()
    {
        $lista=Detalle::get();
        return response()->json($lista,200);
        
    }
    public function listar($id){
        $lista=Detalle::where('id_product',$id)->get();
        return response()->json($lista);
    }
    public function store(Request $request)
    {
        $id_product=$request['id_product'];
        Detalle::create($request->all());
        return $this->listar($id_product);
    }
    
    public function show($id)
    {
        return response()->json(Detalle::find($id));
    }
    public function update(Request $request, $id)
    {
        $problema=Detalle::find($id);
        if (!$problema) 
            return response()->json("Este producto no existe",400);
        $problema->update($request->all());
        return $this->listar($request->input('id_product'));
    }
    public function eliminar ($id,$id_p)
    {
        Detalle::find($id)->delete();
        return $this->listar($id_p);
    }
    
    public function delete($id)
    {
        $lista = Detalle::find($id);
        $valor=$lista->id_prodcut;
        $lista->delete();
        return $this->listar($valor);
    }
    
}

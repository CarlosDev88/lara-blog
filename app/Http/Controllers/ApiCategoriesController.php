<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class ApiCategoriesController extends Controller{

    public function index(){
        $categorias = Categoria::all();
        return response()->json($categorias);
    }


    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->name = $request->name;
        $categoria->description = $request->description;       

        $categoria->save();
    }

    public function update(Request $request)
    {
        $categoria = Categoria::findOrFail($request->id);
        $categoria->name = $request->name;
        $categoria->description = $request->description;        

        $categoria->save();

        return $categoria;
    }

    public function destroy(Request $request)
    {
        $categoria = Categoria::destroy($request->id);
        return $categoria;
    }

}
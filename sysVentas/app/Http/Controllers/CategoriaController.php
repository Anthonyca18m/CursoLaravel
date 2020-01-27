<?php

namespace sysVentas\Http\Controllers;

use Illuminate\Http\Request;

use sysVentas\Http\Requests;
use sysVentas\Categoria;
use Illuminate\Support\Facades\Redirect;
use sysVentas\Http\Requests\CategoriaFormRequest;
use DB;

class CategoriaController extends Controller
{
    //
    public function __construct()
    {
    }
    public function index(Request $request)
    {
        if ($request) {
            $query = trim($request->get('searchText'));
            $categorias = DB::table('categoria')
                ->where('nombre', 'LIKE', '%' . $query . '%')
                ->where('estado', '=', 'A')
                ->orderBy('idCategoria', 'desc')->pagination(7);
            
            return view('almacen.categoria.index', ["categorias" => $categorias, "searchText" =>$query]);
        }
    }
    public function create()
    {
        return view('almacen.categoria.create');
    }
    public function store(CategoriaFormRequest $request)
    {
        $categoria = new Categoria();
        $categoria->nombre = $request->get('nombre');
        $categoria->descripcion = $request->get('descripcion');
        $categoria->estado = 'A';
        $categoria->fechaRegistro = 'NOW()';
        $categoria->save();

        return Redirect::to('almacen/categoria');
    }
    public function show($id)
    {
        return view("almacen.categoria.show", ["categoria" => Categoria::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view("almacen.categoria.edit", ["categoria" => Categoria::findOrFail($id)]);
    }
    public function update(CategoriaFormRequest $request, $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->nombre = $request->get('nombre');
        $categoria->descripcion = $request->get('descripcion');
        $categoria->estado = $request->get('estado');
        $categoria->update();

        return Redirect::to('almacen/categoria');
    }
    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->estado = "I";
        $categoria->update();

        return Redirect::to('almacen/categoria');
    }
}

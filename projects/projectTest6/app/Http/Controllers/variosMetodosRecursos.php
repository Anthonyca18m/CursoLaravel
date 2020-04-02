<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\info;

class variosMetodosRecursos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return redirect()->action('holaController');
        //return redirect()->action('UsuarioController@usuarioUnParametro', ['nombre'=> 'Anthony Cachi']);
        //return redirect('hola');
        $info = info::all();
        // dd($info);
        return view('varios.index')->with('info', $info);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $info = new info;
        // $info->nombre = 'Anthony';
        // $info->descripcion = 'Curso Laravel';
        // $info->save();

        // $info::create([
        //     'nombre' => 'tom',
        //     'descripcion' => 'midescription'
        // ]);
        return view('varios.create')->with('info', $info);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('varios.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        // $info = info::findOrFail($id);
        // $info = info::where('id','=', $id)->firstOrFail();
        // dd($info);
        // return 'here´s';
        // dd($info);

        // $info = info::find($id);
        // $info->nombre= 'modificado';
        // $info->save();
        return view('varios.edit', ['id', $id]);
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

<?php

namespace App\Http\Controllers;
use
    App\Estado;
use DB;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function index() {
        //DB:

        $estados = Estado::all();

        return view('Estado.show',['estados'=>$estados]) ;
    }
    public function store(Request $request)
    {
        $estados = new Estado();
        $estados->create($request->all());
        return redirect('/Estado');
    }
    public function create()
    {
        return view('Estado.create');
    }
    public function edit($id)
    {
        $estados =Estado::where('id_Estado',$id)->get();
        $estados=$estados[0];
        return view('Estado.edit',compact('estados'));
    }
    public function update(Request $request)
    {
        $estados = Estado::find($request->id_Estado);
        $estados->update($request->all());
        return redirect('/Estado');
    }
    public function delete($id)
    {
        $metodo =Estado::where('id_Estado',$id);
        $metodo->delete();

        return redirect()->back();
    }

    public function search(Request $request){
        $estados = Estado::where('nombre','like','%'.$request->nombre.'%')->get();
        return \View::make('estados_method.estados_methods_list',['estados'=>$estados]);
    }
    public function service()
    {

    }
}

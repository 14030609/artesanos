<?php

namespace App\Http\Controllers;
use
    App\Envios;
use DB;
use Illuminate\Http\Request;

class EnviosController extends Controller
{
    public function index() {
        //DB:

        $envios = Envios::all();

        return view('Envios.show',['envios'=>$envios]) ;
    }
    public function store(Request $request)
    {
        $envios = new Envios();
        $envios->create($request->all());
        return redirect('/Envios');
    }
    public function create()
    {
        return view('Envios.create');
    }
    public function edit($id)
    {
        $envios =Envios::where('id_Envio',$id)->get();
        $envios=$envios[0];
        return view('Envios.edit',compact('envios'));
    }
    public function update(Request $request)
    {
        $envios = Envios::find($request->id_Envio);
        $envios->update($request->all());
        return redirect('/Envio');
    }
    public function delete($id)
    {
        $metodo =Envios::where('id_Envio',$id);
        $metodo->delete();

        return redirect()->back();
    }

    public function search(Request $request){
        $envios = Envios::where('nombre','like','%'.$request->nombre.'%')->get();
        return \View::make('envios_method.envios_methods_list',['envios'=>$envios]);
    }
    public function service()
    {

    }
}

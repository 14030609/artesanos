<?php

namespace App\Http\Controllers;
use
    App\Rol;
use DB;
use Illuminate\Http\Request;

class rolController extends Controller
{
    public function index() {
        //DB:

        $rols = Rol::all();

        return view('Rol.show',['rols'=>$rols]) ;
    }
    public function store(Request $request)
    {
        $rols = new Rol();
        $rols->create($request->all());
        return redirect('/Rol');
    }
    public function create()
    {
        return view('Rol.create');
    }
    public function edit($id)
    {
        $rols =Rol::where('id_Rol',$id)->get();
        $rols=$rols[0];
        return view('Rol.edit',compact('rols'));
    }
    public function update(Request $request)
    {
        $rols = Rol::find($request->id_Rol);
        $rols->update($request->all());
        return redirect('/Rol');
    }
    public function delete($id)
    {
        $metodo =Rol::where('id_Rol',$id);
        $metodo->delete();

        return redirect()->back();
    }

    public function search(Request $request){
        $rols = Rol::where('nombre','like','%'.$request->nombre.'%')->get();
        return \View::make('rols_method.rols_methods_list',['rols'=>$rols]);
    }
    public function service()
    {

    }
}

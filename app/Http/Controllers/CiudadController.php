<?php

namespace App\Http\Controllers;
use
    App\Ciudad;
use DB;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    public function index() {
        //DB:

        $ciudads = Ciudad::all();

        return view('Ciudad.show',['ciudads'=>$ciudads]) ;
    }
    public function store(Request $request)
    {
        $ciudads = new Ciudad();
        $ciudads->create($request->all());
        return redirect('/Ciudad');
    }
    public function create()
    {
        return view('Ciudad.create');
    }
    public function edit($id)
    {
        $ciudads =ciudad::where('id_Ciudad',$id)->get();
        $ciudads=$ciudads[0];
        return view('Ciudad.edit',compact('ciudads'));
    }
    public function update(Request $request)
    {
        $ciudads = Ciudad::find($request->id_Ciudad);
        $ciudads->update($request->all());
        return redirect('/Ciudad');
    }
    public function delete($id)
    {
        $metodo =ciudad::where('id_Ciudad',$id);
        $metodo->delete();

        return redirect()->back();
    }

    public function search(Request $request){
        $ciudads = Ciudad::where('nombre','like','%'.$request->nombre.'%')->get();
        return \View::make('ciudads_method.ciudads_methods_list',['ciudads'=>$ciudads]);
    }
    public function service()
    {

    }
}

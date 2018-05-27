<?php

namespace App\Http\Controllers;
use
    App\Ciudad;
use App\Estado;
use DB;
use Illuminate\Http\Request;use Illuminate\Support\Facades\App;

class CiudadController extends Controller
{
    public function index() {
        //DB:

        $ciudads = DB::table('Estado')
            ->select('Estado.nombre AS estado', 'Ciudad.nombre AS ciudad','Ciudad.id_Ciudad')
            ->join('Ciudad','Estado.id_Estado','=','Ciudad.id_Estado')
            ->get();

        return view('Ciudad.show',compact('ciudads')) ;

    }
    public function store(Request $request)
    {
        $ciudads = new Ciudad();
        $ciudads->create($request->all());
        return redirect('/Ciudad');
    }
    public function create()
    {

        $estado=Estado::pluck('nombre','id_Estado');

        return view('Ciudad.create',compact('estado'));
        //return view('Ciudad.create');
    }
    public function edit($id)
    {
        $ciudads =ciudad::where('id_Ciudad',$id)->get();
        $ciudads=$ciudads[0];
        return view('Ciudad.edit',compact('ciudads'));
    }
    public function update(Request $request)
    {
        $ciudads = Ciudad::where('id_Ciudad',$request->id)            ->update(['nombre' => $request->nombre,'id_Estado'=>$request->id_Estado]);
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

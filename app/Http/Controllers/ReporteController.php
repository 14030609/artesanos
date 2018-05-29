<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ReporteController extends Controller
{

    public function index() {
        //DB:

        $clientes = DB::table('Usuario')
            ->count();

        print_r($clientes);

        $ordenes = DB::table('Venta')
            ->count();

        $ventas = DB::table('detalleVenta')
            ->count();


        return view('Reportes.datos', compact('clientes','ordenes','ventas')) ;

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
    public function serviceWeb()
    {
        $metodo=Reporte::all();
        return response()->json($metodo);
    }

}

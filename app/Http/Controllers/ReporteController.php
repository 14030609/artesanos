<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use Graphics;

use App\Venta;
use App\Usuario;
use App\detalleVentar;
use App\Ciudad;
use App\Estado;


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


    public function grafica()
    {
        $enero = DB::table('Venta')
            ->whereBetween('Fecha_Venta',array('2002-1-01','2002-1-31'))
            ->count();
        $febrero = DB::table('Venta')
            ->whereBetween('Fecha_Venta',array('2002-2-01','2002-2-28'))
            ->count();
        $marzo = DB::table('Venta')
            ->whereBetween('Fecha_Venta',array('2002-3-01','2002-3-30'))
            ->count();
        $abril = DB::table('Venta')
            ->whereBetween('Fecha_Venta',array('2002-4-01','2002-4-30'))
            ->count();
        $mayo = DB::table('Venta')
            ->whereBetween('Fecha_Venta',array('2002-5-01','2002-5-30'))
            ->count();
        $junio = DB::table('Venta')
            ->whereBetween('Fecha_Venta',array('2002-6-01','2002-6-30'))
            ->count();
        $julio = DB::table('Venta')
            ->whereBetween('Fecha_Venta',array('2002-7-01','2002-7-30'))
            ->count();
        $agosto = DB::table('Venta')
            ->whereBetween('Fecha_Venta',array('2002-8-01','2002-8-30'))
            ->count();
        $septiembre = DB::table('Venta')
            ->whereBetween('Fecha_Venta',array('2002-9-01','2002-9-30'))
            ->count();
        $octubre = DB::table('Venta')
            ->whereBetween('Fecha_Venta',array('2002-10-01','2002-10-30'))
            ->count();
        $noviembre = DB::table('Venta')
            ->whereBetween('Fecha_Venta',array('2002-11-01','2002-11-30'))
            ->count();
        $diciembre = DB::table('Venta')
            ->whereBetween('Fecha_Venta',array('2002-12-01','2002-12-30'))
            ->count();

        $chartjs = app()->chartjs
            ->name('Basic')
            ->type('line')
            ->size(['width' => 400, 'height' => 200])
            ->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio','Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'])
            ->datasets([
                [
                    "label" => "Numero de ventas por año",
                    'backgroundColor' => "rgba(255, 99, 132, 0.2)",
                    'borderColor' => "rgba(38, 185, 154, 0.7)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' => [$enero, $febrero, $marzo, $abril, $mayo, $junio, $julio,$agosto,$septiembre,$octubre,$noviembre,$diciembre],
                ],
            ])
            ->options([]);

        return view('Reportes.grafica', compact('chartjs'));
    }


    public function serviceWeb()
    {
        $metodo=Reporte::all();
        return response()->json($metodo);
    }

}

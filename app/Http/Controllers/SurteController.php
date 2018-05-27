<?php

namespace App\Http\Controllers;
use App\Producto;
use App\Proveedor;
use App\Surte;
use DB;
use Illuminate\Http\Request;

class SurteController extends Controller
{
    public function index() {
        //DB:
        $surte = DB::table('Proveedor')
            -> select('Proveedor.nombre AS proveedor','Producto.nombre AS producto','Producto.id_Producto','Proveedor.id_Proveedor','Surte.fecha','Surte.cantidad')
            ->join('Surte','Proveedor.id_Proveedor','=','Surte.id_Proveedor')
            ->join('Producto','Surte.id_Producto','=','Producto.id_Producto')
            ->get();
        return view('Surte.show',compact('surte'));
    }
    public function store(Request $request)
    {
        $payment = new Surte();
        $payment->create($request->all());
        return redirect('/Surte');
    }
    public function create()
    {
        $producto=Producto::pluck('Nombre','id_Producto');
        $proveedor=Proveedor::pluck('nombre','id_Proveedor');


        return view('Surte.create',compact('producto','proveedor'));
        //return view('Surte.create');
    }
    public function edit($id)
    {
        $payment =Surte::where('id_Proveedor',$id)->get();
        $payment=$payment[0];

        return view('Surte.edit',compact('payment'));
    }
    public function update(Request $request)
    {
        $surte = Surte::where('id_Proveedor',$request->id)->update(['id_Proveedor'=>$request->id_Proveedor,'id_Producto'=>$request->id_Producto ,'fecha'=>$request->fecha,'Cantidad'=>$request->Cantidad]);
        return redirect('/Surte');
    }
    public function delete($id_Proveedor,$id_Producto,$fecha)
    {
        $metodo =Surte::where('id_Proveedor', '=', $id_Proveedor)->where('id_Producto', '=', $id_Producto)->where('fecha','=',$fecha);
        $metodo->delete();
        return redirect()->back();
    }

    public function search(Request $request){
        $payments = Surte::where('nombre','like','%'.$request->nombre.'%')->get();
        return \View::make('payment_method.payment_methods_list',['payments'=>$payments]);
    }
    public function service()
    {

    }
}

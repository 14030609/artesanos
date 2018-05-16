<?php

namespace App\Http\Controllers;
use App\MetodosPago;
use DB;
use Illuminate\Http\Request;

class MetodosPagoController extends Controller
{
    public function index() {
        //DB:

        $payments = MetodosPago::all();

        return view('MetodosPago.show',['payments'=>$payments]) ;
    }
    public function store(Request $request)
    {
        $payment = new MetodosPago();
        $payment->create($request->all());
        return redirect('/MetodosPago');
    }
    public function create()
    {
        return view('MetodosPago.create');
    }
    public function edit($id)
    {
        $payment =MetodosPago::where('id_MetodosPago',$id)->get();
        $payment=$payment[0];
        return view('MetodosPago.edit',compact('payment'));
    }
    public function update(Request $request)
    {
        $payment = MetodosPago::where('id_MetodosPago', $request->id)
            ->update(['nombre' => $request->nombre,'descripcion'=>$request->descripcion]);

        return redirect('/MetodosPago');
    }

    public function delete($id)
    {
        $metodo =MetodosPago::where('id_MetodosPago',$id);
        $metodo->delete();

        return redirect()->back();
    }

    public function search(Request $request){
        $payments = MetodosPago::where('nombre','like','%'.$request->nombre.'%')->get();
        return \View::make('payment_method.payment_methods_list',['payments'=>$payments]);
    }
    public function serviceWeb()
    {
        $metodo=MetodosPago::all();
        return response()->json($metodo);
    }
}

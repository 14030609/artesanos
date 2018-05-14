<?php

namespace App\Http\Controllers;
use App\Surte;
use DB;
use Illuminate\Http\Request;

class SurteController extends Controller
{
    public function index() {
        //DB:

        $payments = Surte::all();

        return view('Surte.show',['payments'=>$payments]) ;
    }
    public function store(Request $request)
    {
        $payment = new Surte();
        $payment->create($request->all());
        return redirect('/Surte');
    }
    public function create()
    {
        return view('Surte.create');
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
    public function delete($id)
    {
        $metodo =Surte::where('id_Proveedor',$id);
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

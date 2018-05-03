<?php

namespace App\Http\Controllers;
use
    App\MetodosPago;
use Illuminate\Http\Request;

class MetodosPagoController extends Controller
{
    public function index() {
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
        $payment = MetodosPago::find($id);
        return view('MetodosPago.edit',compact('payment'));
    }
    public function update(Request $request)
    {
        $payment = MetodosPago::find($request->id_MetodosPago);
        $payment->update($request->all());
        return redirect('/MetodosPago');
    }
    public function delete($id)
    {
        $payment = MetodosPago::find($id);
        $payment->delete();
        return redirect()->back();
    }
    public function search(Request $request){
        $payments = MetodosPago::where('name','like','%'.$request->name.'%')->get();
        return \View::make('payment_method.payment_methods_list',['payments'=>$payments]);
    }
    public function service()
    {

    }
}

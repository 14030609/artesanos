<?php

namespace App\Http\Controllers;
use App\Inventario;
use DB;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function index() {
        //DB:

        $payments = Inventario::all();

        return view('Inventario.show',['payments'=>$payments]) ;
    }
    public function store(Request $request)
    {
        $payment = new Inventario();
        $payment->create($request->all());
        return redirect('/Inventario');
    }
    public function create()
    {
        return view('Inventario.create');
    }
    public function edit($id)
    {
        $payment =Inventario::where('id_Inventario',$id)->get();
        $payment=$payment[0];
        return view('Inventario.edit',compact('payment'));
    }
    public function update(Request $request)
    {
        $payment =Inventario::where('id_Inventario',$request)->get();
        $payment->save();
        return redirect('/Inventario');
    }
    public function delete($id)
    {
        $metodo =Inventario::where('id_Inventario',$id);
        $metodo->delete();

        return redirect()->back();
    }

    public function search(Request $request){
        $payments = Inventario::where('nombre','like','%'.$request->nombre.'%')->get();
        return \View::make('payment_method.payment_methods_list',['payments'=>$payments]);
    }
    public function service()
    {

    }
}

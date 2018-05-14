<?php

namespace App\Http\Controllers;
use App\Inventario;
use DB;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;

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
        $payment =Inventario::where('id_Producto',$id)->get();
        $payment=$payment[0];
        return view('Inventario.edit',compact('payment'));
    }
    public function update(Request $request)
    {

        $estados = Inventario::where('id_Producto',$request->id)->update(['id_Producto'=>$request->id_Producto,'id_Categoria'=>$request->id_Categoria,'Cantidad'=>$request->Cantidad]);
        return redirect('/Inventario');
    }
    public function delete($id)
    {
        $metodo =Inventario::where('id_Producto',$id);
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

<?php

namespace App\Http\Controllers;
use App\Proveedor;
use DB;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index() {
        //DB:

        $payments = Proveedor::all();

        return view('Proveedor.show',['payments'=>$payments]) ;
    }
    public function store(Request $request)
    {
        $payment = new Proveedor();
        $payment->create($request->all());
        return redirect('/Proveedor');
    }
    public function create()
    {
        return view('Proveedor.create');
    }
    public function edit($id)
    {
        $payment =Proveedor::where('id_Proveedor',$id)->get();
        $payment=$payment[0];

        return view('Proveedor.edit',compact('payment'));
    }
    public function update(Request $request)
    {
        $proveedor = Proveedor::where('id_Proveedor',$request->id)->update(['nombre'=>$request->nombre,'telefono'=>$request->telefono,'direccion'=>$request->direccion,'e_mail'=>$request->e_mail]);
        return redirect('/Proveedor');
    }
    public function delete($id)
    {
        $metodo =Proveedor::where('id_Proveedor',$id);
        $metodo->delete();
        return redirect()->back();
    }

    public function search(Request $request){
        $payments = Proveedor::where('nombre','like','%'.$request->nombre.'%')->get();
        return \View::make('payment_method.payment_methods_list',['payments'=>$payments]);
    }
    public function service()
    {

    }
}

<?php

namespace App\Http\Controllers;
use App\CuponDescuento;
use Illuminate\Http\Request;
use DB;

class CuponDescuentoController extends Controller
{  public function index() {
    //DB:

    $payments = CuponDescuento::all();

    return view('CuponDescuento.show',['payments'=>$payments]) ;
}
    public function store(Request $request)
    {
        $payment = new CuponDescuento();
        $payment->create($request->all());
        return redirect('/CuponDescuento');
    }
    public function create()
    {
        return view('CuponDescuento.create');
    }
    public function edit($id)
    {
        $payment =CuponDescuento::where('id_CuponDescuento',$id)->get();
        $payment=$payment[0];
        return view('CuponDescuento.edit',compact('payment'));
    }
    public function update(Request $request)
    {
        $payment = CuponDescuento::find($request->id_CuponDescuento);
        $payment->update($request->all());
        return redirect('/CuponDescuento');
    }
    public function delete($id)
    {
        $metodo =CuponDescuento::where('id_CuponDescuento',$id);
        $metodo->delete();

        return redirect()->back();
    }

    public function search(Request $request){
        $payments = CuponDescuento::where('nombre','like','%'.$request->nombre.'%')->get();
        return \View::make('payment_method.payment_methods_list',['payments'=>$payments]);
    }
    public function service()
    {

    }
}

<?php

namespace App\Http\Controllers;
use App\Producto;
use DB;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index() {
        //DB:

        $payments = Producto::all();

        return view('Producto.show',['payments'=>$payments]) ;
    }
    public function store(Request $request)
    {
        $payment = new Producto();
        $payment->create($request->all());
        return redirect('/Producto');
    }
    public function create()
    {
        return view('Producto.create');
    }
    public function edit($id)
    {
        $payment =Producto::where('id_Producto',$id)->get();
        $payment=$payment[0];
        return view('Producto.edit',compact('payment'));
    }
    public function update(Request $request)
    {
        $product = Producto::where('id_Producto',$request->id)->update(['id_Categoria'=>$request->id_Categoria,'Nombre'=>$request->Nombre,'precioVenta'=>$request->precioVenta,'precioCompra'=>$request->precioCompra]);
        return redirect('/Producto');
    }
    public function delete($id)
    {
        $metodo =Producto::where('id_Producto',$id);
        $metodo->delete();

        return redirect()->back();
    }

    public function search(Request $request){
        $payments = Producto::where('nombre','like','%'.$request->nombre.'%')->get();
        return \View::make('payment_method.payment_methods_list',['payments'=>$payments]);
    }
    public function service()
    {

    }
}

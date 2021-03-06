<?php

namespace App\Http\Controllers;
use App\Categoria;
use App\Inventario;
use App\Producto;
use DB;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index() {
        //DB:
        $nombreProducto = DB::table('Producto')
            -> select('Categoria.Descripcion','Producto.nombre','Producto.precioCompra','Producto.precioVenta','Producto.id_Producto')
            ->join('Categoria','Producto.id_Categoria','=','Categoria.id_Categoria')
            ->get();
        return view('Producto.show',compact('payments','nombreProducto')) ;
    }
    public function store(Request $request)
    {
        $payment = new Producto();
        $payment->create($request->all());


        $producto=Producto::all()->last();

        $inventario= new Inventario();
        $inventario->create(['id_Producto'=>$producto->id_Producto,'id_Categoria'=>$request->id_Categoria,'Cantidad'=>0]);

        return redirect('/Producto');
    }
    public function create()
    {
        $category=Categoria::pluck('Descripcion','id_Categoria');

        return view('Producto.create',compact('category'));
        //return view('Producto.create');
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
        $metodo =Inventario::where('id_Producto',$id);
        $metodo->delete();

        $metodo =Producto::where('id_Producto',$id);
        $metodo->delete();

        $surte = DB::table('Producto')
            -> select('Producto.id_Producto','s.fecha','s.id_Proveedor')
            ->join('Surte as s','Producto.id_Producto','=','s.id_Producto')
            ->get();

    //    $metodo =Surte::where('id_Proveedor', '=', $id_Proveedor)->where('id_Producto', '=', $id)->where('fecha','=',$fecha);
      //  $metodo->delete();


        return redirect()->back();

    }

    public function search(Request $request){
        $payments = Producto::where('nombre','like','%'.$request->nombre.'%')->get();
        return \View::make('payment_method.payment_methods_list',['payments'=>$payments]);
    }

    public function serviceWeb()
    {
        $producto=Producto::all();
        return response()->json($producto);
    }
}

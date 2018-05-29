<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Usuario;
use Illuminate\Http\Request;
use App\Venta;
use App\CuponDescuento;
use App\MetodosPago;
use DB;
use App\detalleVenta;


class VentaController extends Controller
{
    public function index() {
        //DB:
        $payments = DB::table('Venta as v')
            -> select('u.nombre_Usuario','c.nombre as cupon','m.nombre as metodoPago','v.id_Venta','v.Fecha_Venta','v.Subtotal','v.iva','v.TotalVenta')
            ->join('CuponDescuento  as c','c.id_CuponDescuento','=','v.id_CuponDescuento')
            ->join('MetodosPago as m','m.id_MetodosPago','=','v.id_MetodosPago')
            ->join('Usuario as u','u.id_Usuario','=','v.id_Usuario')

            ->get();
        return view('Venta.show',compact('payments')) ;
    }
    public function store(Request $request)
    {
        echo $request->id_Venta;
        $payment = new Venta();
        $payment->create($request->all());
        return redirect('/Venta');
    }


    public function create()
    {
        $usuario=Usuario::pluck('nombre_Usuario','id_Usuario');
        $cuponDescuento=cuponDescuento::pluck('nombre','id_CuponDescuento');
        $metodosPago=metodosPago::pluck('nombre','id_MetodosPago');

            return view('Venta.create',compact('usuario','cuponDescuento','metodosPago'));
    }


    public function insertar($id)
    {
        $producto=Producto::pluck('Nombre','id_Producto');

        return view('detalleVenta.create',compact('producto','id'));
    }

    public function mostrar($id)
    {


        $detalle = DB::table('detalleVenta as v')
            -> select('p.nombre', 'v.id_Venta','v.cantidadProducto','v.Total')
            ->join('Producto as p','p.id_Producto','=','v.id_Producto')
            ->where('id_Venta',$id)
            ->get();


//        $detalle = detalleVenta::where('id_Venta', $id)->get();
        return view('Venta.mostrar',compact('detalle'));
    }

    public function edit($id)
    {

        $usuario =Venta::where('id_Venta',$id)->get();
        $usuario=$usuario[0];
        return view('Venta.edit',compact('usuario'));
    }

    public function update(Request $request)
    {
        $payment = Venta::where('id_Venta', $request->id)
            ->update(['id_Usuario' => $request->id_Usuario,'Fecha_Venta'=>$request->Fecha_Venta,'Subtotal'=>$request->Subtotal,'iva'=>$request->iva,'TotalVenta'=>$request->TotalVenta,'id_CuponDescuento'=>$request->id_CuponDescuento,'id_MetodosPago'=>$request->id_MetodosPago]);

        return redirect('/Venta');
    }

    public function delete($id)
    {
        $metodo =Venta::where('id_Venta',$id);
        $metodo->delete();

        return redirect()->back();
    }

    public function search(Request $request){
        $payments = Venta::where('nombre','like','%'.$request->nombre.'%')->get();
        return \View::make('payment_method.payment_methods_list',['payments'=>$payments]);
    }
    public function serviceWeb()
    {
        $metodo=Venta::all();
        return response()->json($metodo);
    }
}

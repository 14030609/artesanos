<?php

namespace App\Http\Controllers;

use App\Inventario;
use Illuminate\Http\Request;
use App\Producto;
use App\detalleVenta;
use App\CuponDescuento;
use App\MetodosPago;
use App\Venta;
use DB;
use Illuminate\Support\Collection;
use function MongoDB\BSON\toJSON;

class detalleVentaController extends Controller
{
    public function index() {
        //DB:

        $payments = detalleVenta::all();

        return view('detalleVenta.show',['payments'=>$payments]) ;
    }
    public function store(Request $request)
    {
        $aux = DB::table('Venta as v')
            -> select('v.TotalVenta')
            ->where('id_Venta',$request->id_Venta)
            ->get();
        $auxTotal=array();
        foreach ($aux as $d) {
            foreach ($d as $e){
                array_push($auxTotal, $e);
            }
        }

//        echo $request->id_Venta;
        $precio= array();

        $surte = DB::table('Producto as p')
            -> select('p.precioVenta')
            ->where('id_Producto',$request->id_Producto)
            ->get('precioVenta');
        foreach ($surte as $d) {
            foreach ($d as $e){
                array_push($precio, $e);

            }
        }
        $Subtotal=$precio[0]*$request->cantidadProducto ;
        $iva=$Subtotal*0.16 ;
        $Total=$Subtotal+$iva ;

        $porcentaje = array();
        //echo $request->id_CuponDescuento;

        $cupondescuento = DB::table('Venta as v')
            -> select('c.porcentaje')
            ->join('CuponDescuento as c','v.id_CuponDescuento','=','c.id_CuponDescuento')
            ->where('id_Venta',$request->id_Venta)
            ->get();

//        print_r($cupondescuento);

        foreach ($cupondescuento as $d) {
            foreach ($d as $e){
                array_push($porcentaje, $e);
            }
        }

        $descuento=($porcentaje[0]*$Total)/100;
        $TotalVenta=$Total-$descuento+$auxTotal[0];

        $payment = new detalleVenta();
        $payment->create(['id_Producto'=>$request->id_Producto,'id_Venta'=>$request->id_Venta,'cantidadProducto'=>$request->cantidadProducto,'Total'=>$Total]);

        $payment = Venta::where('id_Venta', $request->id_Venta)
            ->update(['Subtotal' => $Subtotal,'iva'=>$iva,'TotalVenta'=>$TotalVenta]);






        $cantidad = DB::table('Inventario as i')
            -> select('i.Cantidad as cantidadInventario' )
            ->join('Producto as p','p.id_Producto','=','i.id_Producto')
            ->join('detalleVenta as v','i.id_Producto','=','v.id_Producto')
            ->where('p.id_Producto',$request->id_Producto)
            ->get();

//print_r($cantidad);



        $cantidadDecremento = array() ;
        foreach ($cantidad as $d) {
            foreach ($d as $e)
            {
                array_push($cantidadDecremento, $e);

            }
        }

        echo $cantidadDecremento[0];
        echo $request->cantidadProducto ;

        $resta= $cantidadDecremento[0]-$request->cantidadProducto;

        echo $resta;

        $payment = Inventario::where('id_Producto', $request->id_Producto)
            ->update(['Cantidad' => $resta]);


        return redirect('/Venta');
    }

    public function create($id)
    {
        $producto=Producto::pluck('Nombre','id_Producto');

        return view('Venta.insertar',compact('producto'));
    }

    public function edit($id)
    {

        $usuario =detalleVenta::where('id_detalleVenta',$id)->get();
        $usuario=$usuario[0];
        return view('detalleVenta.edit',compact('usuario'));
    }
    public function update(Request $request)
    {
        $payment = detalleVenta::where('id_detalleVenta', $request->id)
            ->update(['id_Usuario' => $request->id_Usuario,'Fecha_detalleVenta'=>$request->Fecha_detalleVenta,'Subtotal'=>$request->Subtotal,'iva'=>$request->iva,'TotaldetalleVenta'=>$request->TotaldetalleVenta,'id_CuponDescuento'=>$request->id_CuponDescuento,'id_MetodosPago'=>$request->id_MetodosPago]);

        return redirect('/detalleVenta');
    }

    public function delete($id)
    {
        $metodo =detalleVenta::where('id_Venta',$id);
        $metodo->delete();

        return redirect()->back();
    }

    public function search(Request $request){
        $payments = detalleVenta::where('nombre','like','%'.$request->nombre.'%')->get();
        return \View::make('payment_method.payment_methods_list',['payments'=>$payments]);
    }
    public function serviceWeb()
    {
        $metodo=detalleVenta::all();
        return response()->json($metodo);
    }
}

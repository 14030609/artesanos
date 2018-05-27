<?php

namespace App\Http\Controllers;
use App\Categoria;
use DB;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index() {
        //DB:

        $payments = Categoria::all();

        return view('Categoria.show',['payments'=>$payments]) ;
    }
    public function store(Request $request)
    {
        $payment = new Categoria();
        $payment->create($request->all());
        return redirect('/Categoria');
    }
    public function create()
    {
        //$category=Categoria::pluck('id_Categoria','Descripcion');

        return view('Categoria.create');
    }
    public function edit($id)
    {
        $payment =Categoria::where('id_Categoria',$id)->get();
        $payment=$payment[0];
        return view('Categoria.edit',compact('payment'));
    }
    public function update(Request $request)
    {
        $payment = Categoria::where('id_Categoria', $request->id)
            ->update(['Descripcion'=>$request->Descripcion]);

        return redirect('/Categoria');
    }
    public function delete($id)
    {
        $metodo =Categoria::where('id_Categoria',$id);
        $metodo->delete();

        return redirect()->back();
    }

    public function search(Request $request){
        $payments = Categoria::where('nombre','like','%'.$request->nombre.'%')->get();
        return \View::make('payment_method.payment_methods_list',['payments'=>$payments]);
    }

    public function service()
    {

    }
}

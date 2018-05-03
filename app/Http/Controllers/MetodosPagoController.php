<?php

namespace App\Http\Controllers;

use App\MetodosPago;
use Illuminate\Http\Request;

class MetodosPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $MetodosPago=MetodosPago::orderBy('id','DESC')->paginate(3);
  //      return view('MetodosPago.index',compact('MetodosPago'));
        $payments = MetodosPago::all();
        return view('MetodosPago.index',['MetodosPago'=>$payments]) ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('MetodosPago.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 'nombre'=>'required', 'descripcion'=>'required']);
        MetodosPago::create($request->all());
        return redirect()->route('MetodosPago.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $MetodosPago=MetodosPago::find($id);
        return  view('MetodosPago.show',compact('MetodosPago'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $MetodosPago=MetodosPago::find($id);
        return view('MetodosPago.edit',compact('MetodosPago'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[ 'nombre'=>'required', 'descripcion'=>'required']);

        MetodosPago::find($id)->update($request->all());
        return redirect()->route('MetodosPago.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MetodosPago::find($id)->delete();
        return redirect()->route('MetodosPago.index')->with('success','Registro eliminado satisfactoriamente');

    }
}

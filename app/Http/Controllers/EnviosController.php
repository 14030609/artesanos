<?php

namespace App\Http\Controllers;
use App\Ciudad;
use
    App\Envios;
use App\Estado;
use App\Usuario;
use DB;
use Illuminate\Http\Request;

class EnviosController extends Controller
{
    public function index() {
        $envios = DB::table('Envios')
            -> select('Usuario.nombre_Usuario AS usuario','Envios.nombre AS remitente','Envios.email AS emailRemitente','Ciudad.nombre AS ciudadDestino','Estado.nombre AS estadoDestino','Envios.telefono AS telefonoContacto','Envios.direccion AS direccionDestino', 'Envios.id_Envio')
            ->join('Usuario','Envios.id_Usuario','=','Usuario.id_Usuario')
            ->join('Ciudad','Envios.id_Ciudad','=','Ciudad.id_Ciudad')
            ->join('Estado','Ciudad.id_Estado','=','Estado.id_Estado')
            ->get();
        return view('Envios.show',compact('envios')) ;
    }
    public function store(Request $request)
    {
        $envios = new Envios();
        $envios->create($request->all());
        return redirect('/Envios');
    }
    public function create()
    {
        $estado=Estado::pluck('nombre','id_Estado');
        $ciudad=Ciudad::pluck('nombre','id_Ciudad');
        $usuario=Usuario::pluck('nombre_Usuario','id_Usuario');

        return view('Envios.create',compact('usuario','estado','ciudad'));
    }
    public function edit($id)
    {
        $envios =Envios::where('id_Envio',$id)->get();
        $envios=$envios[0];
        return view('Envios.edit',compact('envios'));
    }
    public function update(Request $request)
    {
        $envios = Envios::find($request->id_Envio);
        $envios->update($request->all());
        return redirect('/Envio');
    }
    public function delete($id)
    {
        $metodo =Envios::where('id_Envio',$id);
        $metodo->delete();

        return redirect()->back();
    }

    public function search(Request $request){
        $envios = Envios::where('nombre','like','%'.$request->nombre.'%')->get();
        return \View::make('envios_method.envios_methods_list',['envios'=>$envios]);
    }
    public function service()
    {

    }
}

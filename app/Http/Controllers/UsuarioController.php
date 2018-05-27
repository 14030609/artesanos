<?php

namespace App\Http\Controllers;
use App\Rol;
use
    App\Usuario;
use DB;
use Illuminate\Http\Request;use Illuminate\Support\Facades\App;

class UsuarioController extends Controller
{
    public function index() {
        //DB:

        $usuarios = Usuario::all();
        $usuarios = DB::table('Usuario')
            ->join('Rol','Usuario.id_Rol','=','Rol.id_Rol')
            ->get();

        return view('Usuario.show',['usuarios'=>$usuarios]) ;
    }
    public function store(Request $request)
    {
        $usuarios = new Usuario();
        $usuarios->create($request->all());
        return redirect('/Usuario');
    }
    public function create()
    {
        $rol=Rol::pluck('descripcion','id_Rol');

        return view('Usuario.create',compact('rol'));
        //return view('Usuario.create');
    }
    public function edit($id)
    {
        $usuarios =Usuario::where('id_Usuario',$id)->get();
        $usuarios=$usuarios[0];
        return view('Usuario.edit',compact('usuarios'));
    }
    public function update(Request $request)
    {
        $usuario = Usuario::where('id_Usuario',$request->id)->update(['nombre_Usuario'=>$request->nombre_Usuario,'pass'=>$request->pass,'id_Rol'=>$request->id_Rol]);
        return redirect('/Usuario');
    }
    public function delete($id)
    {
        $metodo =Usuario::where('id_Usuario',$id);
        $metodo->delete();

        return redirect()->back();
    }

    public function search(Request $request){
        $usuarios = Usuario::where('nombre','like','%'.$request->nombre.'%')->get();
        return \View::make('usuarios_method.usuarios_methods_list',['usuarios'=>$usuarios]);
    }
    public function in()
    {
        return view('Usuario.in',compact('usuarios'));
    }
}

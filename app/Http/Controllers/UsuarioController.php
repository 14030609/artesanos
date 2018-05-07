<?php

namespace App\Http\Controllers;
use
    App\Usuario;
use DB;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index() {
        //DB:

        $usuarios = Usuario::all();

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
        return view('Usuario.create');
    }
    public function edit($id)
    {
        $usuarios =Usuario::where('id_Usuario',$id)->get();
        $usuarios=$usuarios[0];
        return view('Usuario.edit',compact('usuarios'));
    }
    public function update(Request $request)
    {
        $usuarios = Usuario::find($request->id_Usuario);
        $usuarios->update($request->all());
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
    public function service()
    {

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class UsuarioController extends Controller
{
    public function index(){
        $a = "LLegas a la funcion";
        Log::emergency($a);
        Log::alert(message: $a);
        Log::critical($a);
        Log::error($a);
        Log::warning($a);
        Log::notice($a);
        Log::info($a);
        Log::debug($a);
        $user = Usuarios::all();
        return view("vistas.index", compact('user'));
    }

    public function create()
    {
        return view('vistas.create');
        
    }


    public function store(Request $request)
    {
        //dd($request->all());
        
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios',
            'password' =>'required|string|min:8'
        ]);       
        $validatedData['password'] = bcrypt($validatedData['password']);

        Usuarios::create($validatedData);
        
        $usuarios = Usuarios::paginate(4);
        
        //return redirect()->route('user.create')->with('success','Usuario creado correctamente');
        
        /*$validated= $request->validate(
            ['nombre' => 'required|string|max:10']
        );

        Usuarios::create([
            'name' => $validated['nombre'],
            'email' =>  Str::random(10).'@gmail',
            'password' => Hash::make("Hola123")
        ]);
        */
        
        return view('vistas.list_user', compact('usuarios'));
    }

    public function edit($id){
        //dd($id);
        $usuario = Usuarios::find($id);
        //dd($usuario);
        return view('vistas.update', compact('usuario')); //compact -> pasar el parametro
    }

    public function update(Request $request){
        //dd($request->all());

        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $usuario = Usuarios::find($request->id);

        if ($usuario){
            $usuario->nombre = $request->nombre;
            $usuario->save();
            Alert::success('Exito', 'Los datos han sido guardados correctamente')->flash();
        } else {
            Alert::error('Error', 'Usuario no encontrado')->flash();
        }
        return redirect()->route('user.list');
        //Alert::success('Exito')->flash();
    }   
    
    public function destroy($id){
        //dd($id);
        $usario= Usuarios::find($id);
        $usario->delete();
        Alert::success('Exito','Los datos han sido guardados correctamente.');
        return redirect()->route('user.list');
    }

    
    public function list(){
        $usuarios = Usuarios::paginate(4);
        //dd($usuarios)
        return view('vistas.list_user', compact('usuarios'));
    }

}

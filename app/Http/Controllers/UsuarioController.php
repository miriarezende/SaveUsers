<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function Welcome(){
        return view('welcome');
    }

    public function Register (){
        return view('application');
    }

    public function User(){
        return view('login');
    }

    public function store (Request $request) {
        $usuario= new Usuario();
        $usuario->name= $request->input('name');
        $existEmail = Usuario::where('email', $request->input('email'))->first();
        if (!$existEmail) {
            $usuario->email = $request->input('email');
        } else {
            return redirect('/register')->with('msg', 'Email já cadastrado!');
        }

        $existUsername = Usuario::where('username', $request->input('username'))->first();
        if (!$existUsername) {
            $usuario->username = $request->input('username');
        } else {
            return redirect('/register')->with('msg', 'Nome de usuário já existente!');
        }


        $usuario->password = bcrypt($request->input('password'));
        //$user = Auth::user();
        //$usuario->user_id = $user->id;
        $usuario->save();

        return redirect('/')->with('msg','Candidato cadastrado com sucesso!');
    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
        if (auth()->validate($credentials)) {
            if (auth()->attempt($credentials)) {
                return redirect('/status/{id}');
            }
        }else{
            return redirect('/login')->with('msg', 'Senha ou Email inválidos, tente novamente.');
        }
    }

    public function status($id){

        $user = Auth::user();

        /*$usuario = Event::findOrFail($id);

        if($user->id != $usuario->user_id){
            return redirect('/');
        }*/

        $idArray=Usuario::pluck('id')->toArray();
        $userCount = count($idArray);
        $name= $user->name;
        $username= $user->username;        
        return view('status', ['userCount' => $userCount, 'name' => $name, 'username' => $username]);
    }
    
}
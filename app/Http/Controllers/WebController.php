<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{

    public function home(){
        return view('index');
    }


    public function eixosAtuacao(){
        return view('front.eixos-atuacao');
    }
    public function presidentes(){
        return view('front.presidentes');
    }
    public function regimentoInterno(){
        return view('front.regimento-interno');
    }
    public function arquivos(){
        return view('front.arquivos');
    }

    public function oquedizemasleis(){
        return view('front.o-que-dizem-as-leis');
    }
    public function planosEstaduais(){
        return view('front.planos-estaduais');
    }
    public function tecnologiasContraEscravidao(){
        return view('front.tecnologias-contra-escravidao');
    }


    public function agenda(){
        return view('front.agenda');
    }

    public function gruposTrabalho(){
        return view('front.grupos-trabalho');
    }
    public function relatorios(){
        return view('front.relatorios');
    }

    public function bibliotec(){
        return view('front.bibliotec');
    }

    public function ataReunioes(){
        return view('front.ata-reunioes');
    }

    public function caravanaLiberdade(){
        return view('front.caravana-liberdade');
    }
    public function contato(){
        return view('front.contato');
    }

    public function guiaParaJornalistas(){
        return view('front.guia-para-jornalistas');
    }

    public function inscricao(){
        return view('front.inscricao');
    }
    public function login(){
        return view('front.login');
    }


    public function saveUser(Request $request){


        $messages = [
            'password.min' => 'A senha aceita no minímo 5 caracteres!',
            'password.required' => 'O campo senha é obrigatório!',
            'name.required' => 'O campo nome é obrigatório!',
            'email.required' => 'O campo email é obrigatório!',
            'password_confirmation.same' => 'Confirmação de senha não confere!',
            'password_confirmation.min' => 'A Confirmação de senha aceita no minímo 5 caracteres!',
        ];

        //verificação dos inputs
        $this->validate($request,[
            'password' => 'required|min:5',
            'password_confirmation' => 'required|min:5|same:password',
            'name' => 'required',
            'email' => 'required',

        ], $messages);

         //verificando se já existe usuário
         //=============================
         $usuario_existente = User::where('email','=',$request->email)
                                ->first();
        //exisitindo
        //==============================
        if($usuario_existente != null){
                return back()->with('error', 'Ops, usuário já cadastrado!');
        }

        $userCreate = User::create($request->all());

        return redirect()->route('login')
        ->with('success','Cadastro realizado, entre em contato com ADM para acessar plataforma!');


    }


    public function verificaLogin(Request $request){

        $messages = [
            'password.required' => 'O campo senha é obrigatório!',
            'email.required' => 'O campo email é obrigatório!',
        ];

        //verificação dos inputs
        $this->validate($request,[
            'password' => 'required',
            'email' => 'required',
        ], $messages);

        //verificando se existe usuário=======================
        $usuario = User::where('email','=',$request->email)
          ->first();
        if($usuario == null){
                return redirect()->route('login')
                ->with('error','Ops, usuário não encontrado!');
        }



        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

           //LOGADO
           return redirect()->route('home');

        }else {
            return redirect()->route('login')
            ->with('error','Ops, usuário e senha não correspondem!');
       }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function users(){
        // $usuarios = User::where('perfil','!=','administrador')->get();
        $usuarios = User::all();

        return view('logado.users',compact('usuarios'));
    }

    public function user($id){
        $usuario = User::find($id);
        return view('logado.user',compact('usuario'));
    }

    public function updateuser(Request $request){
        $usuario = User::find($request->id);
        $usuario->perfil = $request->perfil;
        $usuario->save();

        // $usuarios = User::where('perfil','!=','administrador')->get();
        $usuarios = User::all();

        return view('logado.users',compact('usuarios'));
    }




}

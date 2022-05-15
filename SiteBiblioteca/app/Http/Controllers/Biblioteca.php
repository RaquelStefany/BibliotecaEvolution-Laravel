<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Biblioteca extends Controller
{
    public function index(){
        $pagina = "Início";

        return view('welcome');
    }

    public function explorer(){
        $pagina = "Explorer";

        return view('explorer');
    }

    public function quemsomos(){
        $pagina = "Quem Somos";

        return view('quemsomos');
    }

    public function contato(){
        $pagina = "Contato";

        return view('contato');
    }

    public function login(){
        $pagina = "Login";

        return view('login');
    }

    public function cadastro(){
        $pagina = "Cadastro";

        return view('cadastro');
    }

    public function perfil(Request $request){
        $pagina = "Perfil";

        $dados = [
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'quantidade' => $request->input('quantidade')
        ];

        return view('perfil', $dados);
    }

    public function misterioso(Request $request){
        $pagina = "Misterioso";

        $livros = [
            'nome' => $request->query('nome'),
            'email' => $request->query('email'),
            'quantidade' => $request->input('quantidade')
        ];

        return view('misterioso', $livros);
    }
}

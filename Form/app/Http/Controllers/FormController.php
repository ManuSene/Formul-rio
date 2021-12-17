<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{

    public function index(Request $request){

      $nome = $request->input('nome');
      $sobrenome = $request->input('sobrenome');
      $genero = $request->input('genero');
      $email = $request->input('email');
      $senha = $request->input('senha');        

        return view('form', ['nome'=>$nome, 'sobrenome'=>$sobrenome, 'genero'=>$genero, 'email'=>$email, 'senha'=>$senha]);

    }

    public function show(){
        return view('dados');
    }
}

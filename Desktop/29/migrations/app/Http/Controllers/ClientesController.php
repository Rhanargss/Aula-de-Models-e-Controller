<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;

class ClientesController extends Controller{

    public function create (Request $request){
        $cliente = new Cliente;

        $cliente->telefone = $request->telefone;
        $cliente->dataDeNascimento = $request->dataDeNascimento;
        $cliente->endereco = $request->endereco;
        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->save();
        return response()->json([$cliente]);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function criar(Request $request) {
        $cliente = new Cliente;
        $cliente->nameCli = $request->nameCli;
        $cliente->cpfCli = $request->cpfCli;
        $cliente->emailCli = $request->emailCli;

        $cliente->save();
        return redirect('/listar_cliente');
    }

    public function listar() {
        $clientes = Cliente::all();

        return view("clientes", ["clientes"=>$clientes]);
    }

    public function formCriarCliente() {
        return view("cadastro_cliente");
    }
}


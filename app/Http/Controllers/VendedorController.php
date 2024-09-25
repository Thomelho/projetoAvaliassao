<?php

namespace App\Http\Controllers;

use App\Models\Vendedor;
use Illuminate\Http\Request;

class VendedorController extends Controller
{

    public function criar(Request $request) {
        $vendedor= new Vendedor;
        $vendedor->nomeVen = $request->nomeVen;
        $vendedor->matriculaVen = $request->matriculaVen;
        $vendedor->comissaoVen = $request->comissaoVen;

        $vendedor->save();
        return redirect('/listar_vendedor');
    }

    public function listar() {
        $vendedores = Vendedor::all();

        return view("vendedores", ["vendedores"=>$vendedores]);
    }

    public function formCriarVendedor() {
        return view("cadastro_vendedor");
    }
}
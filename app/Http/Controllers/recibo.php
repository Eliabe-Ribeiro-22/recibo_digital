<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\receita;

date_default_timezone_set('America/Sao_Paulo');

class recibo extends Controller
{
    public function main(){
        return view('inicio');
    }
    
    public function new(){
        return view("new");
    }

    public function salvar(Request $request){
        try {
            $receita = new receita;
            $receita->NOME = $request->NOME;
            $receita->VALOR = $request->VALOR;
            $receita->DATA = $request->DATA;

            $receita->save();

            return redirect("/")->with('msg' , 'Receita cadastrada com sucesso');
            
        } catch (Exception $e) {
            return redirect("/")->with('error', 'erro ao cadastrar um recibo');
        }

    }
}

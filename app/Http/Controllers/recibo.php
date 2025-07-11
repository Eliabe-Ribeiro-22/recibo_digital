<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\receita;
use Illuminate\Support\Facades\DB;
// PDF
use Barryvdh\DomPDF\Facade\Pdf;

date_default_timezone_set('America/Sao_Paulo');

class recibo extends Controller
{
    public function main(){
        $receitas = DB::table('receitas')->get();
        return view('inicio', ['receitas' => $receitas]);
    }
    
    public function new(){
        return view("new");
    }

    public function salvar(Request $request){
        try {
            $receita = new receita;
            $receita->NOME = $request->NOME;
            $receita->TIPO = $request->TIPO;
            $receita->VALOR = $request->VALOR;
            $receita->DATA = $request->DATA;

            $receita->save();

            return redirect("/")->with('msg' , 'Receita cadastrada com sucesso');
            
        } catch (Exception $e) {
            return redirect("/")->with('error', 'erro ao cadastrar um recibo');
        }

    }

    public function delete($id){
        try {
            // encontrar o id do aluno, para depois excluí-lo
            receita::findOrFail($id)->delete();

            return redirect('/')->with('msg', 'Receita excluída com sucesso');
        } catch (Exception $e) {
         return redirect("/")->with('error', 'erro ao excluir uma receita');
        }
        
    }
    
    public function edit($id){
        $receita = receita::findOrFail($id);
        return view('edit', ['receita' => $receita]);
    }

    public function alterar(Request $request){

        $data = $request->all();

        receita::findOrFail($request->id)->update($data);
        return redirect('/')->with('msg', 'Alterado recibo com sucesso');
                
    }

    public function rb_dgt($id){
    $receita = receita::findOrFail($id);

    $pdf = Pdf::loadView('pdf.recibo', ['receita' => $receita]);
    return $pdf->stream('recibo01.pdf');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios; 

class GameController extends Controller
{

    public function salvarJogador(Request $request)
    {

        $request->validate([
            'nome' => 'required|max:255',
        ]);


        $usuario = new Usuarios();
        $usuario->nome = $request->nome;
        $usuario->save();

        return redirect()->route('combat');
    }
    
    public function indexCombate()
    {
        return "Bem-vindo à Arena de Combate! (Aqui vai sua view do jogo)";
    }
}
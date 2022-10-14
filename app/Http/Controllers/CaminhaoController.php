<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Carro;

class CarroController extends Controller
{
    public function FormularioCadastro(){
        return view('cadastrarCarros');
    }

    public function Editar(){
        return view('editarCarros');
    }

    public function SalvarBanco(Request $request){
        $dadosCarros = $request->validate([
            'modelo' => 'string|Required',
            'marca' => 'string|Required',
            'ano' => 'string|Required',
            'cor' => 'string|Required',
            'valor' => 'string|required',
        
        ]);
            
    
        Carros::create($dadosCarros);

        return Redirect::route('home');
    
    
    }

        
   
}



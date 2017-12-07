<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DB;

class jogosController extends Controller
{
    function Iniciar ($id_jogo){

    	
    	
    	if(strcmp($id_jogo, '0') == 0){

    		$dados = \DB::table('ficha_tecnica')->where('nome_jogo', 'Diablo 3')->get();
        	return view('jogos/diablo_3')->with('dados', $dados);

	    } else if(strcmp($id_jogo, '1') == 0) {

	       $dados = \DB::table('ficha_tecnica')->where('nome_jogo', 'Dishonored')->get();
	       return view('jogos/dishonored')->with('dados', $dados);

	    } else if(strcmp($id_jogo, '2') == 0) {

	       $dados = \DB::table('ficha_tecnica')->where('nome_jogo', 'Far Cry 3')->get();
	       return view('jogos/far_cry_3')->with('dados', $dados);

	    } else if(strcmp($id_jogo, '3') == 0) {

	       $dados = \DB::table('ficha_tecnica')->where('nome_jogo', 'Mortal Kombat')->get();
	       return view('jogos/mortal_kombat')->with('dados', $dados);

	    } else if(strcmp($id_jogo, '4') == 0) {

	       $dados = \DB::table('ficha_tecnica')->where('nome_jogo', 'Resident Evil 6')->get();
	       return view('jogos/resident_evil')->with('dados', $dados);

	    } else if(strcmp($id_jogo, '5') == 0) {

	       $dados = \DB::table('ficha_tecnica')->where('nome_jogo', 'Skyrim')->get();
	       return view('jogos/skyrim')->with('dados', $dados);

	    } else if(strcmp($id_jogo, '6') == 0) {

	       $dados = \DB::table('ficha_tecnica')->where('nome_jogo', 'Tomb Raider')->get();
	       return view('jogos/tomb_raider')->with('dados', $dados);

	    }

    }
}

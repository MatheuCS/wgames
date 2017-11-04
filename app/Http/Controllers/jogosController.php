<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jogosController extends Controller
{
    function Iniciar ($id_jogo){
    	
    	if(strcmp($id_jogo, '0') == 0){

        	return view('jogos/diablo_3')->with('id', $id_jogo);

	    } else if(strcmp($id_jogo, '1') == 0) {

	       return view('jogos/dishonored')->with('id', $id_jogo);

	    } else if(strcmp($id_jogo, '2') == 0) {

	       return view('jogos/far_cry_3')->with('id', $id_jogo);

	    } else if(strcmp($id_jogo, '3') == 0) {

	       return view('jogos/mortal_kombat')->with('id', $id_jogo);

	    } else if(strcmp($id_jogo, '4') == 0) {

	       return view('jogos/resident_evil')->with('id', $id_jogo);

	    } else if(strcmp($id_jogo, '5') == 0) {

	       return view('jogos/skyrim')->with('id', $id_jogo);

	    } else if(strcmp($id_jogo, '6') == 0) {

	       return view('jogos/tomb_raider')->with('id', $id_jogo);

	    }

    }
}

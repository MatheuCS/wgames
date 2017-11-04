<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detonadoController extends Controller
{
    function Iniciar ($nome_jogo){
    	
    	if(strcmp($nome_jogo, 'diablo_3') == 0){
        	return view('detonados/diablo_3');
	    } else if(strcmp($nome_jogo, 'dishonored') == 0) {
	       return view('detonados/dishonored');
	    } else if(strcmp($nome_jogo, 'far_cry_3') == 0) {
	       return view('detonados/far_cry_3');
	    } else if(strcmp($nome_jogo, 'mortal_kombat') == 0) {
	       return view('detonados/mortal_kombat');
	    } else if(strcmp($nome_jogo, 'resident_evil') == 0) {
	       return view('detonados/resident_evil');
	    } else if(strcmp($nome_jogo, 'skyrim') == 0) {
	       return view('detonados/skyrim');
	    } else if(strcmp($nome_jogo, 'tomb_raider') == 0) {
	       return view('detonados/tomb_raider');
	    }

    }
}

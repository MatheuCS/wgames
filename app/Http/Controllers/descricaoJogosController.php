<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class descricaoJogosController extends Controller
{
    function Tratar (){
    	
    	$dados = [
	      0 => ['nome' => 'Diablo 3',
	            'desenvolvedor' => 'Blizzard' ],

	      1 => ['nome' => 'Dishonored',
	            'desenvolvedor' => 'Arkane Studios' ],

	      2 => ['nome' => 'Far Cry 3',
	            'desenvolvedor' => 'Ubisoft Montreal' ],

	      3 => ['nome' => 'Mortal Kombat',
	            'desenvolvedor' => 'Netherrealm Studios' ],

	      4 => ['nome' => 'Resident Evil',
	            'desenvolvedor' => 'Capcom' ],

	      5 => ['nome' => 'Skyrim',
	            'desenvolvedor' => 'Bethesda Game Studios' ],

	      6 => ['nome' => 'Tomb Raider',
	            'desenvolvedor' => 'Core Design' ] 
    	];
    	return view('descricao_jogos')->with('dados', $dados);

    }
}

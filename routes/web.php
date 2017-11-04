<?php


Route::get('/', function () {
    return view('index');
});

Route::get('jogos', function () {
    return view('jogos');
});

Route::get('contato', function () {
    return view('contato');
});

Route::get('detonado', function () {
    return view('detonado');
});

Route::get('detonado/{nome_jogo?}', ('detonadoController@Iniciar'));


/*Route::get('detonado/{nome_jogo?}', function ($nome_jogo = null) {

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
    
    return view('detonado');
    
});*/

Route::get('descricao_jogos', ('descricaoJogosController@Tratar'));

/*Route::get('descricao_jogos', function () { 
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
});*/

/* ----------------- */
/* Routes dos jogos */
Route::get('jogos/{id_jogo}', ('jogosController@Iniciar'));


/*Route::get('diablo_3/{id_jogo}', function ($id_jogo) {
    return view('jogos/diablo_3')->with('id', $id_jogo);
});

Route::get('dishonored/{id_jogo}', function ($id_jogo) {
    return view('jogos/dishonored')->with('id', $id_jogo);
});

Route::get('far_cry_3/{id_jogo}', function ($id_jogo) {
    return view('jogos/far_cry_3')->with('id', $id_jogo);
});

Route::get('mortal_kombat/{id_jogo}', function ($id_jogo) {
    return view('jogos/mortal_kombat')->with('id', $id_jogo);
});

Route::get('resident_evil/{id_jogo}', function ($id_jogo) {
    return view('jogos/resident_evil')->with('id', $id_jogo);
});

Route::get('skyrim/{id_jogo}', function ($id_jogo) {
    return view('jogos/skyrim')->with('id', $id_jogo);
});

Route::get('tomb_raider/{id_jogo}', function ($id_jogo) {
    return view('jogos/tomb_raider')->with('id', $id_jogo);
});*/
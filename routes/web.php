<?php

Route::get('/', function () { return view('index'); });

Route::get('jogos', function () { return view('jogos'); });

Route::get('contato', function () { return view('contato'); });

Route::get('detonado', function () { return view('detonado'); });

Route::get('jogos/{id_jogo}', ('jogosController@Iniciar'));

Route::get('detonado/{nome_jogo?}', ('detonadoController@Iniciar'));

Route::get('descricao_jogos', ('descricaoJogosController@Tratar'));
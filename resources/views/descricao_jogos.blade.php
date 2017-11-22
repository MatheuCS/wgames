@extends('layout.base_layout')
@section('titulo')
  {{'Descrição Jogos'}}
@stop

@section('conteudo')
      <h2>Ficha técnica básica dos jogos:<br /></h2>
      @foreach ($dados as $jogo)
        @include('inc.descricao_jogo')   
      @endforeach   
@stop


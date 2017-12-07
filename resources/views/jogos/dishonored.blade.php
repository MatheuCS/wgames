@extends('layout.base_layout')
@section('titulo')
  {{'Dishonored'}}
@stop

@section('conteudo')
       @php

            echo "<h2>" . $dados[0]->nome_jogo . " - Ficha técnica:<br /></h2>"; 
            echo "<p> Desenvolvedor: " . $dados[0]->desenvolvedor . "</p>";  
            echo "<p> Plataformas: " . $dados[0]->plataformas . "</p>";  
            echo "<p> Lançamento: " . $dados[0]->lancamento . "</p>";  
            echo "<p> Gênero: " . $dados[0]->genero . "</p>";  
            echo "<p> Modos de Jogo: " . $dados[0]->modo_de_jogo . "</p>";  
            echo "<p> Classificação: " . $dados[0]->classificacao . "</p>";  

            echo "<h2> Descrição:<br> </h2>"; 
            echo "<p>" . $dados[0]->descricao . "</p>"; 

      @endphp
@stop


        
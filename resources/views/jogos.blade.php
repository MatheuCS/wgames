@extends('layout.base_layout')
@section('titulo')
  {{'Jogos'}}
@stop

@section('conteudo')
     <h2>Jogos:</h2>
      <table width="100%" height="auto" border="0">
        <tr>
          <td><a href="jogos/0"><img src="{{ asset('img/Diablo-III-11.jpg') }}" width="95%" height="250" /></a></td>
          <td><a href="jogos/1"><img src="{{ asset('img/Dishonored-Logo.jpg') }}" width="95%" height="250" /></a></td>
          <td><a href="jogos/2"><img src="{{ asset('img/far-cry-3-logo.jpg') }}" width="95%" height="250" /></a></td>
        </tr>

        <tr>
          <td><a href="jogos/3"><img src="{{ asset('img/mortalkombat.jpg') }}" width="95%" height="250" /></a></td>
          <td><a href="jogos/4"><img src="{{ asset('img/resident-evil.jpg') }}" width="95%" height="250" /></a></td>
          <td><a href="jogos/5"><img src="{{ asset('img/skyrim-2135.jpg') }}" width="95%" height="250" /></a></td>
        </tr>

        <tr>
          <td>&nbsp;</td>
          <td><a href="jogos/6"><img src="{{ asset('img/tomb_raider.jpg') }}" width="95%" height="250" /></a></td>
          <td>&nbsp;</td>
        </tr>
      </table>
      <a class="myButton" style=" margin-top: 1%; margin-bottom: 1%;" href="descricao_jogos">Descricao Geral dos jogos</a>
@stop


      

   
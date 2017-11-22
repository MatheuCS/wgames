@extends('layout.base_layout')
@section('titulo')
  {{'Detonados'}}
@stop

@section('conteudo')
     <h2>Detonado:</h2>
      <table width="100%" height="auto" border="0">
        <tr>
          <td><a href="detonado/diablo_3"><img src="{{ asset('img/Diablo-III-11.jpg') }}" width="95%" height="250" /></a></td>
          <td><a href="detonado/dishonored"><img src="{{ asset('img/Dishonored-Logo.jpg') }}" width="95%" height="250" /></a></td>
          <td><a href="detonado/far_cry_3"><img src="{{ asset('img/far-cry-3-logo.jpg') }}" width="95%" height="250" /></a></td>
        </tr>

        <tr>
          <td><a href="detonado/mortal_kombat"><img src="{{ asset('img/mortalkombat.jpg') }}" width="95%" height="250" /></a></td>
          <td><a href="detonado/resident_evil"><img src="{{ asset('img/resident-evil.jpg') }}" width="95%" height="250" /></a></td>
          <td><a href="detonado/skyrim"><img src="{{ asset('img/skyrim-2135.jpg') }}" width="95%" height="250" /></a></td>
        </tr>

        <tr>
          <td>&nbsp;</td>
          <td><a href="detonado/tomb_raider"><img src="{{ asset('img/tomb_raider.jpg') }}" width="95%" height="250" /></a></td>
          <td>&nbsp;</td>
        </tr>
      </table>
@stop


        


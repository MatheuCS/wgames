@extends('layout.base_layout')
@section('titulo')
  {{'Skyrim'}}
@stop

@section('conteudo')
      <?php $jogos = ['Diablo 3', 'Dishonored', 'Far Cry 3', 'Mortal Kombat', 'Resident Evil', 'Skyrim', 'Tomb Raider'];?>
      <h2><?php echo $jogos[$id] . " - "; ?>Ficha técnica:<br /></h2>
      <p>Desenvolvedor: Bethesda Game Studios</p>
      <p>Plataformas: PC, Xbox 360 e Playstation 3</p>
      <p>Lançamento: 11 de novembro de 2011</p>
      <p> Gênero: RPG</p>
      <p>Modos de Jogo: Single-Player</p>
      <p>Classificação: +18</p>
      <h2>Descriçao:</h2>
      <p>        Os acontecimentos deste jogo passam-se duzentos anos depois da, já quase  esquecida, crise de <em>Oblivion</em>, no ano 201 da quarta era (4E 201) na  província de Skyrim, no norte de Tamriel, e 30 anos após a mais recente Grande  Guerra, onde Thalmors e Humanos lutaram arduamente, mas que quase extinguiu os  humanos de Tamriel, e para evitar tal derrota, acordaram com os Thalmors,  rendendo duas forças e sujeitando-se as suas exigências.<br />
      Skyrim é a terra natal de um povo bravo chamados de Nords (nórdicos), onde  além da Grande Guerra, irrompeu uma guerra civil após o assassinato do Alto Rei  de Skyrim, Torygg. E diante de todas estas guerras e problemas, a província se  encontra dividida: de um lado se quer a separação do Império que agora está em  ruínas, e do outro lado se quer permanecer leal.</p>
      <p>Descrição wikipedia.org</p>
      <h2><span id="Desenvolvimento">Desenvolvimento</span>:</h2>
      <p><strong>The Elder Scrolls V:  Skyrim</strong> é um RPG eletrônico desenvolvido pela Bethesda Game Studios e  publicado pela Bethesda Softworks. É o  quinto jogo da série <em>The Elder Scrolls</em>,  seguindo <em>The Elder Scrolls IV: Oblivion</em>.  Foi lançado em 11 de novembro de 2011 para PlayStation 3, Xbox 360 e Microsoft Windows. É o primeiro jogo ocidental da história a  receber 40/40 (nota máxima) na conceituada revista japonesa Famitsu. O Jogo Conseguiu três prêmios no VGA 2011, incluindo melhor  jogo do ano. .</p>
@stop
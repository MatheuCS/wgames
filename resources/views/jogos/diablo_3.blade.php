@extends('layout.base_layout')
@section('titulo')
  {{'Diablo 3'}}
@stop

@section('conteudo')
      <?php $jogos = ['Diablo 3', 'Dishonored', 'Far Cry 3', 'Mortal Kombat', 'Resident Evil', 'Skyrim', 'Tomb Raider'];?>
      <h2><?php echo $jogos[$id] . " - "; ?>Ficha técnica:<br /></h2>
      <p>Desenvolvedor: Blizzard</p>
      <p>Plataformas: PC</p>
      <p>Lançamento: 15 de maio de 2012 </p>
      <p>Gênero: RPG</p>
      <p>Modos de Jogo: Um jogador, multijogador</p>
      <p>Classificação: +16</p>      

      <h2>Descriçao:</h2>
      <p>Diablo III segue a história de seu predecessor, Diablo II: Lord of Destruction,   que superou expectativas. A história do novo jogo passa-se depois de   vinte anos dos acontecimentos que marcaram o fim de Diablo II. Os   demônios Diablo, Mephisto e Baal foram derrotados, mas quando um cometa   cai na Terra exatamente no lugar onde Diablo foi confinado, os   guerreiros são novamente convocados para defender a humanidade contra as   chamas do Inferno. O estilo do jogo continua o mesmo,   mas desta vez utilizando os recursos das novas tecnologias reproduzindo   um mundo totalmente em 3D e interativo, podendo até destruir cenários.   Os jogadores poderão escolher entre cinco classes disponíveis e se   aventurar num mundo mágico e ameaçador que Diablo III proporciona, porém   desta vez, com novas habilidades e equipamentos e com um nível de   personalização de personagem mais apurado.</p>
      <p>Descrição wikipedia.org</p>
      <h2><span id="Desenvolvimento">Desenvolvimento</span>:</h2>
      <p>O jogo foi lançado no dia 15 de maio de 2012 e em seguida, quebrou o recorde de jogo com maior número de vendas (3,5 milhões) em seu primeiro dia de lançamento.Deste então, em uma semana mais de 6,3 milhões de pessoas ao redor do mundo jogaram a série.Logo durante o lançamento, um fã da série conseguiu zerar o jogo em 12 horas e 29 minutos. Na primeira semana, vários usuários se queixavam de sumiço de itens e a adição de amigos desconhecidos.O alto número de acessos também fez alguns servidores entrarem em colapso temporariamente.</p>
@stop

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WGames - Resident Evil</title>
<style type="text/css">

body,td,th {
  color: #FFF;
}
body {
  background-color: #000;
  background: url("/img/Fundo_site.jpg");
}
#apDiv1 {
  position:absolute;
  width:200px;
  height:115px;
  z-index:1;
}
#apDiv2 {
  position:absolute;
  width:200px;
  height:115px;
  z-index:1;
}
td img {display: block;}

</style>

</head>

<body >
<table width="950" border="0" align="center">
  <tr>
    <td><img src="<?php echo asset('img/cabecalho.gif'); ?>" width="941" height="250" /></td>
  </tr>
</table>
<table width="950" border="0" align="center">
  <tr>
    <td><table style="margin-left: 10%;" border="0" cellpadding="0" cellspacing="0" width="950">
      <!-- fwtable fwsrc="Menu.png" fwpage="Page 1" fwbase="Menu.gif" fwstyle="Dreamweaver" fwdocid = "207533512" fwnested="0" -->
      <tr>
        <td><img src="<?php echo asset('img/Menu/spacer.gif'); ?>" alt="" name="undefined_2" width="1" height="1" border="0" id="undefined_2" /></td>
        <td><img src="<?php echo asset('img/Menu/spacer.gif'); ?>" alt="" name="undefined_2" width="154" height="1" border="0" id="undefined_2" /></td>
        <td><img src="<?php echo asset('img/Menu/spacer.gif'); ?>" alt="" name="undefined_2" width="47" height="1" border="0" id="undefined_2" /></td>
        <td><img src="<?php echo asset('img/Menu/spacer.gif'); ?>" alt="" name="undefined_2" width="155" height="1" border="0" id="undefined_2" /></td>
        <td><img src="<?php echo asset('img/Menu/spacer.gif'); ?>" alt="" name="undefined_2" width="41" height="1" border="0" id="undefined_2" /></td>
        <td><img src="<?php echo asset('img/Menu/spacer.gif'); ?>" alt="" name="undefined_2" width="155" height="1" border="0" id="undefined_2" /></td>
        <td><img src="<?php echo asset('img/Menu/spacer.gif'); ?>" alt="" name="undefined_2" width="43" height="1" border="0" id="undefined_2" /></td>
        <td><img src="<?php echo asset('img/Menu/spacer.gif'); ?>" alt="" name="undefined_2" width="155" height="1" border="0" id="undefined_2" /></td>
        <td><img src="<?php echo asset('img/Menu/spacer.gif'); ?>" alt="" name="undefined_2" width="44" height="1" border="0" id="undefined_2" /></td>
        <td><img src="<?php echo asset('img/Menu/spacer.gif'); ?>" alt="" name="undefined_2" width="155" height="1" border="0" id="undefined_2" /></td>
        <td><img src="<?php echo asset('img/Menu/spacer.gif'); ?>" alt="" name="undefined_2" width="1" height="1" border="0" id="undefined_2" /></td>
      </tr>

      <tr>

        <td rowspan="2" colspan="2">
          <a href="/">
            <img name="Menu_r1_c1" src="<?php echo asset('img/Menu/Menu_r1_c1.gif'); ?>" width="155" height="30" border="0" id="Menu_r1_c1" alt="" />
          </a>
        </td>

        <td rowspan="2"><img name="Menu_r1_c3" src="<?php echo asset('img/Menu/Menu_r1_c3.gif'); ?>" width="47" height="30" border="0" id="Menu_r1_c3" alt="" /></td>

        <td rowspan="2">
          <a href="/jogos">
            <img name="Menu_r1_c4" src="<?php echo asset('img/Menu/Menu_r1_c4.gif'); ?>" width="155" height="30" border="0" id="Menu_r1_c4" alt="" />
          </a>
        </td>

        <td rowspan="2">
          <img name="Menu_r1_c5" src="<?php echo asset('img/Menu/Menu_r1_c5.gif'); ?>" width="41" height="30" border="0" id="Menu_r1_c5" alt="" />
        </td>

        <td rowspan="2">
          <a href="/detonado">
            <img name="Menu_r1_c6" src="<?php echo asset('img/Menu/Menu_r1_c6.gif'); ?>" width="155" height="30" border="0" id="Menu_r1_c6" alt="" />
          </a>
        </td>

        <td rowspan="2">
          <img name="Menu_r1_c7" src="<?php echo asset('img/Menu/Menu_r1_c7.gif'); ?>" width="43" height="30" border="0" id="Menu_r1_c7" alt="" />
        </td>

        <td rowspan="2">
          <a href="contato">
            <img name="Menu_r1_c10" src="<?php echo asset('img/Menu/Menu_r1_c10.gif'); ?>" width="155" height="30" border="0" id="Menu_r1_c10" alt="" />
          </a>
        </td>

        <td><img src="<?php echo asset('img/Menu/spacer.gif'); ?>" alt="" name="undefined_2" width="1" height="1" border="0" id="undefined_2" /></td>

      </tr>
      <tr>
        <td><img src="<?php echo asset('img/Menu/spacer.gif'); ?>" alt="" name="undefined_2" width="1" height="29" border="0" id="undefined_2" /></td>
      </tr>
    </table>
  </td> 
  </tr>
</table>

<table width="944" height="auto" border="0" align="center">

  <tr bgcolor="#000000">
    <td height="auto">
      <div style="margin: 2%;">
      <?php $jogos = ['Diablo 3', 'Dishonored', 'Far Cry 3', 'Mortal Kombat', 'Resident Evil', 'Skyrim', 'Tomb Raider'];?>
      <h2><?php echo $jogos[$id] . " - "; ?>Ficha técnica:<br /></h2>
      <p>Desenvolvedor: Capcom</p>
<p>Projetista: Jiro Taoka</p>
<p>Plataformas: PlayStation 3,Xbox 360,Microsoft Windows</p>
<p>Lançamento: <strong>PlayStation 3 &amp; Xbox 360</strong></p>
<p>Gênero: Horror dramático,<em>survival horror</em>, tiro na terceira pessoa</p>
      <p>Modos de Jogo: Single player, Multiplayer</p>
      <p>Classificaçao: Maiores de 18 Anos

      </p>

      <h2>Decriçao:</h2>
      <p><em><strong>Resident Evil 6</strong></em> (バイオハザード 6, título japonês: <em>Biohazard 6</em>), é um jogo de vídeo do género horror dramático/de sobrevivência jogado na terceira pessoa desenvolvido e publicado pela Capcom. Foi apresentado durante uma campanha de divulgação viral na página <em>NoHopeLeft.com</em>. Apesar do nome é o nono jogo da série principal <em>Resident Evil</em> e foi lançado em 2 de outubro de 2012 para PlayStation 3 e Xbox 360. A versão para Microsoft Windows foi lançada no dia 22 de março de 2013.</p>
      <p>A história é contada a partir das perspectivas de Chris Redfield, membro e fundador da BSAA traumatizado por ter falhado uma missão; Leon S. Kennedy, um sobrevivente de Raccoon City e agente especial do governo; Jake Muller, filho ilegítimo de Albert Wesker e associado de Sherry Birkin; e Ada Wong, uma agente solitária com ligações aos ataques bio-terroristas pela Neo-Umbrella.</p>
      <p>O conceito do jogo começou em 2009, mas começou a ser produzido no ano seguinte sobre a supervisão de Hiroyuki Kobayashi, que já tinha produzido <em>Resident Evil 4</em>. A equipa de produção acabou por crescer e tornou-se na maior de sempre a trabalhar num jogo da série <em>Resident Evil</em>.</p>
      <p><em>Resident Evil 6</em> recebeu reacções negativas aquando do lançamento da demo devido aos problemas nos controlos e criticas muito diversas devido à mudança drástica da jogabilidade encontrada na versão final do jogo, sendo um ponto de elogio e também de critica nas diferentes análises.</p>
      <p>Apesar de não ter sido bem recebido tanto pela imprensa especializada como pelos jogadores, a Capcom editou mais de 4,5 milhões de cópias e <em>Resident Evil 6</em> tornou-se o jogo da série que mais vendeu inicialmente.</p>

<h2>Analise:</h2>
<h2>Curiosidades</h2>
<p>Depois de RE4, este é o primeiro título onde é possível mirar, caminhar e andar ao mesmo tempo.</p>
<p>Na hora do desespero, corra e pronto. Como desde a primeira versão da série, a jogatina é facilitada ao chegar perto de uma porta e clicar para abrí-la. Isso também acontece nessa versão. Não importa a quantidade de Zumbies. Não importa a distância que seu parceiro está. Clicar para abrir a porta ou portão resolve o problema. Se tiver um Zumbie próximo, ele vai ficar andando sem te atacar. Como esse &quot;bug&quot; vem do século passado, já pode ser considerado uma ajuda da Capcom para os jogadores saírem de encrencas pesadas!</p>
<p>Jogabilidade é bem estruturada, principalmente utilizando o controle do Xbox 360. Tem grave problema com a câmera. Quase em todo o game, literalmente, é necessário controlar a câmera manualmente. Em batalhas, a visão atrapalha totalmente. Não dá para caminhar sem controlar a visão. Se compararmos com o novo Tomb Raider, que possui uma camera excelente, esse erro fica em evidencia total. Comandos de controle se baseiam em andar com o personagem, controlar a câmera, acionar o guia de rota, tomar comprimidos de cura, mirar e atirar, correr, acionar lista de ítens e movimentos de ação (utilizando também os direcionais &quot;RS&quot; se estiver no controle do Xbox 360). Tudo muito instintivo e fácil de lembrar, visto que os desenhos dos botões aparecem na tela durante todo o game como mostra a imagem ao lado. Ações são indicadas com imagens dos botões ou círculos com um marcador de tempo. É necessário fazer o comando antes do marcador zerar ou quando o marcador chegar sobre uma marca indicada no círculo.</p>
<p>Habilidades podem ser compradas para a evolução do personagem. Existe uma infinidade de novas habilidades para comprar com pontos adquiridos durante a jogatina. Enigmas inteligentes seguidos de muitos manjados continuam. Armas como pistolas, metralhadoras, granada incendiária fazem parte de um arsenal que o jogador vai encontrando linearmente durante o desenrolar da história.</p>

<p><img src="<?php echo asset('img/Rodapé.png'); ?>" width="900" height="95" /></p></td>
</div>

</table>

</body>
</html>

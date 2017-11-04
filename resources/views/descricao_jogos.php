<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WGames - Diablo 3</title>
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
      <h2>Ficha técnica básica dos jogos:<br /></h2>

      <?php 

        foreach ($dados as $jogo) {
          echo "<p>Nome: " . $jogo['nome'] . " | Desenvolvedor: " . $jogo['desenvolvedor'];
        }

      ?>
      

<p><img src="<?php echo asset('img/Rodapé.png'); ?>" width="900" height="95" /></p></td>
</div>

</table>

</body>
</html>

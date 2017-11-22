<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="{{ asset('css/wgames.css') }}" type="text/css">
		<title>@yield('titulo', 'WGames')</title>
	</head>

	<body>

		{{--*************************************************************CABECALHO*************************************************************--}}
		
		@section('cabecalho')
		<div>			
			<div align="center" >
			    <img src="{{ asset('img/cabecalho.gif') }}" width="75%" height="250" />
			</div>
		</div>
		@show

		{{--*************************************************************MENU*************************************************************--}}
		
		@section('menu')
		<div>
			<div align="center">
				<a href="/">
            		<img src="{{ asset('img/Menu/home.png') }}" width="12%" height="30"/>
          		</a>         		
          		<a href="/jogos">
		            <img src="{{ asset('img/Menu/jogos.png') }}" width="12%" height="30"/>
		        </a>
		        <a href="/detonado">
		            <img src="{{ asset('img/Menu/detonado.png') }}" width="12%" height="30"/>
		        </a>
		        <a href="/contato">
	            	<img src="{{ asset('img/Menu/contato.png') }}" width="12%" height="30"/>
	          	</a>
			</div>			  
		</div>
		@show

		{{--*************************************************************CONTEUDO*************************************************************--}}
		
		<div align="center">
			<div style="background-color: #000; width: 75%; min-height: 255px; height: auto; padding-top: 0.1%; padding-bottom: 0.1%;">
    			<div style="padding-right: 2%; padding-left: 2%;">
					@yield('conteudo')	
			 	</div>
 			 </div>					
		</div>

		{{--*************************************************************RODAPE*************************************************************--}}
		
		@section('rodape')
		<div align="center">
			<div  style="bottom:0; border: 0; margin-top: 0.5%;">
			    <img src="{{ asset('img/Rodapé.png') }}" width="75%"/>
			</div>
		</div>
		@show

	</body>

</html>
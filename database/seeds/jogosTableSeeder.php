<?php

use Illuminate\Database\Seeder;

class jogosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nomes_jogos =['Diablo 3', 'Dishonored', 'Far Cry 3', 'Mortal Kombat', 'Resident Evil 6', 'Skyrim', 'Tomb Raider'];

        $desenvolvedor=['Blizzard', 'Arkane Studios', 'Ubisoft Montreal', 'Netherrealm Studios e ANDYN', 'Capcom', 'Bethesda Game Studios', 'Core Design e Crystal Dynamics'];

        $plataformas=['PC', 'PC, Xbox 360 e Playstation 3', 'PC, Xbox 360 e Playstation 3', 'Xbox 360, PlayStation 3, PlayStation Vita ,Microsoft Windows', 'PlayStation 3, Xbox 360, Microsoft Windows', 'PC, Xbox 360 e Playstation 3', 'PlayStation 3, Xbox 360, Microsoft Windows'];

        $lancamento=['15 de maio de 2012', '12 de outubro de 2012', '30 de novembro de 2012', '28 de Abril de 2011', '2 de outubro de 2012', '11 de novembro de 2011', ' Lançamento do primeiro Tomb Raider foi em 1996'];

        $genero=['RPG', 'Stealth, ação-aventura, tiro em primeira pessoa', 'Tiro em primeira pessoa, "mundo aberto"', 'Luta', 'Horror dramático, survival horror, tiro na terceira pessoa', 'RPG', 'Terror Ação, Aventura, tiro na terceira pessoa'];

        $modo_de_jogo=['Single player/Multiplayer', 'Single player', 'Single player/Multiplayer', 'Single player/Multiplayer', 'Single player/Multiplayer', 'Single player', 'Single player'];

        $classificacao=['+16', '+18', '+18', '+18', '+18', '+18', '+18'];

        $descricao=[
        	'Diablo III segue a história de seu predecessor, Diablo II: Lord of Destruction, que superou expectativas. A história do novo jogo passa-se depois de vinte anos dos acontecimentos que marcaram o fim de Diablo II. Os demônios Diablo, Mephisto e Baal foram derrotados, mas quando um cometa cai na Terra exatamente no lugar onde Diablo foi confinado, os guerreiros são novamente convocados para defender a humanidade contra as chamas do Inferno. O estilo do jogo continua o mesmo, mas desta vez utilizando os recursos das novas tecnologias reproduzindo um mundo totalmente em 3D e interativo, podendo até destruir cenários. Os jogadores poderão escolher entre cinco classes disponíveis e se aventurar num mundo mágico e ameaçador que Diablo III proporciona, porém desta vez, com novas habilidades e equipamentos e com um nível de personalização de personagem mais apurado.',
        	 'És o antigo guarda-costas de confiança da Imperatriz. Injustamente culpado pelo seu assassinato, e movido pela vingança, terás de te tornar um infame assassino, conhecido apenas pela perturbadora máscara que se tornou o teu cartão-de-visita. À medida que vagueias por um mundo destroçado pela peste e oprimido por um governo armado com estranhas tecnologias, a verdade por detrás da tua traição é tão obscura como as águas que rodeiam a cidade. As tuas escolhas determinarão o destino do mundo, mas, o que quer que aconteça, a tua antiga vida desapareceu para sempre.',
        	  '"Para além dos limites da civilização encontra-se uma ilha, um lugar sem lei governado por pirataria e miséria humana, onde os escapes são apenas as drogas ou o cano de uma arma. Este é o lugar onde você se encontra, preso num lugar que esqueceu o certo do errado, um lugar que vive pelos princípios da violência. Descubra os segredos sangrentos da ilha e leva a luta ao inimigo; improvise e use o ambiente para sobreviver. Cuidado com a beleza e o mistério deste paraíso inexplorado e vive para superar os seus personagens cruéis e desesperados. Irá precisar de mais do que sorte para sobreviver". ',
        	   'O jogo retorna as suas raízes, com lutas com movimentação completamente 2D, mas gráficos em 3D, onde não há mais possibilidade de se esquivar dos golpes andando para os lados e é o jogo mais rápido da série. Ao invés do clássico controle com Soco e Chute, Alto e Baixo, terá um botão pra cada membro sendo Braço e Perna, Esquerda e Direita.

				O jogo conta com vários modos de jogo. O principal é o Kombate, onde permite lutas um contra um ou em duplas, permitindo até 4 jogadores lutarem na mesma partida. Outro modo de jogo é a Torre dos Desafios, que consiste em uma grande torre dividida em 300 partes, onde cada parte contém um desafio a ser completado com um personagem especifico. Alguns dos desafios que compões a torre são os Minigames Teste sua Força, em que o jogador deve apertar freneticamente os botões do controle com o objetivo de acumular força para quebrar certos objetos; o Teste seu Golpe, onde o jogador deve acumular uma quantidade muito precisa de força para quebrar somente o objeto que está em uma pilha; o Teste sua Sorte, onde uma roleta sorteia várias condições especiais para a luta; e o Teste sua Percepção, onde um objeto é escondido em um dos vários copos/crânios e são embaralhados e cabe ao jogador descobrir onde estão.

				Durante as lutas foram adicionados vários novos sistemas e alguns reformulados, como os combos, onde pode-se ligar quase todos os golpes tendo poucos golpes que não tem ligação ou combos já programados e alguns personagens podem usar armas durante eles. Além disso os combos podem ser ligados com o parceiro no modo Tag-Team, assim criando sequencias únicas com dois personagens. Ao jogo também foi adicionada uma barra, que é usada para fazer movimentos especiais. Ela dividida em 3 níveis que podem respectivamente tornar os golpes especiais mais fortes, revidar um golpe e o Movimento de Raio-X, um combo mostrando os danos causados pelos golpes diretamente nos ossos e órgãos dos adversários, podendo retirar até 50% da vida do oponente dependendo do personagem. E por fim também há os Golpes Finais, um movimento em que se faz uma sequência de botões para finalizar o oponente de uma forma violenta, além dos movimentos finais de cada personagem, há o Fatality de Arena ou Stage Fatality, agora inovado, ao invés de simplesmente desferir um uppercut no oponente, o jogador executa um movimento que o leva a uma morte consequente (Ex: Na floresta viva, ao invés de dar um gancho no oponente, o personagem o agarra pelo ombro e o braço e o arremessa na boca de uma árvore que mastiga até que as pernas quebrem e se desprendam do corpo). Há também a inclusão do famoso Babality, em que o oponente volta a ser um bebê chorão. (Ex: Reptile, quando é pego por um, torna-se um ovo de réptil e eclode, tornando-se um "bebê-réptil", começando a chorar e cuspir ácido).',
 				'Resident Evil 6 (バイオハザード 6, título japonês: Biohazard 6), é um jogo de vídeo do género horror dramático/de sobrevivência jogado na terceira pessoa desenvolvido e publicado pela Capcom. Foi apresentado durante uma campanha de divulgação viral na página NoHopeLeft.com. Apesar do nome é o nono jogo da série principal Resident Evil e foi lançado em 2 de outubro de 2012 para PlayStation 3 e Xbox 360. A versão para Microsoft Windows foi lançada no dia 22 de março de 2013.

				A história é contada a partir das perspectivas de Chris Redfield, membro e fundador da BSAA traumatizado por ter falhado uma missão; Leon S. Kennedy, um sobrevivente de Raccoon City e agente especial do governo; Jake Muller, filho ilegítimo de Albert Wesker e associado de Sherry Birkin; e Ada Wong, uma agente solitária com ligações aos ataques bio-terroristas pela Neo-Umbrella.

				O conceito do jogo começou em 2009, mas começou a ser produzido no ano seguinte sobre a supervisão de Hiroyuki Kobayashi, que já tinha produzido Resident Evil 4. A equipa de produção acabou por crescer e tornou-se na maior de sempre a trabalhar num jogo da série Resident Evil.

				Resident Evil 6 recebeu reacções negativas aquando do lançamento da demo devido aos problemas nos controlos e criticas muito diversas devido à mudança drástica da jogabilidade encontrada na versão final do jogo, sendo um ponto de elogio e também de critica nas diferentes análises.

				Apesar de não ter sido bem recebido tanto pela imprensa especializada como pelos jogadores, a Capcom editou mais de 4,5 milhões de cópias e Resident Evil 6 tornou-se o jogo da série que mais vendeu inicialmente.',

				'Os acontecimentos deste jogo passam-se duzentos anos depois da, já quase esquecida, crise de Oblivion, no ano 201 da quarta era (4E 201) na província de Skyrim, no norte de Tamriel, e 30 anos após a mais recente Grande Guerra, onde Thalmors e Humanos lutaram arduamente, mas que quase extinguiu os humanos de Tamriel, e para evitar tal derrota, acordaram com os Thalmors, rendendo duas forças e sujeitando-se as suas exigências.
				Skyrim é a terra natal de um povo bravo chamados de Nords (nórdicos), onde além da Grande Guerra, irrompeu uma guerra civil após o assassinato do Alto Rei de Skyrim, Torygg. E diante de todas estas guerras e problemas, a província se encontra dividida: de um lado se quer a separação do Império que agora está em ruínas, e do outro lado se quer permanecer leal.', 
				'Tomb Raider é uma série de jogos, histórias em quadrinhos e filmes tendo como protagonista a personagem Lara Croft. Desde o lançamento do primeiro Tomb Raider, em 1996, as séries tiveram um grande lucro e Lara transformou-se num dos principal ícone da indústria de video-jogos/vídeo games. O Guiness Book reconheceu Lara Croft como "a heroína de video-jogo/vídeo game mais bem sucedida" em 2006.

				Seis jogos da série foram desenvolvidos pela Core Design, e os três últimos pela Crystal Dynamics. Todos os jogos foram publicados pela Eidos Interactive, que mantém os direitos dos personagens e a marca registrada de Tomb Raider. Para o cinema, Lara Croft: Tomb Raider e Lara Croft Tomb Raider: The Cradle of Life foram produzidos, estrelando a atriz americana Angelina Jolie como Lara Croft. Todos os jogos Tomb Raider venderam mais de 30 milhões de unidades, fazendo uma das séries de video jogos mais vendidas de todos os tempos.'];

				for ($i=0; $i < count($nomes_jogos); $i++) { 

					$dados = [
						'nome_jogo' => $nomes_jogos[$i],
						'desenvolvedor' => $desenvolvedor[$i],
						'plataformas' => $plataformas[$i],
						'lancamento' => $lancamento[$i],
						'genero' => $genero[$i],
						'modo_de_jogo' => $modo_de_jogo[$i],
						'classificacao' => $classificacao[$i],
						'descricao' => $descricao[$i]
					];

					DB::table('ficha_tecnica')->insert($dados);

				}

    }
}
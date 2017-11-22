@extends('layout.base_layout')
@section('titulo')
  {{'Skyrim'}}
@stop

@section('conteudo')
      @component('comp_titulo_detonado')
          @slot('titulo')
            Detonado Skyrim:
          @endslot
      @endcomponent
 
      <p>Atualização 7: Dá uma vista de olhos pelas diferentes raças que existem   em Skyrim e àsvantagens que têm cada uma delas: Imperials, Orcs,   Khajiit, Nords, Argonians, High Elves,Wood Elves, Redguards e Bretons. <br />
        Atualização 6: Explicamos-te como funciona o casamento: descobre como te casares com homens ou com mulheres. <br />
        Atualização 5: Acrescentamos alguns conselhos básicos para te   aventurares no jogo, ajuda para comprar uma casa, para ganhar dinheiroe   para tirar proveito dos teus companheiros. Adicionamos ainda a lista de   truques para a versão PC de Skyrim. Estamos imparáveis! <br />
        Atualização 4: Guia atualizado com vários detalhes sobre Vampirismo e   Licantropia: comoser vampiro e lobisomem, como fazer para te curares,   quais as vantagens e inconvenientes, etc.! <br />
        Atualização 3: Acrescentamos as missões Season Unending , The Fallen , The World-Eater's Eyrie , Sovngarde e Dragonslayer . <br />
        Atualização 2: Adicionadas as missões principais Alduin's Wall , The Throat Of The World,Elder Knowledge e Alduin's Bane. <br />
        Atualização: Completamos o guia com as missões principais The Horn   of Jurgen Windcaller, A Blade In The Dark, Diplomatic Immunity e A   Cornered Rat. <br />
        O Elder Scrolls V: Skyrim é um jogo gigantesco a todos os níveis e a   maior parte do seu encanto reside no facto de se adaptar a cada   jogador, permitindo que cada um escolha qual a sua forma de jogar e   avançar pelo mundo. <br />
        Embora este jogo possua missões principais e missões secundárias, a   sua liberdade intrínseca permite que cada acontecimento possa suceder   por diversos motivos. Isto faz com que escrever um Guia de um jogo como   este não seja tarefa fácil, pois a experiência que vivemos ao jogar não   será certamente sempre a mesma que a vossa. <br />
        De qualquer forma, estamos convencidos de que te poderá servir de   ajuda em alguns momentos. Não te esqueças que este guia ainda está em   construção e que o vamos periodicamente ampliando e completando. Por   favor não hesites em deixar nos comentários as tuas dúvidas, sugestões e   críticas! <br />
        Bem-vindo a Skyrim! <br />
        Guia The Elder Scrolls V: Skyrim - Todas as raças <br />
        Lista detalhada com as características de cada raça, com as suas vantagens correspondentes.. <br />
        Guia The Elder Scrolls V: Skyrim - Conselhos <br />
        Guia The Elder Scrolls V: Skyrim - Conselhos Básicos <br />
        Guia The Elder Scrolls V: Skyrim - Como Ganhar Dinheiro <br />
        Guia The Elder Scrolls V: Skyrim - Comprar una Casa <br />
        Guia The Elder Scrolls V: Skyrim - Tira partido dos teus Companheiros <br />
        Guia The Elder Scrolls V: Skyrim - Truques <br />
        Guia The Elder Scrolls V: Skyrim - Truque e dicas para PC <br />
        Guia The Elder Scrolls V: Skyrim - Missões <br />
        1. Guia The Elder Scrolls V: Skyrim - Unbound <br />
        2. Guia The Elder Scrolls V: Skyrim - Before the Storm <br />
        3. Guia The Elder Scrolls V: Skyrim - Bleak Falls Barrow <br />
        4. Guia The Elder Scrolls V: Skyrim - The Golden Claw <br />
        5. Guia The Elder Scrolls V: Skyrim - Dragon Rising <br />
        6. Guia The Elder Scrolls V: Skyrim - In My Time Of Need <br />
        7. Guia The Elder Scrolls V: Skyrim - The Way Of The Voice <br />
        8. Guia The Elder Scrolls V: Skyrim - The Horn of Jurgen Windcaller <br />
        9. Guia The Elder Scrolls V: Skyrim - A Blade In The Dark <br />
        10. Guia The Elder Scrolls V: Skyrim - Diplomatic Immunity <br />
        11. Guia The Elder Scrolls V: Skyrim - A Cornered Rat <br />
        12. Guia The Elder Scrolls V: Skyrim - Alduin's Wall <br />
        13. Guia The Elder Scrolls V: Skyrim - The Throat Of The World <br />
        14. Guia The Elder Scrolls V: Skyrim - Elder Knowledge <br />
        14.1. Guia The Elder Scrolls V: Skyrim - Elder Knowledge (Parte II) <br />
        15. Guia The Elder Scrolls V: Skyrim - Alduin's Bane <br />
        15.1. Guia The Elder Scrolls V: Skyrim - Season Unending <br />
        15.2. Guia The Elder Scrolls V: Skyrim - The Fallen <br />
        16. Guia The Elder Scrolls V: Skyrim - The World-Eater's Eyrie <br />
        17. Guia The Elder Scrolls V: Skyrim - Sovngarde <br />
        17.1 Guia The Elder Scrolls V: Skyrim - Dragonslayer <br />
        Guia The Elder Scrolls V: Skyrim - Mutações (Vampiro e Lobisomem) <br />
        Guia The Elder Scrolls V: Skyrim - Mutações - Vampirismo <br />
        Guia The Elder Scrolls V: Skyrim - Mutações - Transformação em Vampiro <br />
        Guia The Elder Scrolls V: Skyrim - Mutações - Cura do Vampirismo <br />
        Guia The Elder Scrolls V: Skyrim - Mutações - Licantropia (Lobisomem) <br />
        Guia The Elder Scrolls V: Skyrim - Mutações - Transformação em Lobisomem <br />
        Guia The Elder Scrolls V: Skyrim - Mutações - Cura da Licantropia <br />
        Guia The Elder Scrolls V: Skyrim - Casamento <br />
        Guia The Elder Scrolls V: Skyrim - Como casar? <br />
        Guia The Elder Scrolls V: Skyrim - Casamento com Mulheres <br />
        Guia The Elder Scrolls V: Skyrim - Casamento com Homens <br />
        <br />
        1. Guia The Elder Scrolls V: Skyrim - Unbound <br />
        Foste capturado pelo Imperial Army, e condenado a uma sentença de   morte juntamente com rebeldes Stormcloaks . Os soldados levam-te até   Helgen para seres executado, mas mesmo no último segundo antes de te   cortarem a cabeça, aparecerá um dragão que atacará a cidade. <br />
        Com as mãos ainda amarradas, nada podes fazer contra o dragão -   abriga-te na torre à tua frente. Para escapares à morte, o teu primeiro   objetivo será encontrar o caminho até The Keep. <br />
        Para isso, começa por saltar da torre para a casa adjacente, através   do buraco que o Dragão fez ao atacá-la. Encontra-te com Hadvar e   segue-o até encontrares The Keep. Neste ponto tens duas opções: podes   escolher seguir Hadvar, ou seguir Ralaf. Neste Guia descrevemos-te o   jogo do ponto de vista de quem escolhe seguir Hadvar. <br />
        A tua próxima tarefa consiste em fugires o mais rápido possível de   Helgen. Para isso, Hadvar começará por te libertar das algemas, e depois   disso trata do teu Novo Objetivo (NO): arranjar equipamento. Procura   nos cofres: vais encontrar uma armadura imperial ligeira, uma espada,   botas, e a Helgen Keep Key. O essencial para começares! <br />
        Avança pelos níveis subterrâneos da fortaleza com Hadvar como guia, lutando contra vários soldados Stormcloaks. <br />
        Novo Objetivo Opcional (NOO): procurar poções nos barris. <br />
        Chegamos à Sala de Tortura (Torture Room). Encontrarás uma mochila   com as ferramentas necessárias para abrir as jaulas. Na jaula do meio,   vais encontrar um feiticeiro morto. Recolhe a Poção de Minor Magicka,   algumas moedas de ouro e um livro de feitiços. <br />
        Continua a seguir Hadvar e atravessa zonas com vários inimigos (o habitual: soldados Stormcloaks). <br />
        Avança ao longo de um riacho subterrâneo, até chegares a um lugar onde vais ser surpreendido por várias aranhas. <br />
        O próximo perigo será um urso. Poderás escapar facilmente dele se   seguires agachado, sem fazer muito barulho. Sai para o exterior, para   Skyrim. Missão cumprida! <br />
        <br />
        <br />
        2. Guia The Elder Scrolls V: Skyrim - Before the Storm <br />
        Agora que estamos no mundo de Skyrim, podemos começar a exploração!   És livre de fazer o que quiseres. Podes, por exemplo, explorar o cenário   e encontrares locais como a Embershard Mine, que está repleta de   bandidos bem desagradáveis. A escolha é tua! <br />
        Hadvar sugere-te ir até Riverwood para falares com o seu tio, o ferreiro Alvor. <br />
        Novo Objetivo: Falar com Alvor. <br />
        A caminho de Riverwood vais encontrar três Guardian Stones, uns   menires que poderás escolher tendo em conta o teu tipo de jogo, e que ao   serem ativados te permitirão aprender mais rapidamente habilidades   específicas. <br />
        ? The Thief: aprender habilidades de ladrão 20% mais rápido <br />
        ? The Mage: aprender habilidades mágicas 20% mais rápido <br />
        ? The Warrior: aprender habilidades de guerreiro 20% mais rápido (nós optamos por esta) <br />
        Chegamos a Riverwood . Podes falar com os seus habitantes e começar a   juntar missões principais e secundárias. Também podes explorar todas as   opções que a população te oferece, como por exemplo descansar na   pousada, usar um suporte para curtir peles, a forja do ferreiro ou até   visitar o comerciante. Podes ainda te aventurar no tiro com arco com a   ajuda de Faendal, para juntares algum dinheiro. <br />
        Na casa de Alvor existem diversos objetos. Entre eles, um livro   chamado &quot;Whiterun Guide for Gentlemans&quot;. Alvor encarrega-nos de um NO:   falar com Jarl em Whiterun. <br />
        Para chegares até Whiterun tens de atravessar as montanhas. Quando   as tiveres atravessado, chegarás a uma planície que te dará acesso a   vários locais: Battle-Born Farm ,The Drunken Huntsman , e os Whiterun   Stables (onde podes comprar um cavalo por 1.000 moedas de Ouro) <br />
        Neste primeiro contacto com a cidade, podes falar com diversos   caçadores que irão propor que te juntes à sua ordem. Por exemplo Alea a   caçadora, vai te sugerir que te juntes aos &quot; Shatter-Shield &quot; (Novo   Objetivo Secundário (NOS): falar com o líder de The Companions).Forkas é   outro elemento que faz parte do grupo. <br />
        Antes de entrar na cidade, verás um acampamento de kajiits no   exterior. Se falares com Khayla poderás treinar a tua habilidade de   Discrição por um preço acessível. <br />
        Ao chegares às portas de Whiterun, vais encontrar um guarda que te   informará que a cidade está fechada graças às notícias de ataques de   dragões. As ações habituais de persuasão/intimidação não irão funcionar:   diz-lhe que Riverwood está em perigo, e que precisas da ajuda de Jarl   de Whiterun. O guarda dir-te-á para entrares e para seguires até ao cimo   da colina, até Dragonsreach. <br />
        Nova Descoberta (ND): Whiterun <br />
        Whiterun City está repleto de missões secundárias. Não te esqueças   que a cidade está divida entre duas facções: os Battle-Born e os   Grey-Mane. <br />
        Para conseguires chegar até junto do Jarl, sobe até ao bastião de Dragonsreach, passando por um imponente carvalho. <br />
        ND: Dragonsreach <br />
        Serás recebido por Irileth, a elfa que é a assistente pessoal de   Jarl. Ela informa-te de que Jarl não recebe visitas. Diz-lhe que   procuras ajuda para Riverwood, onde foram avistados dragões, e   conseguirás falar com ele. <br />
        Fala finalmente com o grande Jarl Balgruuf e acaba esta missão. <br />
        <br />
        3. Guia The Elder Scrolls V: Skyrim - Bleak Falls Barrow <br />
        Objetivos: <br />
        ? Entregar a Dragonstone a Farengar <br />
        ? Falar com Farengar <br />
        Jarl Balgruff acredita que podes ajudar Farengar, o feiticeiro da corte, num assunto relacionado com dragões. <br />
        Para poderes fazer esta missão, deves completar antes a missão &quot;The Golden Claw&quot;. <br />
        Depois de o fazeres, tens simplesmente de entregar a Farengar a Dragonstone que conseguiste na missão &quot;The Golden Claw&quot;. <br />
        <br />
        4. Guia The Elder Scrolls V: Skyrim - The Golden Claw <br />
        Objetivos: <br />
        ? Recuperar a &quot;The Golden Claw&quot; <br />
        ? Descobrir o segredo de Bleak Falls Barrow <br />
        ? Libertar Arvel da teia de aranha <br />
        ? Levar &quot;The Golden Claw&quot; a Lucano <br />
        Lucan Valerio, o comerciante de Riverwood é quem te encarregará   desta missão. Oferece-te uma recompensa em troca de lhe recuperaras a   sua antiga Golden Claw, roubada por uns bandidos que estão acampados em   Bleak Falls Barrow. <br />
        Começa por subir através da montanha que te leva até Bleak Falls   Barrow. Prepara-te para vários ataques inimigos, e tem cuidado com os   arqueiros! <br />
        Pelo caminho descobrirás a Anise's Cabin, onde poderás ler o livro &quot;Song Of Alchemists&quot;. <br />
        ND: Anise's Cabin <br />
        No cimo da montanha encontra-se o Templo de Bleak Falls. <br />
        Para venceres os primeiros bandidos, serve-te do elemento surpresa. <br />
        Temos de resolver um puzzle alinhando os 3 emblemas de animais: a   ordem correta, da direita para a esquerda, é Cobra, Cobra, Baleia. <br />
        Avança até encontrares o &quot;Thief book&quot; juntamente com diversas poções. <br />
        Antes de chegares à escada de caracol, não te esqueças de recolher o pergaminho &quot;Scroll of Fireball&quot;. <br />
        No fundo das escadas espera-nos uma grande Frostbite Spider. Para a   matares, começa por te manter longe do seu veneno, que debilita   lentamente, e usa a Magia de Fogo. <br />
        Depois de acabares com a aranha, temos de libertar rapidamente   Arvel, o Rápido. Para fazer justiça ao seu nome, ele conseguirá escapar   com a &quot;Golden Claw&quot; - congela-o antes que consiga afastar-se demasiado.   Recolhe a garra e o seu diário, que será uma boa ajuda mais adiante. <br />
        Depois disto terás de enfrentar várias vagas de Draugr, uma espécie de Zombies de antigos guerreiros nórdicos. <br />
        A partir daqui, tens de avançar com atenção redobrada por causa das   armadilhas. Também as poderás usar a teu favor para massacrar os teus   inimigos. <br />
        Não percas de vista algumas armas bem interessantes que vais encontrar no caminho, como é o caso de um arco nórdico antigo. <br />
        Na segunda vaga de Draugrs não te esqueças de inspecionar um cofre que está escondido. <br />
        Segue o curso da corrente de água subterrânea. Chegarás a uma sala   com dois pisos e diversos Draugr prontos a atacar-te. Cuidado pois há um   especialmente mais forte que os outros. <br />
        Depois disto, vais encontrar um dos primeiros cofres de dificuldade   Hard do jogo, dentre do qual apenas encontrarás algum ouro e uma poção <br />
        Entra no Santuário de Bleak Falls . <br />
        IMPORTANTE: para abrires a próxima porta tens de encontrar a   combinação correta com base na própria &quot;Golden Claw&quot;. A sequência   correta é, de baixo para cima, Mocho, Colibri, Urso. Lá dentro espera-te   um combate com um Draugr bem mais poderoso. Recolhe a &quot;Dragonstone&quot; do   seu corpo depois de o derrotares. <br />
        Não te esqueças de procurar um cofre que contém uma armadura de ferro, uma de aço e algumas moedas de ouro. <br />
        No muro em frente ao caixão, encontrarás o Word Wall, onde aprenderás a primeira palavra do Dragon Shout: &quot; Unrelenting Force&quot;. <br />
        Devolve a &quot;Golden Claw&quot; a Lucan Valerio em Riverwood, que te recompensará como prometido. <br />
        <br />
        5. Guia The Elder Scrolls V: Skyrim - Dragon Rising <br />
        Esta missão ser-te-á atribuída depois de completares &quot;Bleak Falls Barrow&quot;. <br />
        Objetivos: <br />
        ? Falar com Jarl Balgruuf <br />
        ? Encontrar-te com Irileth junto a Western Watchtower <br />
        ? Matar o dragão Mirmulnir <br />
        ? Investigar o dragão <br />
        ? (Opcional) Usar o teu novo poder de grito <br />
        ? Voltar para Jarl Balgruff <br />
        O melhor método para derrotar este dragão é usar o arco. Move-te   pelos cinco diferentes pisos da torre de vigia, evitando o fogo. Quando   derrotares o dragão, aproxima-te dele e absorverás o poder de Grito   (Shout), o que demonstra que tens um laço com os dragões. <br />
        Ao regressar para falar com Jarl, este vai te recompensar pelos teus   serviços com vários objetos de valor, te nomeará Thane of Whiterun, e   te atribuirá o teu próprio ajudante. Ganharás também a sua eterna   amizade. <br />
        <br />
        6. Guia The Elder Scrolls V: Skyrim - In My Time of Need <br />
        Fazemos agora uma pausa no caminho na nossa história principal, para cumprir uma missão que nos foi atribuída em Whiterun. <br />
        Objetivos: <br />
        ? Encontrar a guarda da Redguard <br />
        ? Falar com Saadia (a Redguard) ou informar Alik'r sobre a localização de Saadia <br />
        ? Fala com o prisioneiro dos Alik'r ou informar Alik'r sobre a localização de Saadia <br />
        ? Matar Kematu ou falar com ele <br />
        ? Encontrar-te com Saadia <br />
        O que tens de fazer em primeiro lugar é encontrar a Redguard, que   está na cozinha da Pousada Bannered Mare, onde trabalha como empregada.   Chama-se Saadia e é uma nobre de Hammerfell que se esconde sob um nome   falso, por a quererem assassinar. <br />
        Agora que descobrimos o paradeiro de Saadia, podemos revelar o seu   esconderijo aos que a perseguem, ou acabar com a vida dos bandidos que   foram contratados para a capturar. Se optarmos por ir ter com os   bandidos, devemos falar com um deles que está preso em Whiterun. A   Prisão de Whiterun encontra-se mesmo antes de chegar a Dragonsreach, no   cimo da cidade. <br />
        Depois de falares com o prisioneiro Alik'r compra a sua liberdade   por 100 moedas de ouro, e conseguirás que ele te revele o paradeiro dos   restantes bandidos e do seu líder Kematu. <br />
        O Swindler's Den está muito perto da Whiterun, mas se ainda não te aventuraste por esta zona, vais descobrir novos lugares. <br />
        Nova Descoberta: Bleakwind Basin : Cuidado com os gigantes, não tens condições para os enfrentar de igual para igual. <br />
        Nova Descoberta: Fort Greymoor : tão pouco somos bem-vindos aqui! <br />
        Nova Descoberta: Cracked Tusk Keep : descobres esta caverna graças a   uma caçadora que t pede ajuda por ter sido atacada por um vampiro. <br />
        Nova Descoberta: Sleeping Tree Camp . <br />
        Assim que chegares a Swindler's Den, espera-te uma boa quantidade de   combates contra diferentes vagas de inimigos. Um bom conselho para   saíres bem desta situação é esperar que venham ter contigo, um por um,   num dos corredores; garantimos-te que assim não te atacarão por todos os   lados em simultâneo. <br />
        Não te esqueças de revistar bem o local em busca de um pergaminho. <br />
        Assim que chegues até Kematu, podes negociar com ele e entregar-lhe   Saadia, ou lutar. Se optares por esta última opção, ser-te-á útil   esperar os inimigos numa passagem estreita para ir acabando com eles   conforme vão chegando. Tanto podes usar contra eles um Grito, o arco ou   feitiços. <br />
        Kematu é o inimigo mais forte. Um truque é atraí-lo até à sala   grande que tem uma mesa no centro, para teres espaço suficiente para   lutarem um contra o outro. <br />
        Quando terminares, recolhe tudo o que vejas que tem algum valor e   regressa a Bannered Mare para falar com Saadia. Serás recompensado com   500 moedas. <br />
        <br />
        7. Guia The Elder Scrolls V: Skyrim - The Way Of The Voice <br />
        Dentro da história principal, esta missão vem imediatamente depois de &quot;Dragon Rising&quot;. <br />
        Objetivos: <br />
        ? Falar com os Greybeards <br />
        ? Demonstrar o teu grito de &quot;Unrelenting Force&quot; <br />
        ? Falar com Arngeir <br />
        ? Aprender com a ajuda de Einarth a &quot;Word of Power&quot; <br />
        ? Demonstrar o teu grito de &quot;Unrelenting Force&quot; (3/3) <br />
        ? Aprender com a ajuda de Borri a &quot;Word of Power&quot; <br />
        ? Demonstrar o teu grito de &quot; Whirlwind Sprint&quot; <br />
        ? Falar com Arngeir para teres acesso a um treino contínuo <br />
        Os Greybeards convocaram-te para apareceres no seu Mosteiro em High   Hrothgar , na encosta de Throat of the World. Parece que eles ouviram   falar do misterioso poder que conseguiste ao matar o dragão. <br />
        Se partires de Whiterun (que é o mais provável) espera-te um longo   caminho até chegares ao teu primeiro destino desta missão, Ivarstead.   Recomendamos-te desta forma que faças a viagem de cavalo, podes comprar   um por 1000 moedas de ouro, no Estábulo de Whiterun. Fica atento pois ao   longo do teu caminho vais encontrar vários animais selvagens, bandidos e   inclusive criaturas poderosas como o Flame Atronach. <br />
        Uma vez que existe uma grande probabilidade andares às voltas, pelo   caminho poderás descobrir novos lugares. Estes são os que nós   descobrimos: <br />
        Nova Descoberta: Valtheim Towers <br />
        Nova Descoberta: Darkwater Crossing <br />
        Nova Descoberta: Misty Grove <br />
        Nova Descoberta: Cueva Pierna Rota <br />
        Nova Descoberta: El Campamento de Milheim <br />
        Nova Descoberta: Geirmund's Hall <br />
        Nova Descoberta: Ivarstead <br />
        Quando finalmente chegares a Ivarstead podes descansar na Pousada &quot;Vilemyr Inn&quot;. <br />
        O próximo passo são os famosos 7000 degraus de High Hrothgar, um   caminho onde vais encontrar vários peregrinos mas também muitos perigos. <br />
        Antes de começares a subida é aconselhável que aceites a missão   secundária que Klimmerck te atribuirá, onde te pede para que transportes   contigo alguns mantimentos para os Greybeards. <br />
        - - - - - - - - - - - - - <br />
        Missão Secundária: Em Ivarstead, Klimmeck encarrega-te de   transportar mantimentos para os Greybeards em High Hrothgar. Quando   tiveres chegado ao cimo, antes de entrar podes deixar os mantimentos que   Klimmeck te deu no cofre que está na entrada do Mosteiro. <br />
        - - - - - - - - - - - - - <br />
        Para além de vários lobos, o inimigo mais temível (e quem sabe o   primeiro combate realmente sério do jogo) é o Frost Troll . É um   adversário muito poderoso para o nível em que te encontras à chegada, no   nosso caso o nosso ajudante morreu durante este combate. <br />
        Se depois de várias tentativas não conseguires derrotar o Frost   Troll tens sempre a opção de fugir. Seguir-te-á todo o caminho, e   inclusivamente entrará em High Hrothgar, mas aí os Greybeards acabarão   facilmente com ele. <br />
        Lembra-te que antes de entrar podes deixar os mantimentos que Klimmeck no cofre que há na entrada do Mosteiro. <br />
        Em High Hrothgar, Arngeir pede-te que lhe mostres a tua voz de   dragão. Depois de o fazeres, ele explicar-te-á toda a teoria das   Palavras do Poder. Segue todas as instruções que os Greybeards te dão   para acabar com a missão. <br />
        <br />
        8. Guia The Elder Scrolls V: Skyrim - The Horn of Jurgen Windcaller <br />
        Esta missão vem imediatamente depois de &quot;Dragon Rising&quot;. <br />
        Objetivos: <br />
        ? Recuperar &quot;The Horn of Jurgen Windcaller&quot; <br />
        ? Ler a nota <br />
        ? Encontrar-te com quem roubou &quot;The Horn&quot; <br />
        ? Devolver &quot;The Horn&quot; a Arngeir <br />
        ? Aprender a última &quot;Word of Power&quot; com Borri <br />
        ? Aprender a última &quot;Word of Power&quot; com Wulfgor <br />
        ? Receber o agradecimento dos Greybeards <br />
        Depois de exibires as tuas habilidades para aprender as   palavras/gritos dos Greybeards, Arngeir envia-nos para uma prova final:   recuperar o &quot;Horn of Jurgen Windcaller&quot; do seu túmulo, em Ustelgrav. <br />
        Antes de te pores a caminho de Ustengrav, propomos-te uma missão   secundária. Trata-se de &quot;Matar o líder do bando de Halted Stream Camp&quot;. <br />
        - - - - - - - - - - - - - <br />
        MISSÃO SECUNDÁRIA: &quot;Matar o líder do bando de Halted Stream Camp &quot; é   uma missão que nos é atribuída pelo ajudante de Jarl Balgruff de   Whiterun. Encontramos este acampamento a noroeste de Whiterun. Lá nos   esperam bandidos e armadilhas - por exemplo rochas que caem do tecto ou   objetos que foram colocados para fazer ruído e alertar sobre a nossa   presença. Mas esperam-nos também tesouros interessantes, como por   exemplo um Transmute Tome ou 7 Mammoth Tusks (que os poderás vender a   uma comerciante de Whiterun), entre muitos outros. <br />
        - - - - - - - - - - - - - <br />
        Depois desta paragem no nosso caminho, prosseguimos até Ustengrav.   Se ainda não tiveres explorado esta zona, poderás fazer várias   descobertas: <br />
        Nova Descoberta: Volunruud para Ustengrav ode vais encontrar Ouro e outro pergaminho . <br />
        Perto da fronteira desta zona montanhosa e nevada encontrarás um pequeno altar com objetos muito interessantes. <br />
        Encontrarás também diante deste pequeno altar outro &quot;Wall Word&quot; com   uma nova palavra de dragão, ainda que esteja guardado por um poderoso   fantasma (do qual podes fugir). <br />
        De qualquer forma avança com cuidado porque perto do altar está   também escondido um dragão, e se não tens um nível suficiente podes   ficar bastante chamuscado. <br />
        A caminho de Ustengrav fizemos várias descobertas. <br />
        Nova Descoberta: Lord Stone (que poderás ativar para obter bonificações) <br />
        Nova Descoberta: Stonehills <br />
        Finalmente chegados a Ustengrav, apercebemo-nos que parece ter havido um massacre. <br />
        Em Ustengrav começaremos a abater vários Draugrs, de forma que não   te esqueças de os revistar porque há vários Spell Tomes (Courage,   Flames, Frost) tanto em cofres como nos cadáveres. <br />
        Avanças até que chegues a uma porta que nos conduz às profundezas de Ustengrav. <br />
        A partir daqui tens de avançar com cuidado por causa das armadilhas de fogo existentes no solo. Encontrarás mais um pergaminho. <br />
        Chegamos a uma sala onde se encontra um cofre, à esquerda. Porém,   está protegido com uma dupla tampa. Para conseguires abri-lo, procura os   dois fixadores na parede e prende-os bem. Se tinhas recolhido   anteriormente as armas do pequeno altar na montanha, podes agora   libertar-te do peso delas. <br />
        Chegamos finalmente a uma grande sala com muita vegetação, uma cascata, uma ponte e vários Draugrs. <br />
        Desce até ao fundo e irás encontrar outra Word Wall com uma nova palavra &quot; Fade, Become Ethereal &quot;. <br />
        Vais encontrar outro cofre escondido atrás da cascata. <br />
        Segue novamente pela grande sala repleta de vegetação, mas agora   sobe e atravessa a ponte. Do outro lado esperam-te 3 interruptores   (pedras) que acionam as 3 portas vermelhas. Só as conseguirás atravessar   antes que se fechem, se usares duas vezes o Grito que te ensinaram os   Greybeards, o &quot;Whirlwind Sprint&quot;: a primeira para ativar as pedras, a   segunda para impedir que as portas se fechem. <br />
        Assim que tiveres ultrapassado as armadilhas - esperam-nos mais   armadilhas de fogo, tens de correr para escapar de Frostbite Spiders   (uma grande e diversas mais pequenas). <br />
        Corta as teias de aranha para conseguires avançar até uma sala, de onde emergem umas estátuas. <br />
        Ao chegar ao túmulo de Jorgen Windcaller, vais descobrir que alguém   substituiu o objeto por uma nota, onde te ordenam para te dirigires a   Sleeping Giant Inn, em Riverwood. <br />
        Depois de passares esta sala, vais encontrar um cofre com um Spell   Tome: Conjure Familiar, 134 moedas de Ouro, e um War Axe of Iron   Reverent. Podes recolher todos estes objetos e sair de novo para Skyrim. <br />
        Tens agora de regressar a Riverwood. <br />
        Lá, fala com Delphine, a anfitriã, e aluga o sótão por 10 moedas de   Ouro. Ela devolver-te-á o objeto e te atribuirá uma nova missão &quot;A Blade   In The Dark&quot;. <br />
        Podes te encarregar primeiro desta missão, e devolveres o corno depois. <br />
        Depois de regressares a High Hrothgar, estás pronto para poder   aprender a Palavra final de Unrelenting Force: &quot; Push&quot;. Terminas a tua   missão depois de aprenderes a palavra. <br />
        <br />
        9. Guia The Elder Scrolls V: Skyrim - A Blade In The Dark <br />
        Esta missão é-te atribuída por Delphine, já praticamente no final da missão &quot;The Horn of Jurgen Windcaller&quot;. <br />
        Objetivos: <br />
        ? Falar com Delphine <br />
        ? Localiza o local de enterro do Dragão <br />
        ? Matar o Dragão Sahlokmir <br />
        ? Falar com Delphine <br />
        Delphine vai te entregar imediatamente o &quot;Horn of Jurgen   Windcaller&quot;, mas será melhor terminares primeiro esta missão, em vez de a   interromperes para o levares até Arngeir e terminares a missão   anterior. Tens muito tempo para regressares para junto de Arngeir, tendo   em conta a distância que tens de percorrer para ires até lá e voltares   novamente até este ponto. <br />
        Segue Delphine, que te levará até um quarto secreto. <br />
        Ela explica-te que está perseguir os Thalmor, porque suspeita que eles têm alguma coisa a ver com a Ressurreição dos Dragões. <br />
        Delphine acredita que os dragões não estão a regressar, mas sim a   voltar à vida, e que só um dragonborn pode impedir que isso aconteça. O   próximo irá ressuscitar próximo de Kynesgrove, e é para lá que tens de   te dirigir. Esta missão no fundo uma prova, onde tens de lhe mostrar que   és realmente um Dragonborn. <br />
        Podes escolher viajar com ela, ou seguir sozinho - a escolha é tua. <br />
        No nosso caso, escolhemos acompanhá-la. Nesta viagem, vais defrontar diversos perigos, mas vais fazer também novas descobertas. <br />
        Nova Descoberta: Mixwater Mill <br />
        Nova Descoberta: Estábulo <br />
        Ao chegares a Kynesgrove , é conveniente que sigas agachado para que   consigas ouvir a conversa entre os dragões sem que te descubram. Um   dragão está a ressuscitar outro com um Grito. <br />
        O teu próximo passo será acabar com o dragão Sahlokmir. Já que é um   dragão que se mantém no solo, usamos um pergaminho de fogo para o deixar   bastante incapacitado. Para lhe dar os golpes finais, flechas e um   ataque direto. <br />
        Depois de absorveres a alma do dragão e provares que és um   dragonborn, Delphine confessa que é uma das últimas Blades, uma   organização dedicada a proteger os Dragonborn e a deter os Dragões. <br />
        De seguida, explica-te qual será a tua próxima missão: infiltrar-te   na base dos Thalmor, que estão há 30 anos em guerra com o Imperial Army,   e investigar a sua relação com o regresso dos dragões. <br />
        Terminas esta missão, depois de Delphine te entregar a chave do esconderijo. <br />
        <br />
        10. Guia The Elder Scrolls V: Skyrim - Diplomatic Immunity <br />
        Esta missão vem imediatamente a seguir de &quot;A Blade In The Dark&quot;. <br />
        Objetivos <br />
        ? Encontrar-te com Delphine em Riverwood <br />
        ? Encontrar-te com Malborn em Soledad <br />
        ? Entregar o equipamento a Malborn <br />
        ? Encontrar-te com Delphine nos estábulos <br />
        ? Falar com Malborn <br />
        ? Criar uma manobra de evasão e escapar <br />
        ? Recuperar as tuas coisas (Opcional) <br />
        ? Procurar informação sobre o regresso dos dragões <br />
        ? Fugir de Thalmor Embassy <br />
        Delphine pede-te para te infiltrares em Thalmor Embassy, que fica em   Soledad, na parte noroeste de Skyrim. Consegues lá chegar facilmente se   viajares de forma rápida até Ustengrav, onde estiveste recentemente. Se   fores a pé, terás a oportunidade de descobrir novas zonas. <br />
        Nova Descoberta: Shadowgreen Cavern <br />
        Nova Descoberta : Orothein <br />
        Nova Descoberta: East Empire Company Warehouse <br />
        Nova Descoberta: Katla's Farm <br />
        Assim que chegares a Soledad, podes observar apenas ou interferir na   execução. Dirige-te para Winking Skeever, para falares com Malborn.   Entrega-lhe todas as tuas armas e fica só com o indispensável para te   infiltrares na Embaixada (o teu gear e alguns lockpicks serão   suficientes). <br />
        Encontra-te novamente com Delphine nos estábulos de Katla's Farm e   apanha a carruagem que segue até à Embaixada, se estiveres preparado.   Depois de lá chegares, vais te encontrar com um Feiticeiro Thalmor que   te pedirá o teu convite; entrega-lho. <br />
        Uma vez lá dentro, serás abordado por um dos membros e iniciarás uma   conversa com a Embaixadora Elenwen. Malborn irá criar uma distração, de   forma a que possas sair dali e verificar o que anda a fazer Razelan, o   bêbado que encontraste à entrada. Pede um Colovian Brandy a Malborn e   procura-o. Está cá dentro, sentado num banco. Oferece-lhe a bebida e   pede-lhe para falarem em privado. <br />
        Segue-o e infiltra-te, a melhor opção que tens é tentares avançar   discretamente, se as tuas habilidades o permitirem. Espera que os   guardas terminem de falar, para que mudem de posição. Se não te   lembraste de dar a Razelan uma armadura, podes recolher uma dos Elfos. <br />
        Se decidires acabar com todos, a luta pode ser um pouco complicada. O   ideal será atrair os dois primeiros guerreiros khajitt para a entrada,   acabar com eles. Depois concentra-te no Feiticeiro, que pode alternar   entre fogo e eletricidade. <br />
        Agora tem muito cuidado e faz o mínimo de barulho possível. Livra-te   de todas as armaduras que transportes contigo para minimizar o ruído, e   vai até ao cofre para recolher a Interrogation Chamber Key, os dossiers   de Delphine, Ulfric e da Investigação do Dragão. <br />
        Desce as escadas que ficam após a porta norte, e vai até à sala de   interrogatórios. Estão a torturar um preso e Rulindil está de costas, o   que é perfeito para que o ataques sem que se aperceba. Acaba com os dois   inimigos e recolhe o Thalmier Dossier: Esbern, para obteres a   informação que procuras. <br />
        Agora tens de fugir daí, mas antes fala com Etienne Rarnis e   liberta-o. Vais descobrir mais tarde que capturaram Malborn. O pobre   elfo não resistirá muito tempo, de forma que concentra-te em matar os   guardas. Lembra-te de ter à mão poções protetoras de fogo e também magia   de restabelecimento. <br />
        Regressa com Delphine, a tua próxima missão espera-te em Riften. <br />
        <br />
        <br />
        11. Guia The Elder Scrolls V: Skyrim - A Cornered Rat <br />
        Esta missão segue-se a &quot; Diplomatic Immunity &quot;. <br />
        Objetivos <br />
        ? Falar com Brynjolf <br />
        ? Procurar o esconderijo de Esbern em The Ratway <br />
        ? Procurar Esbern em Rayway Warrens <br />
        ? Falar com Esbern <br />
        Informa Delphine de que os Thalmor não sabem nada sobre os dragões, e   que procuram Esbern. Ao que parece, escondem-no em Riften na Ratway, de   forma que é esse o teu próximo destino. <br />
        Riften está na parte sudeste de Skyrim. É uma longa viagem e se não   quiseres caminhar podes utilizar uma carruagem que esteja disponível   para te levar até lá. Tens de encontrar Esbern, mas só tens um nome como   pista: Brynjolf. <br />
        Nova Descoberta: Lumber Mill <br />
        Nova Descoberta: Snow-shod Farm <br />
        Nova Descoberta: Riften Stables <br />
        Nova Descoberta: Riften <br />
        Tens de entrar pela porta norte pois os guardas não te deixarão passar. <br />
        Assim que entrares, fala com Maul para que te ponha a par das   trafulhices dos Black-Briars. Tens também a opção de te unir à irmandade   dos ladrões, mas de momento é melhor te centrares na missão. Fala com   Brynjolf, que te pedirá que roubes um anel em troca da informação. Vais   encontra-lo no mercado durante o dia, e na taberna durante a noite.   Pergunta-lhe sobre o esconderijo por baixo de Riften. <br />
        - - - - - - - - - - - - - <br />
        MISSÃO SECUNDÁRIA: A Chance Arrangement. Brynjolf está envolvido em   atividades ilícitas e convenceu-te a ajudá-lo numa delas. Rouba o anel a   Madesi e mete-o no bolso de Brand-Shei. Espera que todos os personagens   se reúnam em volta de Brynjolf e tem cuidado com o guarda que está   atrás de ti. <br />
        - - - - - - - - - - - - - <br />
        Chega até Ratway Warrens e acaba com os inimigos; mais adiante   esperam-te mais 3. Atravessa os confusos túneis até chegar à abóbada de   Ratway. <br />
        Resgata Esbern. Este não te deixará passar inicialmente, mas se   insistires um pouco, abrir-te-á a porta. Fala com ele e foge do local,   mas tens de enfrentar uns quantos inimigos pelo caminho. Saí daí e   dirige-te para Riverwood. Quando Esbern e Delphine se encontrarem, te   atribuirão uma nova missão. <br />
        <br />
        12. Guia The Elder Scrolls V: Skyrim - Alduin's Wall <br />
        Esta missão vem imediatamente depois de &quot;A Cornered Rat&quot;. <br />
        Objetivos <br />
        ? Acompanhar Esbern até &quot;Riverwood&quot; <br />
        ? Falar com Esbern <br />
        ? Conseguir entrar no &quot;Sky Haven Temple&quot; <br />
        ? Aprender o segredo da Alduin's Wall <br />
        Começa por acompanhar Esbern até &quot;Riverwood&quot;. Poderás fazê-lo a pé,   usar o teletransporte ou uma carruagem. Se fores a pé, muito   provavelmente vais encontrar estas novas localizações. <br />
        Nova Descoberta: &quot;Merryfair Farm&quot; <br />
        Nova Descoberta: Fort Greenwall <br />
        - - - - - - - - - - - - - <br />
        MISSÃO SECUNDÁRIA: Infiltração. No regresso é provável que te cruzes   com Stalleo, um homem que precisa da tua ajuda para resgatar a família   da Torre de Vigia de Treva. Arranja uma forma de alcançares a alavanca,   abre a porta e luta contra os bandidos. <br />
        - - - - - - - - - - - - - <br />
        Nova Descoberta: Treva's Watch <br />
        Esbern descobriu o local onde se encontra a Alduin's Wall, um   artefacto criado pelos anciãos Blades cuja localização era há muito   tempo uma incógnita. Dirige-te para o Templo &quot;Sky Haven&quot;. Será um longo   caminho, principalmente porque não há nenhuma cidade próxima com alguém   que te possa transportar de carruagem. &quot;Swindler's Den&quot; é um bom local   de partida, no caso de pretenderes usar teletransporte. <br />
        Prepara-te para uma longa caminhada, ou compra um cavalo para ires   mais rápido. Equipa-te bem porque serás atacado por todo o tipo de   bichos indesejáveis. <br />
        Para chegares ao Templo &quot;Sky Heaven&quot; é necessário que atravesses o   caminho do sul. Podes acompanhar Esbern e Delphine ou escolher   aventurar-te sozinho. No nosso caso escolhemos seguir acompanhados,   porque é sempre uma ajuda extra nos combates. <br />
        Nova Descoberta: Rorikstead <br />
        Próximo de &quot;Rorikstead&quot;, encontrarás outro dragão ressuscitado por   Alduin. A luta não é muito complicada, uma vez que tens a ajuda dos teus   companheiros, mas mesmo assim usa o arco e não percas de vista o dragão   Nahagliiv. Mata-o e absorve a sua alma. <br />
        Nova Descoberta: Soljund's Sinkhole <br />
        - - - - - - - - - - - - - <br />
        MISSÃO SECUNDÁRIA: Eliminar o dragão de &quot;Soljund's Sinkhole&quot;. <br />
        - - - - - - - - - - - - - <br />
        Vais ter de atravessar &quot;Karthspire&quot; e lutar contra alguns bárbaros   que têm armadura. Não te esqueças de usar poções resistentes à magia,   pois alguns deles usam magia de luz e gelo. Virão em bandos, de forma   que é aconselhável usar um pergaminho para invocar alguma criatura. Não   vais encontrar mais nada de interesse, para além de poucas moedas de   ouro e um lugar para descansar. <br />
        Nova Descoberta: Acampamento de &quot;Karthspire&quot; . <br />
        Nova Descoberta: Karthspire . <br />
        Tem cuidado com os renegados existentes no local, e aproveita para   te abasteceres com algumas poções. Avança até chegares a um local com   três colunas, que deverás rodar na ordem correta. Se rodares o símbolo   da esquerda umas quantas vezes, Esbern dir-te-á o que tens de fazer. <br />
        Coloca o mesmo símbolo nas três colunas e entra no &quot;Sky Heaven&quot;. Lá   dentro esperam-te armadilhas e mais símbolos. Tem cuidado porque se   pisas o ladrilho errado, cairão sobre ti bombas de fogo bastante   potentes. Avança pisando apenas o mesmo símbolo que colocaste nas   colunas. Se sentires que é muito complicado, tenta saltar de ladrilho em   ladrilho. Aproxima-te do disparador de fogo e ativa o mecanismo para   que os teus companheiros consigam passar. <br />
        Ao chegares próximo de uma pedra, espera até que Esbern termine de   falar e ativa o selo de sangue. Na sala seguinte, espera que Esbern e   Delphine terminem de falar e examina o Muro. Fala novamente com Delphine   e esta te informará que precisas da ajuda dos Greybeards - tens de   regressar a &quot;High Hrothgar&quot;. <br />
        <br />
        13. Guia The Elder Scrolls V: Skyrim - The Throat Of The World <br />
        Esta missão vem imediatamente depois de &quot;Alduin's Wall&quot;. <br />
        Objetivos <br />
        ? Falar com Arngeir <br />
        ? Aprender o Grito &quot; Clear Skies &quot; <br />
        ? Usar o grito para abrir caminho <br />
        ? Falar com Paarthurnax <br />
        ? Aprender a &quot;Word of Power&quot; com a ajuda de Paarthurnax <br />
        ? Usar o grito &quot; Fire Breath &quot; em Paarthurnax <br />
        Regressa a &quot;High Hrothgar&quot; e, no caso de ainda não o teres feito,   entrega aos Greybeards o Horn of Jurgen para terminares o teu treino.   Fala com Arngeir para ficares a saber como Aldiun foi derrotado, e ele   vai te falar de Paarthurnax. Saí para o pátio e deixa que os Greybeards   te ensinem o Grito &quot;Clear Skies&quot;. Poderás usá-lo para desviar grandes   tempestades, como a que vais encontrar a caminho de The Throat Of The   World. <br />
        Agora segue para sul e sobe através da montanha. Cada vez que te   apareça uma tempestade, utiliza o grito para a dissipar e evitar danos. O   caminho será tranquilo na maior parte da viagem, mas poderás encontrar   um ou outro inimigo. Se vires fantasmas de gelo, usa a tua magia de   destruição e o teu ataque manual para acabares facilmente com eles. Se   fores muito lento, podem matar-te facilmente com um par de bons golpes. <br />
        Assim que chegares a The Throat Of The World, fala com Paarthurnax. <br />
        Paarthurnax irá te pedir que vás buscar o &quot;Elder Scroll&quot;, mas antes   tens de falar com Esbern ou Arngeir para ficares a saber mais detalhes. <br />
        Termina a conversa com o Dragão e vai buscar um deles. <br />
        Quando o encontrares, regressa com ele a The Throat Of The World   para aprender o verdadeiro grito &quot;Breathe Fire&quot; e conhecer Hakon,   Gormlauth e Felldir, os primeiros mortais que conheceram o grito e   lutaram contra Alduin. <br />
        Dirige-te para &quot;Winterhold&quot;, a sudoeste pois é possível que alguém   do Colégio saiba de algo. Pelo caminho irás encontrar dragões, portanto   não te esqueças de melhorar os teus feitiços e habilidades, bem como   usar o arco - juntamente com Gritos é a melhor forma de os eliminares. <br />
        <br />
        <br />
        14. Guia The Elder Scrolls V: Skyrim - Elder Knowledge <br />
        Esta missão vem imediatamente depois de &quot;The Throat Of The World&quot;. <br />
        Objetivos: <br />
        ? Falar com Esbern ou com Arngeir (Opcional) <br />
        ? Averiguar a localização do &quot;Elder Scroll&quot; <br />
        ? Recuperar o &quot;Elder Scroll&quot; <br />
        Fala com Paarthurnax e pergunta-lhe informações sobre o &quot;Elder   Scroll&quot;. O líder dos Greybeards não faz a mínima ideia de onde possa   estar, mas revela-te que se voltares com o pergaminho podes te encontrar   com Hakon, Gormlaith e Felldir, os Nórdicos que sabem o Grito que matou   Alduin no passado. Para saberes mais informações sobre o &quot;Elder   Scroll&quot;, tens duas hipóteses: poderás te dirigir a &quot;High Hrothgar&quot; e   falar com Arngeir, ou dirigir-te para &quot;Sky Haven Temple&quot; para falar com   Esbern. Ambos te vão sugerir que te dirijas ao Colégio de &quot;Winterhold&quot;,   portanto prepara-te para uma longa viagem. Aconselhamos-te o uso de uma   carruagem para chegares mais rapidamente. <br />
        Nova Descoberta: Whitewatch Tower <br />
        Nova Descoberta: Loreius Farm <br />
        Nova Descoberta: Nightgate Inn <br />
        Nova Descoberta: Wayward Pass <br />
        Nova Descoberta: Alftand <br />
        Assim que nos aventurarmos pelo local mais frio, próximo de   &quot;Winterhold&quot;, é muito provável que nos encontremos com um duro inimigo   vampiro, alguns espectros de gelo, leopardos das neves, focas e lobos. <br />
        Nova Descoberta: Salaarthal <br />
        &quot;Winterhold&quot; encontra-se no cimo de uma montanha, rodeada de água gelada. <br />
        Nova Descoberta: Winterhold <br />
        Dirige-te ao colégio - uma construção que te fará rir de Hogwarts,   em Harry Potter. Para conseguires entrar, fala com Faralda. Tens três   hipóteses de abordagem: podes tentar persuadi-la, podes aceitar uma   missão em que te pede para executares um feitiço aleatório ou, ainda,   informá-la de que és um &quot;Dragonborn&quot; e prová-lo com um dos teus Gritos.   Depois disto, ela vai te deixar entrar no Colégio. <br />
        Nova Descoberta: The College of Winterhold <br />
        Encontra Urag gro-Shub e pede-lhe informações sobre o &quot;Elder   Scroll&quot;. Ele irá colocar dois livros em cima da mesa, que contém   informações sobre os pergaminhos. <br />
        - - - - - - - - - - - - <br />
        MISSÃO SECUNDÁRIA: Decifrar o Livro. Diz a Urag que o livro   &quot;Ruminations on the Elder Scrolls&quot; é incompreensível, e ele irá te   responder que esse livro foi escrito por Septimus Signus. De seguida vai   te fornecer a última localização conhecida dele. Dirige-te para lá e   vais encontra-lo num dos icebergues próximos, perto de um barco. Sobe   pela escada e aproxima-te do mago solitário, que está numa habitação de   gelo. <br />
        - - - - - - - - - - - - - <br />
        Nova Descoberta: Septimus Signus's Outpost <br />
        Quando o interrogares sobre o &quot;Elder Scroll&quot;, Septimus vai te   fornecer bastante informação. Pede-lhe a localização dele, mas em troca   terás de te dirigir a &quot;Blackreach&quot;, uma cidade subterrânea muito   estranha que se situa por baixo de &quot;Alftand&quot;. <br />
        Septimus vai te entregar dois objetos: o &quot;Blank Lexicon&quot; e a   &quot;Attunement Sphere&quot;, que aparentemente te indicará quando estás próximo   de uma porta &quot;Dwemer&quot; importante. <br />
        Segue com a missão, ou continua a conversa com Septimus se a tua sanidade mental to permitir. <br />
        <br />
        14.1 Guia The Elder Scrolls V: Skyrim - Elder Knowledge (Parte II) <br />
        Esta missão é a segunda parte de &quot;Elder Knowledge &quot;. <br />
        Objetivos <br />
        ? Averiguar qual é a localização do &quot;Elder Scroll&quot; <br />
        ? Recuperar o &quot;Elder Scroll&quot; <br />
        Depois de chegares a &quot;Alftand&quot;, terás de viajar através de enormes   túneis de gelo. Segue em frente e vais ouvir dois &quot;khajiit&quot; a conversar.   Podes espiá-los através de um buraco. Segue o túnel até chegares a uma   sala com diversas aranhas &quot;Dwemer&quot;. Algumas estão desativadas, mas   outras não - deves dar conta delas sem grande problema. A porta norte   está bloqueada, por isso parece que vais ter de dar um passeio. <br />
        Segue pela esquerda - vais encontrar uma tocha no chão que podes   recolher. Logo de seguida vais te cruzar com J'darr, um dos khajiit.   Parece que mataram o seu irmão e ele tenciona fazer o mesmo contigo,   portanto não lho permitas. <br />
        Tem cuidado com as &quot;Dwarven Spheres&quot; que vais encontrar no caminho.   Não são muito fortes, mas são bastante rápidas. Equipa o teu companheiro   com uma arma de longo alcance ou mesmo um feitiço - vai-se revelar   muito útil. Tem sempre à mão o escudo para te cobrires, e um feitiço   para te curares. Abre as portas que estão fechadas, e recolhe o máximo   de objetos que consigas. Vais ter de lutar contra mais umas quantas   aranhas. <br />
        Segue pela direita, para te dirigires para o nível superior, onde   tens de te esquivar de uns pistões que se movem constantemente e que te   podem causar bastantes danos. Não será muito complicado, e também podes   usá-los a teu favor para eliminares alguma aranha. Quando terminares,   segue para &quot;Alftand Animonculory&quot;, até a uma habitação com dois pisos.   Se fores por baixo, vais encontrar o cadáver de Endrast - aproveita para   ler o seu diário. Depois, segue por cima e verás que o solo está cheio   de azeite. Como já deves ter adivinhado, vem na altura certa para usares   o teu feitiço de destruição de fogo. <br />
        Na rampa seguinte, vais encontrar uma armadilha que se vai ativar se   pisares os ladrilhos que sobressaem. Caminha pelos lados de forma a   evitá-las, e tem cuidado para que as lâminas não te acertem. Segue para   diante, mata a outra aranha e avança até chegares ao corpo de Yag   gra-Gortwog. As únicas coisas com utilidade que vais encontrar serão   umas quantas flechas e uma poção. Mantém-te atento à aranha que se está   aproximar. <br />
        É tempo de enfrentares os indesejáveis Falmer, uma espécie de elfos   com crise de identidade. Atacam rápido e usam uma magia muito potente,   para além de estarem muito bem preparados. Aqui é especialmente útil o   Grito &quot;Fire Breath&quot; para os manter afastados no caso de se aproximarem   todos de uma vez. Desce até à zona seguinte, onde vais encontrar uma   sala com um laboratório de Alquimia, onde poderás criar as poções que   necessitares. <br />
        Avança e mata os Farmer que apareçam até chegares à &quot;Alftand Cathedral&quot; . Sobe as escadas e entra. <br />
        Depois de atravessares a porta seguinte vais encontrar um &quot;Dwarven   Centurion&quot; que terás de matar. Tem uma boa quantidade de saúde e os seus   ataques são muito perigosos. Se vires que a situação fica complicada,   usa o &quot;Fire Breath&quot; para te curares rapidamente, antes que ele te mate   primeiro. Quando recuperares a vida, ataca-o enquanto te defendes com o   escudo. <br />
        Encontra-te de seguida com Sila Trebacio e Umani, dois soldados que   estão a discutir e que querem lutar até à morte. É aqui que tu entras -   quando ambos estiverem mortos, ativa o mecanismo no centro para formar   uma nova escada que te levará até &quot;Blackreach&quot;. Avança conforme elimines   os inimigos um por um (pois não serão poucos) e chega até à &quot;Tower of   Mzark&quot;. <br />
        Quando chegares ao topo, coloca o &quot;Lexicon Receptacle&quot; no seu lugar   (na coluna da direita) e de seguida pressiona o botão à sua esquerda uma   vez, o botão seguinte quatro vezes e ativa os restantes mal o curioso   sistema se ponha em funcionamento. Agora, já podes recolher o &quot;Elder   Scroll&quot;. Sai para &quot;Skyrim&quot; e regressa a &quot;High Hrothgar&quot;. <br />
        <br />
        15. Guia The Elder Scrolls V: Skyrim - Alduin's Bane <br />
        Esta missão segue-se a&quot;Elder Knowledge &quot;. <br />
        Objetivos: <br />
        ? Derrotar Alduin <br />
        ? Aprender o grito &quot; Dragonrend&quot; dos heróis Nórdicos <br />
        ? Ler o &quot;Elder Scroll&quot; no &quot;Time-Wound&quot; <br />
        A missão divide-se em mais duas submissões (&quot;The Fallen&quot; e &quot;Season Unending&quot;) que contam com os seguintes objectivos. <br />
        Guia The Elder Scrolls V: Skyrim - Season Unending <br />
        ? Falar com Arngeir <br />
        ? Falar com o General Tullius <br />
        ? Falar com Ulfric Stormcloak <br />
        ? Falar com Arngeir <br />
        Guia The Elder Scrolls V: Skyrim - The Fallen <br />
        ? Falar com Paarthurnax sobre os Greybeards para negociar uma trégua <br />
        ? Falar com Jarl Whiterun <br />
        ? Falar com Paarthurnax, Arngeir ou Esbern <br />
        ? Preparar uma armadilha para Odahviing <br />
        Quando regressares à &quot;The Throat Of The World&quot; mantém-te no centro e   usa o Pergaminho para aprenderes o Grito &quot;Dragonrend&quot;, que obrigará   qualquer dragão a cair para o solo durante um curto período de tempo.   Mal termines a aprendizagem, Alduin aparecerá e começará a atacar.   Parece que a sua vida é maior que a dos dragões que acabamos de   enfrentar. <br />
        Felizmente, tens o Grito e Paarthurnax, que manterá Alduin ocupado   na maior parte do tempo. Cobre-te, e mantém-te atrás do dragão (com a   ajuda de um companheiro é uma tarefa bastante simples) e dispara a cola   para as patas se não tiveres a cabeça à mão. <br />
        Quando terminares a luta, fala com Paarthurnax sobre o novo Grito, e   este te contará que o podes usar também para capturar um dragão.   Regressa a &quot;Whiterun&quot; e fala com Jarl Balgruuf, que parece não estar   muito disposto a te oferecer ajuda enquanto a guerra estiver em curso.   Se já te ocupaste desta tarefa, é possível que se mostre mais   compreensivo. <br />
        O Imperial Army e os Stormcloak têm de negociar, e os Greybeards   aceitam ser os seus moderadores. Contudo, tens de convencer tu próprio   Ulfric e Tullius. <br />
        Dirige-te para &quot;Solitude&quot; e de seguida para &quot;Windhelm&quot;para falar com   cada um dos líderes. Tens que ser especialmente cuidadoso se te   juntaste a algum bando ou se estás na lista dos procurados em qualquer   uma das cidades, porque os líderes militares atacam os criminosos como   os guardas das cidades. <br />
        Quando convenceres ambos os bandos, regressa a &quot;High Hrothgar&quot; e   mede os termos do acordo - agora podes decidir como vão suceder as   coisas. Deixas Riften à sua sorte? Ou será &quot;Windhelm&quot;? Os Stormcloak têm   de pagar? <br />
        Mais tarde, Esbern vai te informar de que existe um novo grito para   chamar o dragãoOdahviing, mas Delphine vai te pedir que acabes com   Paarthurnax, com a ajuda dos Blades. Nós escolhemos não o matar, já que é   uma luta totalmente opcional, ainda que bastante simples se usares o   Grito que acabaste de aprender. <br />
        <br />
        16. Guia The Elder Scrolls V: Skyrim - The World-Eater's Eyrie <br />
        Objetivos: <br />
        ? Libertar Odahviing <br />
        ? Falar com Odahviing <br />
        ? Chegar ao portal de Alduin que te dá acesso a Sovngarde <br />
        ? Entrar em Sovngarde <br />
        Agora que aprendeste o grito &quot;Call Dragon&quot; dirige-te para   &quot;Dragonsreach&quot; e informa Jarl que estás pronto para preparar a   armadilha. <br />
        Dirige-te para fora e usa o grito com todas as tuas forças (mantém o   botão de Grito pressionado durante mais tempo) para invocares   Odahviing. Terás o apoio dos guardas de &quot;Whiterun&quot;, de Jarl e dos seus   capangas. <br />
        NOTA: Se chegaste a Whiterun, chamaste o dragão e ele não apareceu,   isto deve-se muito provavelmente ao facto de Jarl Balgruuf ainda não ter   chegado ao castelo. Espera algumas horas ou aproveita para fazer alguma   missão, para que quando regresses ele já tenha chegado. <br />
        Quando o Dragão morrer, a sua vida vai-se renovar e é esse o momento   crucial para pores em prática o teu plano. Dirige-te para a porta por   onde entraste, e os guardas de&quot;Whiterun&quot; irão capturar Odahviing. <br />
        Fala com ele e aceita libertá-lo. Irá te dizer onde se esconde Alduin e te transportar até lá, voando. <br />
        ATENÇÃO, porque a viagem é só de ida e não poderás levar um   companheiro contigo, de forma que assegura-te que tens contigo todas as   poções, armas, feitiços e tudo o que possas considerar necessário para   superar a tua luta a solo contra o dragão. <br />
        Dirige-te para Sovngarde, através de Skuldafn, nas montanhas a Este. <br />
        Quando chegares, serás atacado por um Draugr e um Dragão de Fogo.   Mata em primeiro lugar os arqueiros, antes de te aventurares na luta   corpo a corpo - contudo, dependo da estratégia que pretendas adoptar. Se   juntares a resistência ao fogo com o grito&quot;Dragonrend&quot; terás a   combinação perfeita para eliminar o primeiro Dragão. Se fores atingido,   lembra-te de te curar antes de voltares a atacar, mal tenhas uma   oportunidade para isso. <br />
        Sobe à torre e abre o cofre para conseguires o Martelo Dwarven e   algumas flechas de Orcs. Sai e continua a eliminar todos os inimigos que   se atravessem no teu caminho. Cuidado que vão apareceu alguns mais   resistentes, armados com espadas. Protege-te com o escudo e   contra-ataca. <br />
        Assim que acabares com eles, aventura-te pelo Templo. Tem cuidado   com as armadilhas que vais encontrar pelo caminho. Avança rapidamente   pela passagem, correndo o mais que possas para te esquivares das   flechas. Podes também atrair os inimigos até aí, e aproveitares-te das   flechas para os eliminares. <br />
        Agora é tempo de resolver um puzzle, onde aparecerão novamente os   símbolos que viste em ocasiões anteriores: a serpente, o golfinho e a   águia. Vai para a esquina norte e posiciona-te por trás do puzzle.   Conforme a ordem em que coloques os símbolos, coisas diferentes   acontecerão. Contudo, para desbloqueares a passagem e poderes avançar   pelo Templo, ordena-os da seguinte forma: águia, serpente, águia. <br />
        Esperam-te agora mais mortos-vivos, mas já sabes o que tens de   fazer! Aqui, podes usar algum dos Pergaminhos que tenhas, ou então   recorre a um pouco de magia e umas investidas, que já deverá ser   suficiente. No caminho seguinte vais te cruzar com algumas Frostbite   Spiders, elimina-as rapidamente para que não tenham hipótese de te   envenenar. <br />
        Vais chegar a uma habitação, na qual te esperam mais dois inimigos e   outro puzzle. A resposta, da esquerda para a direita, é golfinho,   serpente, águia. Antes de prosseguires, não te esqueças de vasculhar bem   todos os recantos para te certificares que recolhes tudo o que te possa   ser útil. <br />
        Segue pela ponte do segundo pisto até chegares a uma escada em   espiral. O solo está cheio de azeite, portanto sê rápido antes que o   inimigo lance chamas sobre ti (coisa que tu podes também fazer), e a   situação irá aquecer bastante. Quando o fogo se dissipar, segue para   diante e mata mais dois mortos-vivos. Agora podes desbloquear a porta   tranquilamente. <br />
        Espera-te outro morto-vivo bem mais resistente que o habitual,   empunhando uma espada nórdica, para te complicar ainda mais a vida.   Lembra-te de usar um escudo e os feitiços de restauração para acabar com   ele. O melhor que tens a fazer no caso de teres espaço suficiente, é   tentar ficar com a sua arma. O código para desbloquear a porta da zona   seguinte é: lobo, mariposa, dragão. <br />
        Na &quot;Words Wall&quot; vais aprender um novo grito, o &quot; Storm Call&quot;.   Poderás encontrar várias poções distribuídas pelo local. Sai pela porta   da esquerda e vais te cruzar com mais três inimigos. Um deles usa magia e   armas corpo-a-corpo. Recorre a feitiços ou ao novo grito que acabaste   de aprender. A escolha é tua. <br />
        Mais adiante vais ser surpreendido por dois dragões, situados no   alto das colunas à tua esquerda e direita. No centro do pátio vais   encontrar Nahkriin, que tentará fechar o portal através do uso de   encantamentos na língua dos dragões. <br />
        Luta contra ele, mas tem cuidado com os seus ataques eléctricos. De   forma semelhante ao que tens feito noutras ocasiões, usa o arco para o   atacar e protege-te com algum dos elementos do cenário, sem deixares de   te mover. <br />
        Usa o grito Dragonrend e acaba com cada um dos dragões antes de   eliminar Nahkriin por completo. Leva a sua máscara, e poderás reabrir o   portal. É hora de entrar em Sovngarde! <br />
        <br />
        17. Guia The Elder Scrolls V: Skyrim - Sovngarde <br />
        Esta missão vem imediatamente depois de &quot;The World-Eater's Eyrie&quot;. <br />
        Objetivos: <br />
        ? Consegue que te deixem passar pelo Hall of Valor <br />
        ? Falar com os heróis de Sovngarde <br />
        ? Derrotar Alduin <br />
        Alduin estará presente, sobrevoando Sovngarde à distância, enquanto   nos observa. Este é um lugar tenebroso, onde não irias certamente de   férias. Podes dissipar a névoa com o grito &quot;Clear Skies&quot;, mas o efeito   só irá durar por um curto período de tempo. <br />
        Aventura-te na névoa e vais encontrar runas e tochas de luz azulada,   que te indicarão o caminho a seguir. Pelo caminho vais te encontrar com   um guerreiro Stormcloak que te vai indicar qual o caminho até ao templo   de Shor. <br />
        Vai te propor acompanhar-te na tua missão. Segue com ele, mas não   demorará muito até que Tsun vos detenha e que te exija que proves que és   forte o suficiente para te deixar entrar. Não terás grande dificuldade   em lhe mostrares quem manda ali realmente. Se quiseres resolver o   assunto rapidamente, usa um dos teus gritos, mas sem ser na sua   capacidade máxima. Isso fará com que a tua barra de energia se regenere   rapidamente, e possas recorrer novamente à mesma estratégia. <br />
        Entra e atravessa a ponte. Avança e fala com Ysgramor. Este vai te   dizer para falares com os Grandes Heróis Nórdicos, que combateram pela   primeira vez contra Alduin: Gormlaith, Felldir e Hakon. Estás preparado   para a luta final. <br />
        17.1 Guia The Elder Scrolls V: Skyrim - Dragonslayer <br />
        Objetivos: <br />
        ? Ajudar os Heróis de Sovngarde a dissipar a névoa <br />
        ? Derrotar Alduin <br />
        Segue os Heróis até lá fora e usa três vezes grito &quot;Clear Skies&quot;   quando te pedirem para dissipar a névoa, antes de te dirigires ao local   onde te vais encontrar com Alduin. <br />
        Já sabes o que tens de fazer agora. O essencial é usar o grito &quot;   Dragonrend&quot; para fazer com que o dragão ceda e tenha de descer - a mesma   técnica que usaste em quando lutaste contra ele no alto de &quot;The Throat   of the World&quot;. É uma boa opção atacares agora à distância, com o arco e   com magia, quer seja para lhe lançares feitiços ou para invocar alguma   criatura. <br />
        Enquanto Hakon e Felldir tratam de atacar Alduin , aproveita para te   aproximares dele por trás. Lembra-te que ele não é nenhum tonto, e em   qualquer momento poderá atacar-te. Tem sempre à mão feitiços de   restauração ou poções, muitas poções! Com isso e a ajuda dos teus   amigos, não será uma tarefa tão difícil quanto parece. <br />
        Tsun vai te ensinar um novo grito, que te servirá para invocar   heróis para que lutem a teu lado durante um curto período de tempo,   dependendo do intervalo de tempo em que mantenhas o botão pressionado.   Um toque breve fará com que apareça Gromliath, centrado na luta à   distância; um médio invocará Felldir; um completo fará aparecer Hakon.   Quando terminares, mostra intenções de regressar a Skyrim e terás   completado a história principal do jogo, parabéns! <br />
        No entanto, existem ainda muitas, muitas coisas por descobrir:   missões secundárias, gente que ainda não conheceste, locais para   descobrir, casas que ainda não compraste, masmorras que ainda não   saqueaste, etc.! E o melhor é que agora poderás invocar Odhaviing sempre   que quiseres! <br />
        Disfruta! <br />
        <br />
        Guia The Elder Scrolls V: Skyrim - Mutações - Vampirismo <br />
        Ao longo da tua viagem pelas terras de Skyrim vais encontrar   personagens contagiadas pela Hemophilia Porfírica, mais conhecida por   vampirismo, que podem contagiar-te com a sua doença, convertendo-te a ti   também num vampiro. <br />
        Como no jogo anterior da saga, Oblivion, a enfermidade inicial pode   ser curada durante os três primeiros dias, e após esse tempo o infectado   transforma-se num vampiro. Ainda que o seu progresso seja lento, os   sintomas que se vão manifestando ao longo do tempo modificam totalmente a   forma como jogas. <br />
        Se o teu estilo se aproxima mais do sigilo porque preferes avançar   pelas sombras sem que nada te aviste, contrair esta enfermidade pode-te   ser muito útil. Contudo, antes de te decidires dá uma vista de olhos no   que te descrevemos de seguida, para teres também em conta os   inconvenientes que a doença traz, que não são poucos! <br />
        O Vampirismo conta com quatro diferentes estados: <br />
        Vampiro - Primeira fase <br />
        Na primeira fase da doença os teus olhos adquirem um tom avermelhado   e os personagens de Skyrim começarão a fazer comentários sobre eles e   sobre a tua pele. Podes morder alguém que estiver a dormir para   reduzires os sintomas da doença nesta primeira fase. <br />
        Características: <br />
        ? Aumenta a resistência ao gelo em cerca de 25 %. <br />
        ? A magia, a saúde e a resistência reduzem-se em 15 pontos quando estás exposto à luz solar. <br />
        ? Aumenta a fragilidade perante o fogo em cerca de 25 %. <br />
        ? Adquires as habilidades &quot;Vampire's Sight&quot;, &quot;Vampiric Drain&quot;, &quot;Vampire's Servant&quot;. <br />
        Vampiro - Segunda fase <br />
        Passaram-se 24 horas desde que foste infectado e caso não consigas   morder ninguém nem tenhas te conseguido curar de outra forma, atingirás a   segunda fase. <br />
        Características: <br />
        ? Aumenta a resistência ao gelo em cerca de 50 %. <br />
        ? A magia, a saúde e a resistência reduzem-se em 30 pontos quando estás exposto à luz solar. <br />
        ? Aumenta a fragilidade perante o fogo em cerca de 75 %. <br />
        ? Adquires a habilidade &quot;Vampire's Seduction&quot;. <br />
        Vampiro - Terceira fase <br />
        Atingirás a terceira fase quando se completarem 48 horas desde o   momento em que contraíste a enfermidade, e não tiveres mordido ninguém   nem te curado através de outros meios. <br />
        Características: <br />
        ? Aumenta a resistência ao gelo em cerca de 75 %. <br />
        ? A magia, a saúde e a resistência reduzem-se em 45 pontos quando estás exposto à luz solar. <br />
        ? Aumenta a fragilidade perante o fogo em cerca de 75 %. <br />
        ? As habilidades que aprendeste tornam-se mais potentes. <br />
        ? Desvantagem: a maior parte das NPC's não irão interagir contigo. <br />
        Vampiro - Quarta fase <br />
        Parabéns! Transformaste-te num verdadeiro vampiro, pronto a morder pescoços! <br />
        Características: <br />
        ? Aumenta a resistência ao gelo em cerca de 100 %. <br />
        ? A magia, a saúde e a resistência reduzem-se em 45 pontos quando estás exposto à luz solar. <br />
        ? Aumenta a fragilidade perante o fogo em cerca de 100 %. <br />
        ? Aprenderás a habilidade &quot;Embrace of Shadows&quot; e melhorarás as habilidades já adquiridas. <br />
        ? Desvantagem: Todos os cidadãos de Skyrim vão te atacar mal te   vejam, por seres um vampiro. Não digas que não estavas à espera disto!! <br />
        Guia The Elder Scrolls V: Skyrim - Vampirismo - Vantagens <br />
        Ser vampiro tem também as suas coisas boas. Não tens de acordar de   manhã, nem dar explicações quando mordes alguém, mas em The Elder   Scrolls V: Skyrim converter-te em descendente de Nosferatu oferece ainda   outras virtudes: <br />
        ? Imunidade às doenças (pois doente já tu estás). <br />
        ? Os feitiços de ilusão são cerca de 25 % mais potentes. <br />
        ? Imunidade ao veneno. <br />
        ? Aumenta a resistência ao gelo. <br />
        ? É 25 % mais difícil detectarem-te quando te deslocas em sigilo. <br />
        <br />
        Guia The Elder Scrolls V: Skyrim - Mutações - Transformação em Vampiro <br />
        Em Skyrim, contrair a Hemophilia Porfírica não é uma tarefa   complicada, mas se tens a intenção de optar por ela diretamente, isso   pode-se revelar mais complicado <br />
        O ideal é localizar um vampiro (muito fácil de distinguir pelo tom   de pele pálido, olhos e dentes vermelhos, além de que a maioria deles   seguem com túnicas negras). Cada mordedura que te dê, incrementa a   possibilidade de contraíres a doença. <br />
        Nos arredores de Ivarstead é muito provável que encontros alguns   numa caverna que existe a sudoeste. Entra, e deixa que te ataquem. Não   te esqueças de que não te transformas de imediato, consulta com as   quatro fases nas quais se desenrola o vampirismo, se ainda não o   fizeste. <br />
        Guia The Elder Scrolls V: Skyrim - Mutações - Cura do Vampirismo <br />
        Antes de seres um vampiro completo, tens a oportunidade de reverter o   processo de uma forma muito fácil. Quando te infectarem, bebe uma poção   para curar enfermidades, antes de que completem os 3 dias. Os sintomas   desaparecerão, e voltarás a ser um cidadão normal. O mesmo acontece que   fores rezar a uma das capelas que foram dispensadas por todo o mapa de   Skyrim. <br />
        Se estás nuna fase avançada, o ideal é reduzires o nível da doença   mordendo algum NPCadormecido. Vai te aparecer a opção ao te aproximares   da vítmia, pressiona 'Roubar'. Isso fará com que retornes à primeira   fase da doença e poderás ter um aspecto mais ou menos normal. <br />
        A partir daí, se quiseres livrar-te da doença, temos de cumprir a   missão &quot;Rising at Dawn&quot; que nos será atribuída por Valga Vinicia na   pousada da cidade de Falkreath. Se seguires as suas instruções e te   submeteres ao ritual ficarás curado da tua doença. <br />
        <br />
        Guia The Elder Scrolls V: Skyrim - Mutações - Licantropia <br />
        Em Skyrim poderás também encontrar a licantropia, uma doença que te   converte emLobisomem. Para isso, terás de te juntar aos The Companions   em Whiterun e iniciar a sua lista de missões. Depressa descobrirás que o   grupo ao qual te acabas de juntar não é bem o que parece. <br />
        Ser Lobisomem tem poucos benefícios, mas podem-te ser muito úteis   dependendo do teu estilo de jogo. Por exemplo, o teu nível de vida é   maior que na forma humana e és imune a todas as doenças, incluindo à   Hemophilia Porfírica. <br />
        Como era de esperar, quando te transformas avanças mais rápido, a   tua força aumenta consideravelmente e as coisas também vão melhorando à   medida que vais subindo de nível. Os inimigos sentirão medo ao ouvir o   teu uivo e correrão a salvar as suas vidas. É ainda necessário que   saibas que os lobisomens não têm uma grande resistência a ataques.   Quando fores apanhado por um grupo de inimigos, a coisa pode não correr   bem. <br />
        Felizmente a resistência regenera-se bastante rápido, e vamos melhorando a capacidade de atacar com as garras. <br />
        Mas, atenção, não poderás aceder ao menú, nem falar com ninguém e   muito menos recolher objetos do cenário. O efeito dura apenas um   determinado tempo, antes de voltares de novo à forma humana normal. Se   por algum motivo tens pressa de voltar a ser humano, simplesmente usa a   opção &quot;Esperar&quot;. <br />
        Só te poderás curar alimentando-te com inimigos, o que fará com que recuperes vida e demores mais a voltar a ser humano. <br />
        Guia The Elder Scrolls V: Skyrim - Licantropia - Vantagens <br />
        Como descrevemos anteriormente, ser Lobisomem oferece-te vantagens   que convém ter em conta se realmente se ajustam ao teu estilo de jogo. <br />
        ? Mais velocidade <br />
        ? Mais força física <br />
        ? Podes provocar medo com o teu uivo <br />
        ? Total imunidade às doenças <br />
        ? Quando te curas da licantropia tornas-te imune para sempre ao vampirismo. <br />
        Guia The Elder Scrolls V: Skyrim - Licantropia - Desvantagens <br />
        Naturalmente existem também os seus inconvenientes em ser um   lobisomem. Se não forem conhecidos antecipadamente, podem acabar por ser   um calvário para o jogador. <br />
        ? Não poderás receber o bónus &quot;Well Rested&quot; <br />
        ? As pessoas fogem de ti ou atacam- te <br />
        ? As armas de prata causam-te mais danos <br />
        <br />
        Guia The Elder Scrolls V: Skyrim - Mutações - Transformação em Lobisomem <br />
        Desconheces à partida que os The Companions têm um segredo, e que   alguns dos seus membros mais dedicados são lobisomens. Se completares as   missões que este grupo te atribui em Whiterun vais começar a perceber   que na realidade não são o que parecem. A dada altura na história, vai   te ser atribuída uma missão chamada The Silver Hand em que tens de   escolher fazer ou não parte de um ritual no qual bebes sangue de outro   Lobisomem. <br />
        Tem em conta que se não aceitares fazê-lo, a missão não ficará completa. <br />
        Outra forma de converter-te em Lobisomem passa por falares com o   prisioneiro que está na Prisão de Falkreath. Este prisioneiro vai te   entregar o &quot;Cursed Ring Of Hircine&quot;; cumpre os seus objetivos até   chegares à missão Hunter and Hunted . <br />
        <br />
        Guia The Elder Scrolls V: Skyrim - Mutações - Cura da Licantropia <br />
        Quando terminares a lista de missões de que os The Companions te   encarregaram, terás uma oportunidade de te curares da tua enfermidade.   Tem uma coisa em mente: depois de te curares, não poderás voltar a ser   novamente um Lobisomem. <br />
        <br />
        <br />
        Guia The Elder Scrolls V: Skyrim - Conselhos <br />
        Guia The Elder Scrolls V: Skyrim - Conselhos Básicos <br />
        Perigo: vampiros na zona: Nas terras gélidas de Skyrim podes-te   cruzar facilmente com vampiros, uns inimigos que não são o que parecem.   De cada vez que fores atacado por um deles, a tua probabilidade de   contrair a Hemofilia Porfírica aumenta; o que vai acabar por te   transformar num deles e te obrigar a alterar a tua estratégia de jogo   para conseguires te curar nos três dias seguintes. <br />
        Podes ficar a conhecer mais sobre eles em , onde poderás também descobrir como curar esta doença. <br />
        Dificuldade: Tal como na versão anterior, Oblivion, em Skyrim é   possível alterar a dificuldade a qualquer ponto do jogo, não se perdendo   nada por diminuí-la quando precisamos de superar um inimigo que nos   resiste. Não queremos com isto dizer que não o consegues superar, é só   uma dica! <br />
        Alquimia: Um pequeno conselho para quem nunca se aventurou nesta   especialidade: na saga Elder Scrolls existe a Alquimia. É um exercício   que é muitas vezes recusado graças ao grande desconhecimento que existe   sobre os efeitos que têm os vários elementos que podem ser recolhidos no   cenário de jogo. Recomendamos-te por isso ires experimentando   diferentes ingredientes, para veres o que consegues fazer (não é difícil   conseguires criar algo, combinando ingredientes ao acaso), e ao mesmo   tempo ganhas experiência para subir de nível! <br />
        Roubar: Em Skyrim, roubar também é um crime. Mas são tantas as   oportunidades de o fazeres, que não o conseguirás evitar. O grande   problema é que se fores apanhado, para além de ficares sem os objetos   roubados, poderás ir parar à cadeia ou até ser morto. É assim a vida do   protagonista de um jogo épico! <br />
        Felizmente encontramos um método infalível para poder usurpar a   maior parte dos bens alheios. De que precisamos? Cestas, caixas, cubos   ou objetos semelhantes, e confiança na física dos objetos, que os NPC se   mantenham quietos <br />
        <br />
        Guia The Elder Scrolls V: Skyrim - Conselhos <br />
        Guia The Elder Scrolls V: Skyrim - Como Ganhar Dinheiro <br />
        Se quiseres juntar muito dinheiro sem teres de te aventurar por   masmorras nem lutas, também o podes fazer. O mundo de Skyrim oferece-nos   trabalhos de rotina que calham muito bem para ganhar uns trocos. <br />
        1. Cortar Madeira <br />
        Em primeiro lugar, tens de arranjar um machado para cortar troncos.   Podes comprá-lo numa loja ou recolher um dos muitos que estão perdidos   pelo cenário. Depois disso, só tens de te aproximar de uma árvore e   começar a cortar. Encontrarás madeira sem dificuldade nos caminhos   próximos das povoações. <br />
        As achas de madeira (conseguimos duas por cada tronco) podem ser   vendidas mais tarde por cinco moedas de ouro cada. Não é a tarefa mais   divertida do mundo, mas poderia ser pior! <br />
        2. Cozinhar <br />
        Ah, a comida! Que bom aspeto tem a carne, o peixe e a fruta de   Skyrim! Mas claro que a comida disponível não é apenas para ser comida   crua, como um selvagem. <br />
        Se encontrares uma panela com a qual possas cozinhar, tens acesso a   uma vasta lista de receitas. Os ingredientes necessários estão por baixo   do quadro de descrição do prato em questão. Combina-os para criares   verdadeiros manjares e vendê-los depois aos mercadores. <br />
        3. Investir <br />
        Se possuis o atributo &quot;Investidor&quot; na árvore de habilidades da   Eloquência, podes investir em determinadas lojas e ficar com uma parte   dos lucros de cada vez que a visitares. <br />
        4. Exploração Mineira <br />
        A exploração mineira traz benefícios mais elevados já que em Skyrim   existem nove tipos de minério: ouro, ferro, ébano, prata, alumínio,   malaquita, selenite, oricalco e mercúrio. O mais valioso de todos é o   ébano. <br />
        Não poderás escavar se não tiveres uma picareta. Podes comprá-la   numa loja, ou procurar a que se encontra no cimo de &quot;Throat of the   World&quot;, cravado no gelo da montanha, que é mais eficaz porque tem   entalhes. Simplesmente procura um terreno onde possas escavar e começa a   recolher minerais. <br />
        Se tiveres duas picaretas, ainda que uma delas seja pior que a   outra, serás mais rápido a cumprir a tua tarefa. Aproxima-te e ataca, em   vez de ativar a veia de mineral. Quando terminares, procura outra pois   não se voltará a regenerar enquanto não passarem umas quantas semanas. <br />
        Depois de teres o mineral, tens de o fundir para o converter em   lingotes. Normalmente encontras alguns ferreiros próximos das minas, mas   se não os encontrares, procura o que se encontra na entrada de   &quot;Whiterun&quot;. Os lingotes vendem-se melhor e também podes usá-los para   melhorar as tuas armas e armaduras. <br />
        5. Forja <br />
        A forja serve para criar e melhorar armas e armaduras, e é essencial   para quando preferes usar os lingotes em vez de os venderes. Podes   personalizar as tuas melhorias e criar uma peça única para vender a   outros ferreiros. <br />
        <br />
        Guia The Elder Scrolls V: Skyrim - Conselhos <br />
        Guia The Elder Scrolls V: Skyrim - Comprar uma Casa <br />
        O mais provável é que não consigas facilmente ter uma casa em Skyrim   porque são bastante caras, e pior ainda se pensares decorá-la a teu   gosto. É um lugar perfeito para descansar e guardar as tuas coisas, mas   para poderes comprá-la tens de falar com Jarl da povoação em questão. <br />
        Quando estabeleceres amizade com ele (após fazer uma missão ou te   converteres em Thane), fala com o seu criado para que te venda uma casa.   Tem em conta que quando te juntas a qualquer uma das irmandades   existentes, terás uma cama disponível no seu centro de operações. <br />
        Converte-te em Thane, para que possas contar com o teu próprio   Edecán - um companheiro que velará sempre pela tua segurança. Um dos   primeiros que vais encontrar é Lydia, em Whiterun, depois de venceres o   dragão da Torre de uma das missões principais . Tem normalmente um   quarto na tua casa, e é aí que vai recorrer de cada vez que precisar de   descansar. <br />
        De seguida, mostramos-te todas as propriedades que podes adquirir em Skyrim. <br />
        Markrath <br />
        A casa de Markrath tem um preço base de 8.000 moedas, extensíveis   até 12.200 se a quiseres melhorar. Consegues obtê-la com a ajuda de Jarl   Igmund e comprando-a a Raerek. <br />
        Riften <br />
        A casa de Riften tem um preço base de 8.000 moedas, extensíveis a   12.300 se a quiseres melhorada. Ser-te-á oferecida quando cumprires uma   quantidade determinada de missões na cidade e te converteres em Thane.   Tem ainda um jardim e uma cozinha bem equipada! <br />
        Winterhold <br />
        A casa de Winterhold tem um preço base de 12.000 moedas, ampliáveis a   umas proibitivos 21.000 se a quiseres melhoradas. Também a conseguirás   se te converteres em Thane de Eastmarch, e será um bom local para expor   as tuas armas e armaduras. <br />
        Solitude <br />
        A casa de Solitude tem um preço base de 25.000 moedas, extensíveis a   36.000 se a quiseres melhorada. Tem três pisos e seis salas, e a   conseguirás realizando missões para Jarl. <br />
        <br />
        Guia The Elder Scrolls V: Skyrim - Conselhos <br />
        Guia The Elder Scrolls V: Skyrim - Tira partido dos teus Companheiros <br />
        1. Quando trocares armaduras e objetos com o teu assistente ou   companheiro de viagem, este vai equipar-se automaticamente com o melhor,   sempre que o nível do objeto seja superior que o que ele atualmente   possui. <br />
        2. A maior parte dos companheiros que se juntarão à tua aventura   levarão consigo uma armadura muito débil, de forma que mal encontres (ou   fabriques) uma, entrega-lha. Se morrerem podes sempre revistar o   cadáver e ficar de novo com os objetos. <br />
        3. Quando a saúde do teu companheiro chegar ao mínimo, este vai-se   ajoelhar para tentar recuperar um pouco. Quando isto acontecer, os   inimigos contra os quais estiveres a lutar vão se centrar em ti, mas os   feitiços (incluindo um teu) ou alguma flecha perdida poderão acabar com a   sua vida. <br />
        Distrai os inimigos e afasta-os da zona para combateres sem correr o risco de atingires o teu companheiro. <br />
        4. Se entregares uma tocha a um dos teus seguidores, ele vai usá-la   sempre que entrarem numa zona escura, o que será muito útil para que   possas usar as duas mãos para te defender. Para além disso, todos os   objetos que recolherem não têm qualquer tipo de peso, portanto podes   fazer com que recolham tudo o que achares conveniente. Para o fazeres,   fala com ele/ela e pede-lhe que recolha algo. Depois, só terás de mover o   cursor até ao objeto em questão e será teu. <br />
        <br />
        Guia The Elder Scrolls V: Skyrim - Truques <br />
        Guia The Elder Scrolls V: Skyrim - Truques para PC <br />
        De seguida, apresentamos alguns dos truques presentes na versão para   PC de The Elder Scrolls V: Skyrim. São praticamente os mesmos que havia   em Oblivion e para os usares deverás introduzir os seguintes códigos no   ecrã que aparece ao pressionares a tecla (\) do teu teclado. <br />
        Recomendamos vivamente que antes de experimentares qualquer truque   tentes passar o jogo por ti mesmo, pois a satisfação no final não tem   comparação. É a melhor dica que te podemos dar. Além disso podes alterar   a dificuldade do jogo à vontade , portanto pensa bem antes de tomar a   decisão, e guarda sempre o jogo antes de experimentares. <br />
        PSB: Dá-te acesso a toda a magia e a todos os gritos. Com este   truque, desbloqueias todos os rituais mas não as almas necessárias para   os ativares! <br />
        TGM: é a velha conhecida modalidade &quot;God&quot;: imortalidade, resistência e magia infinitos, e nenhum limite no peso. <br />
        Payer.additem 00000f xxx: xxx representa a quantidade de moedas de   ouro que desejas adicionar ao inventário. Por exemplo, para conseguires   100 moedas, introduz Player.additem 00000f 100, mas claro que vais   querer adicionar muitas mais! <br />
        Player.additem 00000a xxx: tem o mesmo efeito que o truque anterior, mas desta vez xxx representa o número de picaretas. <br />
        TCL: permite-te mover livremente pelo mapa a voar, é o conhecido &quot;Fly Mode&quot;. <br />
        Advlevel: aumenta o teu nível, mas não permite adicionar pontos de habilidade ou melhorar as tuas características. <br />
        Tdetect: passarás despercebido a qualquer pessoa. <br />
        Sexchange: este truque permite trocar o sexo da tua personagem,   mantendo a mesma cara. O resultado é bastante inquietante e horrível,   pode traumatizar-te se já te afeiçoaste à tua personagem. <br />
        Showracemenu: se te cansaste da tua raça, este menu resolve-te o problema, permitindo-te alterá-la. <br />
        <br />
        Guia The Elder Scrolls V: Skyrim - Casamento <br />
        Guia The Elder Scrolls V: Skyrim - Como casar? <br />
        Nesta quinta edição do The Elder Scrolls, a Bethesda criou a   possibilidade de te casares com algumas personagens do jogo, sem limite   de sexo nem de raça. <br />
        Não o conseguirás fazer sem primeiro encontrares o &quot;Amulet of Mara&quot;.   Esta joia permite que os habitantes de Skyrim saibam que estás solteiro   e que procuras alguém com quem partilhar as tuas &quot;preocupações&quot;. <br />
        Amulet of Mara <br />
        é possível que o consigas encontrar sem teres de procurar muito, mas   a forma mais fácil de o conseguires é comprá-lo a Maramal por 200   moedas, no Templo de Mara, em Riften. Depois, fala com o sacerdote   usando todas as opções disponíveis para poderes casar. <br />
        Agora só tens que encontrar alguém que aceite casar-se contigo.   Contudo, antes disso tens de ganhar a sua amizade, completando   determinadas missões ou tarefas de que te encarregue. <br />
        Para que não tenhas de descobrir sozinho, mostramos-te na próxima   página alguns dos personagens femininos com os quais te poderás casar.   Na página seguinte estão disponíveis os personagens masculinos. Que flua   o amor! <br />
        A Cerimónia <br />
        Quando o personagem em questão aceitar a cerimónia, deverás te   dirigir novamente ao &quot;Templo de Mara&quot; e voltar a falar com o sacerdote.   Espera 24 horas e já te poderás casar. Receberás um anel especial que   gritará &quot;estou comprometido para a vida&quot; a meio Skyrim. E sim, também te   poderás arrepender no último momento e fugir a sete pés! <br />
        A tua esposa ou marido será uma boa ferramenta para conseguires boas   quantidades de dinheiro. Pergunta-lhe uma vez por dia como correu o dia   na loja, e recebem 100 moedas. E, no caso de terem passado dois, três   ou vinte dias terás todas essas moedas acumuladas à tua espera. <br />
      Por fim, dormirem juntos ou até pedir-lhe que te prepare um belo prato também te trará vantagens. </p>
@stop
@extends('layout.base_layout')
@section('titulo')
  {{'Mortal Kombat'}}
@stop

@section('conteudo')
        @component('comp_titulo_detonado')
          @slot('titulo')
            Combo de Golpes Mortal Kombat:
          @endslot
        @endcomponent
      
      <p><strong>Scorpion</strong><br />
        Spear: Trás - Trás - Quadrado<br />
        Demon Fire: Baixo - Trás - Triângulo<br />
        Teleport: Baixo - Trás - [X]<br />
        Take Down: Baixo - Trás - Bolinha<br />
        Air Throw: Defesa (no ar)<br />
        X-Ray Move Scorpion Sting: L2 + R2<br />
        Fatality 1 &gt; Split Decision: Frente - Baixo - Frente - Triângulo (encostado)<br />
        Fatality 2 &gt; Nether-Gate: Trás - Frente - Trás - [X] (encostado)<br />
        Fatality 3 &gt; Toasty: Baixo - Cima - Cima - Triângulo (a um pulo) *Scorpion versão MK1<br />
        Stage Fatality: Frente - Cima - Cima - Quadrado<br />
        Babality: Baixo - Trás - Frente - Baixo - Triângulo (a um pulo)<br />
  <br />
  <strong>Liu Kang</strong><br />
        High Fireball: Trás - Frente - Quadrado<br />
        Low Fireball: Trás - Frente - [X]<br />
        Flying Dragon Kick: Trás - Frente - Triângulo<br />
        Bicycle Kick: Trás - Trás - Frente - Bolinha<br />
        Parry: Baixo - Trás - Quadrado<br />
        X-Ray Move Chin Up: L2 + R2<br />
        Fatality 1 &gt; Fist of Flame: Frente - Trás - Baixo - Baixo - [X] (a um passo)<br />
        Fatality 2 &gt; The Beast Within: Baixo - Baixo - Frente - Baixo - Bolinha (a um pulo)<br />
        Stage Fatality: Baixo - Frente - Trás - [X]<br />
        Babality: Baixo - Baixo - Baixo - Bolinha (a um pulo)<br />
  <br />
  <strong>Kung Lao</strong><br />
        Hat Toss: Trás - Frente - Triângulo (Controle o chapéu para cima e para baixo)<br />
        Ground Hat: Baixo - Trás - Triângulo<br />
        Spin: Baixo - Frente - Quadrado<br />
        Dive Kick: Baixo + Bolinha (no ar).<br />
        Teleport: Baixo - Cima<br />
        &gt; Throws - Quadrado<br />
        &gt; Punches - Triângulo<br />
        &gt; Kicks - [X]<br />
        X-Ray Move Fist of Shaolin: L2 + R2<br />
        Fatality 1 &gt; Hat Trick: Trás - Frente - Frente - Trás - Triângulo (a um passo)<br />
        Fatality 2 &gt; Razor''''s Edge: Baixo - Baixo - Frente - Trás - Quadrado (a um passo)<br />
        Stage Fatality: Baixo - Frente - Baixo - [X]<br />
        Babality: Baixo - Frente - Baixo - Triângulo (a um pulo)<br />
  <br />
  <strong>Sub-Zero</strong><br />
        Iceball: Baixo - Frente - [X]<br />
        Slide: Trás - Frente - Bolinha<br />
        Ice Clone: Baixo - Trás - Quadrado<br />
        Ice Puddle: Baixo - Trás - [X]<br />
        X-Ray Move Deep Freeze: L2 + R2<br />
        Fatality 1 &gt; Have an Ice Day: Trás - Frente - Baixo - Frente - Bolinha (a um passo)<br />
        Fatality 2 &gt; Spinal Smash: Baixo - Trás - Baixo - Frente - Triângulo (a um passo)<br />
        Fatality 3 &gt; Spine Rip: Frente - Baixo - Frente - Triângulo (encostado) *Sub-Zero versão MK1<br />
        Stage Fatality: Frente - Baixo - Trás - Triângulo<br />
        Babality: Baixo - Trás - Baixo - Bolinha (a um pulo)<br />
  <br />
  <strong>Sindel</strong><br />
        Fireball: Baixo - Frente - Quadrado (pode ser no ar)<br />
        Low Fireball: Baixo - Frente - [X]<br />
        Yell: Baixo - Trás - Triângulo<br />
        Levitate: Baixo - Baixo - Cima<br />
        Hair Whip: Baixo - Frente - Triângulo<br />
        Step Up: Baixo - Frente - Bolinha<br />
        X-Ray Move Queen Bee: L2 + R2<br />
        Fatality 1 &gt; Migraine: Trás - Frente - Baixo - Frente - Quadrado (a um passo)<br />
        Fatality 2 &gt; Mouthful: Trás - Frente - Cima - Triângulo (a um passo)<br />
        Stage Fatality: Baixo - Baixo - Baixo - Quadrado<br />
        Babality: Baixo - Baixo - Baixo - Cima (a um pulo)<br />
  <br />
  <strong>Ermac</strong><br />
        Force Ball: Baixo - Trás - Triângulo<br />
        Air Blast: Baixo - Trás - Triângulo (no ar)<br />
        Force Port: Baixo - Trás - Bolinha (pode ser no ar)<br />
        Force Lift: Baixo - Trás - Quadrado<br />
        Hover Slam: Baixo - Baixo - Cima<br />
        Force Push: Trás - Frente - Quadrado<br />
        X-Ray Move Cannonball Slam: L2 + R2<br />
        Fatality 1 &gt; Mind Over Splatter: Baixo - Cima - Baixo - Baixo - Defesa (a um pulo)<br />
        Fatality 2 &gt; Pest Control: Frente - Trás - Frente - Baixo - Bolinha (a um pulo)<br />
        Stage Fatality: Baixo - Cima - Baixo - Baixo - [X]<br />
        Babality: Baixo - Baixo - Trás - Baixo - Triângulo (a um pulo)<br />
  <br />
  <strong>Reptile</strong><br />
        Slow Force Ball: Trás - Trás - Quadrado<br />
        Fast Force Ball: Trás - Trás - [X]<br />
        Slide: Trás - Frente - Bolinha<br />
        Acid Hand: Baixo - Trás - Triângulo<br />
        Invisibility: Baixo - Cima - Bolinha<br />
        Acid Spit: Baixo - Frente - Quadrado<br />
        Elbow Dash: Trás - Frente - Triângulo<br />
        X-Ray Move Tricky Lizard: L2 + R2<br />
        Fatality 1 &gt; Acid Yak: Frente - Frente - Baixo - Cima - [X] (a um passo)<br />
        Fatality 2 &gt; Weight Loss: Baixo - Baixo - Frente - Trás - Quadrado (a um passo)<br />
        Fatality 3 &gt; Yummy!: Trás - Trás - Frente - Baixo - Defesa (a um pulo) *Reptile versão MK1<br />
        Stage Fatality: Frente - Baixo - Baixo - Defesa<br />
        Babality: Trás - Frente - Trás - Baixo - [X] (a um pulo)<br />
  <br />
  <strong>Kitana</strong><br />
        Fan Toss: Baixo - Frente - Quadrado (pode ser no ar)<br />
        Cimaraise: Trás - Trás - Triângulo<br />
        Cutting Fan: Baixo - Frente - Triângulo<br />
        Square Boost: Baixo - Trás - Quadrado<br />
        Pretty Kick: Baixo - Trás - [X]<br />
        Fake Out Kick: Baixo - Trás - Bolinha<br />
        X-Ray Move Fan-Tastic: L2 + R2<br />
        Fatality 1 &gt; Fan Opener: Baixo - Baixo - Trás - Frente - Triângulo (a um passo)<br />
        Fatality 2 &gt; Splitting Headache: Frente - Baixo - Frente - Trás - [X] (a um passo)<br />
        Stage Fatality: Frente - Baixo - Baixo - [X]<br />
        Babality: Frente - Baixo - Frente - Bolinha (a um pulo)<br />
  <br />
  <strong>Johnny Cage</strong><br />
        Low Forceball: Baixo - Frente - Triângulo<br />
        High Forceball: Baixo - Trás - Triângulo<br />
        Flip Kick: Baixo - Trás - [X]<br />
        Shadow Kick: Trás - Frente - Bolinha<br />
        Nut Punch: Trás - Baixo - Quadrado<br />
        X-Ray Move Ball Buster: L2 + R2<br />
        Fatality 1 &gt; Heads Up!: Frente - Frente - Trás - Baixo - [X] (encostado)<br />
        Fatality 2 &gt; And the Winner Is...: Baixo - Frente - Baixo - Frente - Bolinha (a um passo)<br />
        Stage Fatality: Baixo - Trás - Frente - Defesa<br />
        Babality: Frente - Trás - Frente - Bolinha (a um pulo)<br />
  <br />
  <strong>Jade</strong><br />
        Boomerang: Baixo - Frente - Quadrado<br />
        Boomerang Up: Baixo - Trás - Quadrado<br />
        Boomerang Down: Baixo - Frente - [X]<br />
        Shadow Kick: Baixo - Frente - Bolinha<br />
        Shadow Flash: Trás - Frente - [X]<br />
        Staff Overhead: Baixo - Trás - Triângulo<br />
        Staff Grab: Baixo - Frente - Triângulo<br />
        X-Ray Move Staff Buster: L2 + R2<br />
        Fatality 1 &gt; Head-a-Rang: Cima - Cima - Baixo - Frente - Quadrado (tela toda)<br />
        Fatality 2 &gt; Half Mast: Trás - Baixo - Trás - Baixo - Bolinha (a um passo)<br />
        Stage Fatality: Trás - Frente - Baixo - Defesa<br />
        Babality: Baixo - Baixo - Frente - Baixo - Bolinha (a um pulo)<br />
  <br />
  <strong>Mileena</strong><br />
        Sai Blast: Trás - Frente - 1 (pode ser no ar)<br />
        Teleport Drop: Frente - Frente - [X] (pode ser no ar)<br />
        Leaping Neckbite: Trás - Frente - Triângulo<br />
        Ball Roll: Trás - Baixo - Bolinha<br />
        X-Ray Move Femme Fatale: L2 + R2<br />
        Fatality 1 &gt; Be Mine: Trás - Frente - Trás - Frente - Triângulo (a um pulo)<br />
        Fatality 2 &gt; Rip Off: Trás - Frente - Trás - Baixo - [X] (a um pulo)<br />
        Stage Fatality: Baixo - Baixo - Baixo - Quadrado<br />
        Babality: Baixo - Baixo - Frente - Trás - Triângulo (a um pulo)<br />
  <br />
  <strong>Nightwolf</strong><br />
        Shoulder: Frente - Frente - Bolinha<br />
        Lightning: Baixo - Trás - [X]<br />
        Arrow Shot: Baixo - Trás - Quadrado<br />
        Relect: Baixo - Trás - Triângulo<br />
        Axe Swing: Baixo - Frente - Quadrado<br />
        Choke: Baixo - Frente - Triângulo<br />
        X-Ray Move Ancestors Call: L2 + R2<br />
        Fatality 1 &gt; Little Off the Top: Baixo - Frente - Baixo - Trás - Bolinha (a um pulo)<br />
        Fatality 2 &gt; Ascension: Baixo - Baixo - Frente - Trás - Quadrado (a um passo)<br />
        Stage Fatality: Baixo - Baixo - Baixo - Defesa<br />
        Babality: Frente - Trás - Frente - Trás - Quadrado (a um pulo)<br />
  <br />
  <strong>Cyrax</strong><br />
        Bomb (Close): Trás - Trás - Bolinha<br />
        Bomb (Medium): Frente - Frente - Bolinha<br />
        Bomb (Far) Trás - Trás - Frente - Bolinha<br />
        Net: Trás - Trás - [X]<br />
        Teleport: Baixo - Trás - Quadrado<br />
        Buzzsaw: Trás - Frente - Triângulo<br />
        Reverse Kick: Baixo - Frente - [X]<br />
        Ragdoll: Baixo - Frente - [X]+R1<br />
        Anti-Air: Baixo - Frente - Quadrado (oponente precisa estar no ar)<br />
        X-Ray Move Cyberdriver: L2 + R2<br />
        Fatality 1 &gt; Buzz Kill: Frente - Baixo - Frente - Trás - Triângulo (encostado)<br />
        Fatality 2 &gt; Nothing But Net: Trás - Baixo - Trás - Frente - Quadrado (a um pulo)<br />
        Stage Fatality: Baixo - Cima - Defesa<br />
        Babality: Baixo - Frente - Trás - Triângulo (a um pulo)<br />
  <br />
  <strong>Noob Saibot</strong><br />
        Ghostball: Baixo - Frente - Quadrado<br />
        Blackhole (Above): Baixo - Trás - Triângulo<br />
        Blackhole (Behind): Baixo - Frente - Triângulo<br />
        Blackhole (In Front): Baixo - Frente - Trás - Triângulo<br />
        Teleport Slam: Baixo - Cima<br />
        Shadow Charge: Baixo - Frente - [X]<br />
        Shadow Cimaknee: Baixo - Trás - [X]<br />
        Shadow Slide: Trás - Frente - Bolinha<br />
        X-Ray Move Together Again: L2 + R2<br />
        Fatality 1 &gt; Make a Wish: Trás - Frente - Trás - Baixo - Bolinha (a um pulo)<br />
        Fatality 2 &gt; As One: Baixo - Baixo - Trás - Baixo - Defesa (a um pulo)<br />
        Stage Fatality: Baixo - Frente - Trás - [X]<br />
        Babality: ??.<br />
  <br />
  <strong>Smoke</strong><br />
        Shake: Trás - Frente - Quadrado (Segure o quadrado para carregar)<br />
        Smoke Cloud: Baixo - Trás - Triângulo<br />
        Air Throw: Defesa (no ar)<br />
        Teleport: Baixo - Trás - Bolinha<br />
        Invisiblity: Baixo - Cima - [X]<br />
        Smoke Away: Frente - Trás - [X]<br />
        Smoke Frentes: Trás - Frente - 3<br />
        X-Ray Move Burn Out: L2 + R2<br />
        Fatality 1&gt;Smoked Out: Trás - Frente - Trás - Frente - Quadrado (a um passo)<br />
        Fatality 2 &gt; Tremor: Trás - Trás - Baixo - Frente - Triângulo (a um passo)<br />
        Stage Fatality: Frente - Cima - Cima - Quadrado<br />
        Babality: Baixo - Trás - Baixo - Frente - Baixo (a um pulo)<br />
  <br />
  <strong>Sektor</strong><br />
        Flamer Burner: Trás - Frente - Triângulo<br />
        Teleport Cimapercut: Baixo - Frente - Bolinha<br />
        Straight Missile: Trás - Frente - Quadrado<br />
        Cima Missile (Above): Baixo - Trás - [X]<br />
        Cima Missile: (Behind): Baixo - Trás - Frente - [X]<br />
        Cima Missile (In Front): Baixo - Frente - Trás - [X]<br />
        X-Ray Move Massive Missile: L2 + R2<br />
        Fatality 1 &gt; Robo-Sek: Frente - Baixo - Trás - Frente - [X] (tela toda)<br />
        Fatality 2 &gt; The Scarecrow: Baixo - Baixo - Frente - Trás - Quadrado (tela toda)<br />
        Stage Fatality: Baixo - Frente - Baixo - Defesa<br />
        Babality: Trás - Baixo - Baixo - Baixo - Bolinha (a um pulo)<br />
  <br />
  <strong>Sonya</strong><br />
        Energy Ring Blast: Trás - Frente - Triângulo<br />
        Leg Grab: Trás - Frente - Bolinha<br />
        Kiss: Baixo - Trás - Quadrado<br />
        Arc Kick: Baixo - Trás - Bolinha<br />
        Kartwheel: Baixo - Frente - [X]<br />
        Air Drop: Baixo+Bolinha (no ar)<br />
        Air Throw: Defesa (no ar)<br />
        X-Ray Move SF Beat Down: L2 + R2<br />
        Fatality 1 &gt; Scissor Split: Baixo - Baixo - Trás - Frente - Quadrado (a um pulo)<br />
        Fatality 2 &gt; Kut-Throat: Baixo - Trás - Frente - Trás - Bolinha (a um passo)<br />
        Stage Fatality: Trás - Frente - Baixo - Triângulo<br />
        Babality: Baixo - Baixo - Frente - [X] (a um pulo)<br />
  <br />
  <strong>Jax</strong><br />
        Energy Wave: Baixo - Trás - Triângulo<br />
        Dash Punch: Baixo - Frente - Triângulo<br />
        Ground Pound (Close): Baixo - Trás - [X]<br />
        Ground Pound (Medium): Baixo - Frente - [X]<br />
        Ground Pounds (Far): Baixo - Trás - Frente - [X]<br />
        Gotcha Grab: Baixo - Frente - Quadrado<br />
        Air Gotcha Grab: Baixo - Trás - Quadrado<br />
        Overheard Smash: Baixo - Cima - Bolinha<br />
        Back Breaker: Defesa (no ar)<br />
        X-Ray Move Briggs Bash: L2 + R2<br />
        Fatality 1 &gt; Smash and Grab: Trás - Frente - Frente - Trás - Triângulo (encostado)<br />
        Fatality 2 &gt; Three Points!: Frente - Frente - Trás - Baixo - [X] (a um passo)<br />
        Stage Fatality: Baixo - Frente - Baixo - Quadrado<br />
        Babality: Baixo - Baixo - Baixo - 3 (a um pulo)<br />
  <br />
  <strong>Kano</strong><br />
        Ball: Frente - Baixo - Trás - Frente<br />
        Baixo Ball: Frente - Baixo - Trás - Frente (no ar)<br />
        Cima Ball: Baixo - Frente - Triângulo<br />
        Choke: Baixo - Frente - Quadrado<br />
        Knife Throw: Baixo - Trás - Triângulo<br />
        Air Throw: Defesa (no ar)<br />
        X-Ray Move Just the Tip: L2 + R2<br />
        Fatality 1 &gt; Heartbreak: Trás - Baixo - Trás - Frente - Quadrado (a um passo)<br />
        Fatality 2 &gt; Eat Your Heart Out: Baixo - Baixo - Frente - Trás - Bolinha (a um passo)<br />
        Stage Fatality: Cima - Cima - Trás - [X]<br />
        Babality: Frente - Baixo - Baixo - [X] (a um pulo)<br />
  <br />
  <strong>Stryker</strong><br />
        Baton Sweep: Baixo - Trás - Bolinha<br />
        High Grenade Toss: Baixo - Trás - Triângulo<br />
        Low Grenade Toss: Baixo - Trás - Quadrado<br />
        Gun Shot: Trás - Frente - Quadrado<br />
        Roll Toss: Trás - Frente - Bolinha<br />
        X-Ray Move Busted: L2 + R2<br />
        Fatality 1 &gt; Time Served: Frente - Baixo - Frente - [X] (a um passo)<br />
        Fatality 2 &gt; Have a Blast: Baixo - Frente - Baixo - Frente - Defesa (a um passo)<br />
        Stage Fatality: Frente - Cima - Cima - Bolinha<br />
        Babality: Baixo - Frente - Baixo - Trás - Triângulo (a um pulo)<br />
  <br />
  <strong>Shang Tsung</strong><br />
        Fire Skull: Trás - Trás - Quadrado<br />
        Cima Skull (Above): Baixo - Cima - Triângulo<br />
        Cima Skull (Behind): Baixo - Frente - Triângulo<br />
        Cima Skull (In Front): Baixo - Trás - Triângulo<br />
        Ground Skull (Close): Baixo - Cima - Bolinha<br />
        Ground Skull (Medium): Baixo - Trás - Bolinha<br />
        Ground Skull (Far): Baixo - Frente - Bolinha<br />
        Soul Steal: Frente - Baixo - Trás - [X]<br />
        X-Ray Move Your Soul is Mine: L2 + R2<br />
        Fatality 1 &gt; Bang Bang!: Trás - Baixo - Frente - [X] (a um passo)<br />
        Fatality 2 &gt; Identity Theft: Baixo - Baixo - Trás - Baixo - Triângulo (a um pulo)<br />
        Stage Fatality: Cima - Cima - Trás - Triângulo<br />
        Babality: Baixo - Trás - Baixo - [X] (a um pulo)<br />
  <br />
  <strong>Baraka</strong><br />
        Blade Charge: Baixo - Frente - Triângulo<br />
        Spark: Baixo - Trás - Triângulo<br />
        Chop Chop: Trás - Trás - Quadrado<br />
        Blade Spin: Baixo - Trás - [X]<br />
        Slices: Baixo - Frente - Quadrado<br />
        X-Ray Move Nail and Impale: L2 + R2<br />
        Fatality 1 &gt; Cima the Middle: Trás - Frente - Baixo - Frente - Quadrado (a um passo)<br />
        Fatality 2 &gt; Take a Spin: Frente - Frente - Baixo - Baixo - [X] (a um passo)<br />
        Stage Fatality: Baixo - Baixo - Baixo - Baixo - [X]<br />
        Babality: Frente - Trás - Frente - 4 (a um pulo)<br />
  <br />
  <strong>Kabal</strong><br />
        Gas Blast: Trás - Trás - Quadrado (pode ser feito no ar)<br />
        Nomad Dash: Trás - Frente - Bolinha<br />
        Buzzsaw: Trás - Trás - [X]<br />
        Tornado Slam: Baixo - Trás - Triângulo<br />
        X-Ray Move Kabal''''s Deep: L2 + R2<br />
        Fatality 1 &gt; Hook Up: Trás - Frente - Trás - Frente - Triângulo (a um passo)<br />
        Fatality 2 &gt; It Takes Guts: Baixo - Baixo - Trás - Frente - Defesa (a um passo)<br />
        Stage Fatality: Baixo - Baixo - Bolinha<br />
        Babality: Frente - Baixo - Trás - [X] (a um pulo)<br />
  <br />
  <strong>Raiden</strong><br />
        Lightning: Baixo - Trás - Quadrado<br />
        Electrocute: Baixo - Frente - Triângulo<br />
        Electric Fly: Trás - Frente - [X] (pode ser feito no ar)<br />
        Teleport: Baixo - Cima<br />
        Vicinity Blast: Baixo - Trás - Triângulo<br />
        X-Ray Move Shock Therapy: L2 + R2<br />
        Fatality 1 &gt; Just a Scratch: Baixo - Frente - Baixo - Frente - Quadrado (a um pulo)<br />
        Fatality 2 &gt; Transplant: Trás - Frente - Frente - Baixo - Bolinha (a um passo)<br />
        Stage Fatality: Baixo - Baixo - Baixo - Triângulo<br />
        Babality: Baixo - Trás - Baixo - Bolinha (a um pulo)<br />
  <br />
  <strong>Sheeva</strong><br />
        Fireball: Baixo - Frente - Triângulo<br />
        Jump Stomp: Baixo - Cima<br />
        Ground Pound: Baixo - Trás - Bolinha<br />
        Grab N Punch: Trás - Frente - [X]<br />
        Anti-Air Grab: Baixo - Frente - Quadrado<br />
        Low Grab: Baixo - Trás - [X]<br />
        X-Ray Move Slam Dance: L2 + R2<br />
        Fatality 1 &gt; Stripped Down: Frente - Baixo - Baixo - Frente - Quadrado (a um passo)<br />
        Fatality 2 &gt; Lend a Hand: Frente - Trás - Frente - Trás - Bolinha (a um passo)<br />
        Stage Fatality: Baixo - Baixo - Baixo - Baixo - Quadrado<br />
        Babality: Baixo - Baixo - Baixo - Trás - Bolinha (a um pulo)<br />
  <br />
  <strong>Cyber Sub-Zero</strong><br />
        Iceball: Baixo - Frente - Quadrado<br />
        Ice Bomb (Close): Trás - Trás - [X]<br />
        Ice Bomb (Medium): Frente - Frente - [X]<br />
        Ice Bomb (Far): Trás - Trás - Frente - [X]<br />
        Slide: Trás - Frente - Bolinha<br />
        Teleport: Baixo - Trás - Quadrado (pode ser feito no ar)<br />
        Ice Parry: Baixo - Trás - Triângulo<br />
        Divekick (Close): Baixo - [X] (no ar)<br />
        Divekick (Far): Baixo - Bolinha (no ar)<br />
        X-Ray Move Cool Down: L2 + R2<br />
        Fatality 1 &gt; Kold Fusion: Baixo - Trás - Baixo - Frente - Triângulo (a um pulo)<br />
        Fatality 2 &gt; Brain Freeze: Baixo - Baixo - Trás - Baixo - Quadrado (a um pulo)<br />
        Stage Fatality: Baixo - Baixo - Cima - Defesa<br />
        Babality: Baixo - Trás - Frente - Defesa (a um pulo)<br />
  <br />
  <strong>Quan Chi</strong><br />
        Skeletal Boost: Baixo - Trás - Bolinha<br />
        Ground Burst (Close): Baixo - Trás - Quadrado<br />
        Ground Burst (Medium): Baixo - Frente - Quadrado<br />
        Ground Burst (Far): Baixo - Trás - Frente - Quadrado<br />
        Skull Ball: Baixo - Trás - Triângulo<br />
        Sky Drop: Baixo - Trás - [X] (pode ser feito no ar)<br />
        Trance: Trás - Frente - [X]<br />
        X-Ray Move Amulet Assault: L2 + R2<br />
        Fatality 1 &gt; Beat Down: Frente - Frente - Baixo - Baixo - Quadrado (a um passo)<br />
        Fatality 2 &gt; On Your Knees: Baixo - Frente - Baixo - Frente - Bolinha (a um passo)<br />
        Stage Fatality: Trás - Frente - Baixo - Triângulo<br />
        Babality: Frente - Baixo - Trás - Triângulo (a um pulo)<br />
  <br />
  <strong>Kratos</strong><br />
        Appolo''''s Bow: Baixo - Frente - Triângulo<br />
        Head of Helios: Baixo - Trás - Triângulo<br />
        Hermes Dash: Trás - Frente - Bolinha<br />
        Golden Fleece: Baixo - Trás - Quadrado<br />
        Zeus Rage: Baixo - Trás - [X]<br />
        X-Ray Move: L2 + R2<br />
        Fatality 1 &gt; Baixo - Baixo - Trás - Frente - Triângulo (encostado)<br />
        Fatality 2 &gt; Baixo - Trás - Baixo - Frente - Quadrado (a um pulo)<br />
        Stage Fatality: Baixo - Baixo - Baixo - [X]<br />
        Babality: Baixo - Frente - Trás - Triângulo (a um pulo)</p>
@stop


      
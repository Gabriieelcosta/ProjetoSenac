<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Contato | Bikcraft</title>
  <meta name="description" content="Contato.">

  <link rel="icon" href="{{ url ('./assets/favicon.svg')}}" type="image/svg+xml">
  <link rel="preload" href="{{ url ('./assets/css/style.min.css')}}" as="style">
  <link rel="stylesheet" href="{{ url ('./assets/css/style.min.css')}}">
  <script>document.documentElement.classList.add('js');</script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&family=Poppins:wght@400;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<body id="contato">
  <header class="header-bg">
    <div class="header container">
      <a href="./">
        <img src="{{('./assets/img/bikcraft.svg')}}" alt="Bikcraft">
      </a>

      <nav aria-label="primaria">
        <ul class="header-menu font-1-m cor-0">
          <li><a href="./bicicletas.html">Bicicletas</a></li>
          <li><a href="./seguros.html">Seguros</a></li>
          <li><a href="./contato.html">Contato</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <div class="titulo-bg">
      <div class="titulo container">
        <p class="font-2-l-b cor-5">Respostas em até 24h</p>
        <h1 class="font-1-xxl cor-0">nosso contato<span class="cor-p1">.</span></h1>
      </div>
    </div>

    <div class="contato container">
      <section class="contato-dados" aria-label="Endereço">
        <h2 class="font-1-m cor-0">Loja Online</h2>
        <div class="contato-endereco font-2-s cor-4">
          <p>Rua Ali Perto, 35</p>
          <p>Rio de Janeiro - RJ</p>
          <p>Brasil - Terra - Vita Láctea</p>
        </div>
        <address class="contato-meios font-2-s cor-4">
          <a href="mailto:contato@bikcraft.com">contato@bikcraft.com</a>
          <a href="mailto:assistencia@bikcraft.com">assistencia@bikcraft.com</a>
          <a href="tel:+552199999999">+55 21 9999-9999</a>
        </address>
        <div class="contato-redes">
          <a href="./">
            <img src="{{('./assets/img/redes/instagram-p.svg')}}" alt="Instagram">
          </a>
          <a href="./">
            <img src="{{('./assets/img/redes/facebook-p.svg')}}" alt="Facebook">
          </a>
          <a href="./">
            <img src="{{('./assets/img/redes/youtube-p.svg')}}" alt="Youtube">
          </a>
        </div>
      </section>
      <section class="contato-formulario" aria-label="Formulário">
        <form class="form" action="{{route('contato.store')}}" method="post">
          @csrf
          <div>
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="{{old('name')}}" placeholder="Seu nome">
          
              @error('name')
                  <p><strong>{{$message}}</strong></p>
              @enderror
           
          </div>
          <div>
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" value="{{old('telefone')}}" placeholder="(21) 9999-9999">
            
            @error('telefone')
                <p><strong>{{$message}}</strong></p>
            @enderror
          
          </div>
          <div class="col-2">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="contato@email.com" required>
            
            @error('email')
                <p><strong>{{$message}}</strong></p>
            @enderror
          
          </div>
          <div class="col-2">
            <label for="mensagem">Mensagem</label>
            <textarea rows="5" id="mensagem" name="mensagem" value="{{old('mensagem')}}" placeholder="O que você precisa?"></textarea>
           
            @error('mensagem')
                <p><strong>{{$message}}</strong></p>
            @enderror
         
          </div>
          <button type="submit" class="botao col-2">Enviar Mensagem</button>
        </form>

        @if (session('info'))
            
            <script>
              alert("{{session('info')}}");
            </script>

            
        @endif
      </section>
    </div>
  </main>

  <article class="lojas container">
    <h2 class="font-1-xxl">lojas locais<span class="cor-p1">.</span></h2>
    <div class="lojas-item">
      <img src="{{('./assets/img/lojas/rj.jpg')}}" alt="mapa marcando o endereço em Rua Ali Perto, 25 - Rio de Janeiro - RJ">
      <div class="lojas-conteudo">
        <h3 class="font-1-xl">Rio de Janeiro</h3>
        <div class="lojas-dados font-2-s cor-8">
          <p>Rua Ali Perto, 25</p>
          <p>Rio de Janeiro - RJ</p>
        </div>
        <div class="lojas-dados font-2-s cor-8">
          <a href="mailto:rj@bikcraft.com">rj@bikcraft.com</a>
          <a href="tel:+552199999999">+55 21 9999-9999</a>
        </div>
        <p class="lojas-tempo font-1-s"><img src="{{('./assets/img/icones/horario.svg')}}" alt="">08-18h de seg à dom</p>
      </div>
    </div>

    <div class="lojas-item">
      <img src="{{('./assets/img/lojas/sp.jpg')}}" alt="mapa marcando o endereço em Rua Ali Perto, 25 - São Paulo - SP">
      <div class="lojas-conteudo">
        <h3 class="font-1-xl">São Paulo</h3>
        <div class="lojas-dados font-2-s cor-8">
          <p>Rua Ali Perto, 25</p>
          <p>São Paulo - SP</p>
        </div>
        <div class="lojas-dados font-2-s cor-8">
          <a href="mailto:sp@bikcraft.com">sp@bikcraft.com</a>
          <a href="tel:+551199999999">+55 11 9999-9999</a>
        </div>
        <p class="lojas-tempo font-1-s"><img src="{{('./assets/img/icones/horario.svg')}}" alt="">08-18h de seg à dom</p>
      </div>
    </div>
  </article>

  <footer class="footer-bg">
    <div class="footer container">
      <img src="{{('./assets/img/bikcraft.svg')}}" alt="Bikcraft">
      <div class="footer-contato">
        <h3 class="font-2-l-b cor-0">Contato</h3>
        <ul class="font-2-m cor-5">
          <li><a href="tel:+552199999999">+55 21 9999-9999</a></li>
          <li><a href="mailto:contato@bikcraft.com">contato@bikcraft.com</a></li>
          <li>Rua Ali Perto, 42 - Botafogo</li>
          <li>Rio de Janeiro - RJ</li>
        </ul>
        <div class="footer-redes">
          <a href="./">
            <img src="{{('./assets/img/redes/instagram.svg')}}" alt="Instagram">
          </a>
          <a href="./">
            <img src="{{('./assets/img/redes/facebook.svg')}}" alt="Facebook">
          </a>
          <a href="./">
            <img src="{{('./assets/img/redes/youtube.svg')}}" alt="Youtube">
          </a>
        </div>
      </div>
      <div class="footer-informacoes">
        <h3 class="font-2-l-b cor-0">Informações</h3>
        <nav>
          <ul class="font-1-m cor-5">
            <li><a href="./bicicletas.html">Bicicletas</a></li>
            <li><a href="./seguros.html">Seguros</a></li>
            <li><a href="./contato.html">Contato</a></li>
            <li><a href="./termos.html">Termos e Condições</a></li>
          </ul>
        </nav>
      </div>
      <p class="footer-copy font-2-m cor-6">Bikcraft © Alguns direitos reservados.</p>
    </div>
  </footer>
  <script></script>
  <script src="./js/script.js"></script>
  <script src="./js/formulario.js"></script>
</body>

</html>
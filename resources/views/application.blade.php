<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <link rel="preload" href="/img/plano.jpg" as="image">
  <link rel="stylesheet" href="/css/styles.css">
  <title>RESGISTRE-SE</title>
</head>
<body>
    <main>
        @if (session('msg'))
        <p class="msgError">{{session('msg')}}</p>
        @endif
        @yield('content')
    </main>
 <div class="form">
  <div class="nav">
    <a class="link" href="/register">Registre-se</a>
    <a class="link" href="/login">Login</a>
  </div>
  <form action="/register/candidate" method="POST">
    @csrf
    <label for="name">Nome:</label>
    <input class="field" type="text" name="name" id="name" placeholder="Informe seu nome completo" required>

    <label for="email">Email:</label>
    <input class="field" type="email" name="email" id="email" placeholder="example@email.com" required>

    <label for="username">Usuário:</label>
    <input class="field" type="text" name="username" id="username" placeholder="example_user" required>

    <label for="password">Senha:</label>
    <input class="field" type="password" name="password" id="password" required>

    <input class="submit" type="submit" value="Enviar">
  </form>
  </div> 
  <script>
    const links = document.querySelectorAll('a');
    const selectedLink = localStorage.getItem('selectedLink');
    links.forEach(link => {
      link.addEventListener('click', () => {
        links.forEach(l => l.classList.remove('selected'));
        link.classList.add('selected');
        localStorage.setItem('selectedLink', link.getAttribute('href'));
      });
      if (link.getAttribute('href') === selectedLink) {
        link.classList.add('selected');
      }
    });

  </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <link rel="preload" href="/img/plano.jpg" as="image">
  <link rel="stylesheet" href="/css/styles.css">
  <title>LOGIN</title>
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
  <form action="{{ url('/login') }}" method="POST">
    @csrf
    
    <label class="field-login-label" for="username">Email:</label>
    <input class="field-login-input" type="email" name="email" id="email" placeholder="Informe seu email.." required>

    <label class="field-login-label" for="password">Senha:</label>
    <input class="field-login-input" type="password" name="password" id="password" required>

    <input class="submit" type="submit" value="Entrar">
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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <link rel="preload" href="/img/plano.jpg" as="image">
  <link rel="stylesheet" href="/css/styles.css">
  <title>STATUS CANDIDATURA</title>
</head>
<body>
  <div id="background-form" class="form">
    <div id="hi">
      <p class="hi">Olá, {{$name}}</p>
      <p class="username">{{$username}}</p>
      <form action="/logout" method="POST">
        @csrf
        <button class="logout" type="submit">Sair</button>
      </form>
      
    </div>
    <h2>Status do Processo Seletivo</h2>
    <div class="limit">
      <table id="status">
          <tr title="{{$userCount}} participantes cadastrados." class="phases">
            <td> <img src="/img/svg/concluido.svg" alt="Etapa concluída">   Cadastro</td>
          </tr>
          <tr class="phases">
            <td> <img src="/img/svg/bloqueado.svg" alt="Etapa bloqueada">   Currículo</td>
          </tr>
          <tr class="phases">
            <td ><img src="/img/svg/bloqueado.svg" alt="Etapa bloqueada">   Avaliação técnica</td>
          </tr>
          <tr class="phases">
            <td> <img src="/img/svg/bloqueado.svg" alt="Etapa bloqueada">   Entrevista</td>
          </tr>
          <tr class="phases">
            <td><img src="/img/svg/bloqueado.svg" alt="Etapa bloqueada">    Oferta</td>
          </tr>
        </table>
    </div>
      <p class="attention">Em breve será liberado para o envio de currículos, FIQUE ATENTO AO SEU EMAIL!</p>
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
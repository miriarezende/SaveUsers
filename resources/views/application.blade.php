<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/styles.css">
  <title>Save Users</title>
</head>
<main>
        @if (session('msg'))
        <p class="msgError">{{session('msg')}}</p>
        @endif
        @yield('content')
    </main>
<body>
 <div class="form">
  <form action="/register/candidate" method="POST">
    @csrf
    <label for="name">Nome:</label>
    <input type="text" name="name" id="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="username">Nome do usuário:</label>
    <input type="text" name="username" id="username" required>

    <label for="password">Senha:</label>
    <input type="password" name="password" id="password" required>

    <input class="submit" type="submit" value="Enviar">
  </form>
 </div>
</body>
</html>
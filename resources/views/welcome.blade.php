<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test SL</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
        <!--CSS-->
        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <main>
        @if (session('msg'))
        <p class="msg">{{session('msg')}}</p>
        @endif
        @yield('content')
    </main>
    <body>
        <div class="general">
            <div class="title">
                <h1>101 Vagas <br>Abertas para <br>Programadores</h1>
            </div>
            <div class="container">
                <p class="text">Descubra uma oportunidade única para programadores 
                    talentosos! Nosso programa de contratação oferece uma seleção 
                    rigorosa e eficiente, avaliando suas habilidades técnicas através
                    de testes práticos e entrevistas detalhadas. Além disso, 
                    proporcionamos benefícios exclusivos, como programas de treinamento
                    personalizados e mentoria de profissionais experientes. Junte-se
                    a nós e faça parte de uma equipe de programadores apaixonados
                    por desafios e projetos inovadores.</p>
                <a class="link" href="/register"><button type="button" class="button">Candidate-se</button></a>
            </div>
        </div>
    </body>
</html>
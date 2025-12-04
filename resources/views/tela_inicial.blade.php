<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>A Lenda de Orion</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap');
        body {
            background-color: #3b3d40;
            background: url(background.png) no-repeat center center/cover;
        }
        h1 {
            text-align: center;
            font-family: Cinzel Decorative;
            color: #ddcd5a;
            line-height: 2.5;
            font-size: 60px;
        }

        .btn {
            width: 300px;
            height: 100px;
            font-weight: bold;
            font-size: 30px;
            border: none;
            border-radius: 1000px;
            color: #ffffff;
            background: #fff;
            transition: all 0.4s ease-in-out;
            box-shadow: inset 0 0 20px #000;
            cursor: pointer;
            background-color: #000000;
            justify-content: center;
            align-items: center;
            display: flex;
            margin: 25px auto; 
        }

        .btn:hover {
            background: #f6b34f;
            color: #1d2834;
            transform: scale(1.1);
            box-shadow: 0 0 20px #f6b34f;
        }

        .titulo {
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="titulo">
        <h1>Ashes of the Eternal</h1>
    </div>
    
    <button id="btn-novo-jogo" class="btn">Novo Jogo</button>
    
    <button id="btn-continuar-jogo" class="btn">Continuar Jogo</button>
    <button id="btn-creditos" class="btn">Créditos</button>

    <script>
        const botaoNovoJogo = document.getElementById('btn-novo-jogo');
        if (botaoNovoJogo) {
            botaoNovoJogo.addEventListener('click', function() {
                window.location.href = "{{ route('login') }}"; 
            });
        }
        const botaoContinuar = document.getElementById('btn-continuar-jogo');
        if (botaoContinuar) {
            botaoContinuar.addEventListener('click', function() {
                window.location.href = "{{ route('combat') }}"; 
            });
        }
        const botaoCreditos = document.getElementById('btn-creditos');
        if (botaoCreditos) {
            botaoCreditos.addEventListener('click', function() {
                window.location.href = "{{ route('creditos') }}"; 
            });
        }
    </script>
</body>
</html>
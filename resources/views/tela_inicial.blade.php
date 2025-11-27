<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>A Lenda de Orion</title>
    <style>
        body {
            background-color: #3b3d40;
        }
        h1 {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            color: #ca01ca;
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
            background-color: #5d015d;
            justify-content: center;
            align-items: center;
            display: flex;
            margin: 25px auto; 
        }

        .btn:hover {
            background: #c300c3;
            color: #1d2834;
            transform: scale(1.1);
            box-shadow: 0 0 20px #c300c3;
        }

        .titulo {
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="titulo">
        <h1>A Lenda de Orion</h1>
    </div>
    
    <button id="btn-novo-jogo" class="btn">Novo Jogo</button>
    
    <button id="btn-continuar-jogo" class="btn">Continuar Jogo</button>
    <button class="btn">Configurações</button>
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
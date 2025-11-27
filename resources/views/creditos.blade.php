<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creditos</title>
</head>
<style>
    body {
        background-color: #3b3d40;
    }
    
    h1 {
            font-family: Arial, Helvetica, sans-serif;
            display: block;
            text-align: center;
            color: #ca01ca ;
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
            margin-top: 140px;
        }

        .btn:hover {
            background: #c300c3;
            color: #1d2834;
            transform: scale(1.1);
            box-shadow: 0 0 20px #c300c3;
        }

        .topo {
            display: block;
            align-items: center;
            align-content: center;
        }

        .textocredito {
            font-family: Arial, Helvetica, sans-serif;
            display: block;
            text-align: center;
            color:  #ff00ffb1;
            font-size: 20px;
        }

        .texto {
            text-align: center;
            color: #cbcbcb;
            margin-top: 100px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 25px;
        }

        .texto2 {
            text-align: center;
            color: #cbcbcb;
            margin-top: 50px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 25px;
        }
</style>
<body>
    <div>
        <div class="topo">
            <h1>A Lenda de Orion</h1>
            <p class="textocredito">Feito por Rafael Massao e Yago Molina</p>
        </div>
    </div>
    <div>
        <div class="texto">
            Código feito por: <br>
            Yago Molina
        </div>
        <div class="texto2">
            Design feito por: <br>
            Rafael Massao
        </div>
    </div>
    <div>
        <button id="btn-voltar" class="btn">Voltar</button>
    </div>
</body>
<script>
    const botaoVoltar = document.getElementById('btn-voltar');
        if (botaoVoltar) {
            botaoVoltar.addEventListener('click', function() {
                window.location.href = "{{ route('telainicial') }}";
            });
        }
</script>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creditos</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Caudex:ital,wght@0,400;0,700;1,400;1,700&display=swap');
    body {
        background-color: #3b3d40;
        background: url(background.png) no-repeat center center/cover;
    }
    h1 {
        text-align: center;
        font-family: Caudex;
        color: #ddcd5a;
        line-height: 2.5;
        font-size: 45px;}

    .btn {
            width: 285px;
            height: 90px;
            font-weight: bold;
            font-size: 25px;
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
            margin-top: 140px;
        }

        .btn:hover {
            background: #f6b34f;
            color: #1d2834;
            transform: scale(1.1);
            box-shadow: 0 0 20px #f6b34f;
        }

        .topo {
            display: block;
            align-items: center;
            align-content: center;
        }

        .textocredito {
            font-family: Caudex;
            display: block;
            text-align: center;
            color:  #f6d575;
            font-size: 20px;
        }

        .texto {
            text-align: center;
            color: #e2e2e2;
            margin-top: 100px;
            font-family: Caudex;
            font-size: 25px;
        }

        .texto2 {
            text-align: center;
            color: #cbcbcb;
            margin-top: 50px;
            font-family: Caudex;
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
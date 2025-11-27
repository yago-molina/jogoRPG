<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>A Lenda de Orion Batalha</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap');
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #ce8cea;
            background: url(background.png) no-repeat center center/cover;
        }

        h1 {
            color:white;
            font-family: Cinzel Decorative;
        }
        #status, #inimigo-status {
            margin: 15px auto;
            padding: 10px;
            border: 2px solid #333;
            width: 300px;
            background-color: #fff;
            border-radius: 8px;
        }
        #menu button {
            margin: 5px;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        #mensagens {
            margin-top: 20px;
            min-height: 60px;
            font-weight: bold;
            white-space: pre-line;
            color: white;
        }
        #batalha {
            margin-top: 20px;
        }
        #personagem, #inimigo {
            display: inline-block;
            margin: 20px;
        }
        #personagem img, #inimigo img {
            width: 128px;
            height: 128px;
            image-rendering: pixelated;
        }
    </style>
</head>
<body>
    <h1>A Lenda de Orion</h1>

    <div id="status">
        <p id="vida">Vida: 100</p>
        <p id="mana">Mana: 50</p>
        <p id="nivel">Nível: 1</p>
        <p id="xp">XP: 0 / 50</p>
    </div>

    <div id="batalha">
        <div id="personagem">
            <img id="sprite-personagem" src="{{ asset('Personagem_espada.png') }}" alt="Personagem">
        </div>

        <div id="inimigo">
            <img id="sprite-inimigo" src="{{ asset('zumbi.png') }}" alt="Inimigo">
        </div>
    </div>

    <div id="inimigo-status">
        <p id="inimigoNome">Inimigo: Zumbi</p>
        <p id="inimigoVida">Vida: 50</p>
    </div>

    <div id="menu">
        <button onclick="atacar()">Atacar</button>
        <button onclick="magia()">Magia (15 mana)</button>
        <button onclick="cura()">Cura (10 mana)</button>
    </div>
    <div id="menu">
        <button id="btn-voltar">voltar</button>
    </div>

    <div id="mensagens"></div>

    </body>
    <script>
        const botaoVoltar = document.getElementById('btn-voltar');
        if (botaoVoltar) {
            botaoVoltar.addEventListener('click', function() {
                window.location.href = "{{ route('telainicial') }}";
            });
        }
    
        let vida = 100;
        let mana = 50;
        let nivel = 1;
        let xp = 0;
        let xpParaProximoNivel = 50;

        const inimigos = [
            {nome: "Zumbi", vida: 50, dano: [3, 7], xp: 45, sprite: "zumbi.png"},
            {nome: "Esqueleto", vida: 80, dano: [8, 15], xp: 90, sprite: "esqueleto.png"},
        ];

        let inimigoAtual = {...inimigos[0]};

        function atualizarStatus() {
            document.getElementById('vida').textContent = "Vida: " + vida;
            document.getElementById('mana').textContent = "Mana: " + mana;
            document.getElementById('nivel').textContent = "Nível: " + nivel;
            document.getElementById('xp').textContent = "XP: " + xp + " / " + xpParaProximoNivel;
            document.getElementById('inimigoNome').textContent = "Inimigo: " + inimigoAtual.nome;
            document.getElementById('inimigoVida').textContent = "Vida: " + inimigoAtual.vida;
            document.getElementById('sprite-inimigo').src = inimigoAtual.sprite;
        }

        function gerarDano(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

        function ganharXP(valor) {
            xp += valor;
            document.getElementById('mensagens').textContent += `\nVocê ganhou ${valor} XP!`;
            if (xp >= xpParaProximoNivel) {
                nivel++;
                xp -= xpParaProximoNivel;
                xpParaProximoNivel = Math.floor(xpParaProximoNivel * 1.5);
                vida += 30;
                mana += 15;
                document.getElementById('mensagens').textContent += `\nParabéns! Você subiu para o nível ${nivel}!`;
            }
        }

        function proximoInimigo() {
            const indice = inimigos.indexOf(inimigoAtual);
            if (indice + 1 < inimigos.length) {
                inimigoAtual = {...inimigos[indice + 1]};
                document.getElementById('mensagens').textContent += `\nUm ${inimigoAtual.nome} aparece!`;
                atualizarStatus();
            } else {
                document.getElementById('mensagens').textContent += "\nVocê derrotou todos os inimigos!";
            }
        }

        function animaAtaque() {
            const sprite = document.getElementById('sprite-personagem');
            sprite.src = "Personagem_espada.png";
            setTimeout(() => { sprite.src = "Personagem_espada.png"; }, 500);
        }

        function animaDano() {
            const sprite = document.getElementById('sprite-personagem');
            sprite.style.transform = "translateX(-10px)";
            setTimeout(() => { sprite.style.transform = "translateX(0)"; }, 200);
        }

        function atacar() {
            if (vida <= 0 || inimigoAtual.vida <= 0) return;

            animaAtaque();
            const dano = gerarDano(10, 20);
            inimigoAtual.vida -= dano;
            document.getElementById('mensagens').textContent = `Você atacou e causou ${dano} de dano!`;

            if (inimigoAtual.vida <= 0) {
                inimigoAtual.vida = 0;
                ganharXP(inimigoAtual.xp);
                proximoInimigo();
            } else {
                inimigoAtaca();
            }

            atualizarStatus();
        }

        function magia() {
            if (mana < 15) {
                document.getElementById('mensagens').textContent = "Mana insuficiente!";
                return;
            }
            animaAtaque();
            const dano = gerarDano(20, 35);
            inimigoAtual.vida -= dano;
            mana -= 15;
            document.getElementById('mensagens').textContent = `Você lançou magia e causou ${dano} de dano!`;

            if (inimigoAtual.vida <= 0) {
                inimigoAtual.vida = 0;
                ganharXP(inimigoAtual.xp);
                proximoInimigo();
            } else {
                inimigoAtaca();
            }

            atualizarStatus();
        }

        function cura() {
            if (mana < 10) {
                document.getElementById('mensagens').textContent = "Mana insuficiente!";
                return;
            }
            const curar = gerarDano(15, 25);
            vida += curar;
            mana -= 10;
            document.getElementById('mensagens').textContent = `Você se curou ${curar} pontos de vida!`;
            inimigoAtaca();
            atualizarStatus();
        }

        function inimigoAtaca() {
            if (inimigoAtual.vida <= 0) return;
            const dano = gerarDano(...inimigoAtual.dano);
            vida -= dano;
            animaDano();
            document.getElementById('mensagens').textContent += `\n${inimigoAtual.nome} atacou e causou ${dano} de dano!`;
            if (vida <= 0) {
                vida = 0;
                document.getElementById('mensagens').textContent += `\nVocê foi derrotado...`;
            }
        }

        atualizarStatus();
    </script>
</html>
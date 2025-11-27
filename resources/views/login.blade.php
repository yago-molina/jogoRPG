<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login - A Lenda de Orion</title>
    <style>
        /* --- ESTILOS GERAIS (Igual à tela inicial) --- */
        body {
            background-color: #3b3d40;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }
        h1 {
            text-align: center;
            color: #ca01ca;
            line-height: 1.5;
            font-size: 50px;
            margin-bottom: 30px;
        }

        /* --- ESTILO DO BOTÃO --- */
        .btn {
            width: 300px;
            height: 80px;
            font-weight: bold;
            font-size: 26px;
            border: none;
            border-radius: 1000px;
            color: #ffffff;
            background: #5d015d;
            transition: all 0.4s ease-in-out;
            box-shadow: inset 0 0 20px #000;
            cursor: pointer;
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

        .titulo h1 {
             font-size: 60px;
             line-height: 2.5;
             margin-bottom: 0;
        }

        /* --- ÁREA DE LOGIN --- */
        .login-wrapper {
            width: 100%;
            max-width: 500px;
            padding: 20px;
            text-align: center; /* Centraliza tudo */
        }

        .login-container {
            background-color: rgba(93, 1, 93, 0.3); /* Roxo transparente */
            padding: 40px;
            border-radius: 30px;
            box-shadow: 0 0 30px rgba(0,0,0,0.5);
            border: 2px solid #5d015d;
        }

        .input-group {
            margin-bottom: 25px;
            text-align: left;
        }

        .input-group label {
            display: block;
            color: #ca01ca;
            font-weight: bold;
            font-size: 20px;
            margin-bottom: 10px;
            margin-left: 15px;
            text-align: center; /* Centraliza o texto "Nome do Personagem" */
        }

        .input-group input {
            width: 100%;
            padding: 15px 25px;
            border-radius: 1000px;
            border: 3px solid #5d015d;
            background-color: #1d2834;
            color: white;
            font-size: 18px;
            outline: none;
            box-sizing: border-box;
            transition: all 0.3s ease-in-out;
            text-align: center; /* Digitar no meio */
        }

        .input-group input:focus {
            border-color: #c300c3;
            box-shadow: 0 0 15px #c300c3;
        }

        .link-voltar {
            display: block;
            margin-top: 20px;
            color: #ffffff;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s;
        }
        .link-voltar:hover {
            color: #ca01ca;
        }
    </style>
</head>
<body>
    <div class="titulo">
        <h1>A Lenda de Orion</h1>
    </div>

    <div class="login-wrapper">
        <div class="login-container">
            <form action="{{ route('combat') }}" method="GET">
                
                <div class="input-group">
                    <label for="nome">Nome do Personagem</label>
                    <input type="text" id="nome" name="nome" required autofocus placeholder="Digite seu nome">
                </div>

                <button type="submit" class="btn">Iniciar</button>
            </form>
        </div>
        
        <a href="{{ url('/') }}" class="link-voltar">Voltar ao Menu</a>
    </div>

</body>
</html>
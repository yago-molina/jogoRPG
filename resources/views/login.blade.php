<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap');
        body {
            background-color: #3b3d40;
            background: url(background.png) no-repeat center center/cover;
            font-family: Cinzel Decorative;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }
        h1 {
            text-align: center;
            color: #ddcd5a;
            line-height: 1.5;
            font-size: 50px;
            margin-bottom: 30px;
        }

        .btn {
            width: 300px;
            height: 80px;
            font-weight: bold;
            font-size: 26px;
            border: none;
            border-radius: 1000px;
            color: #ffffff;
            background: #000000;
            transition: all 0.4s ease-in-out;
            box-shadow: inset 0 0 20px #000;
            cursor: pointer;
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

        .titulo h1 {
             font-size: 60px;
             line-height: 2.5;
             margin-bottom: 0;
        }
        .login-wrapper {
            width: 100%;
            max-width: 500px;
            padding: 20px;
            text-align: center;
        }

        .login-container {
            background-color: #5d45014d;
            padding: 40px;
            border-radius: 30px;
            box-shadow: 0 0 30px rgba(0,0,0,0.5);
            border: 2px solid #f6b34f;
        }

        .input-group {
            margin-bottom: 25px;
            text-align: left;
        }

        .input-group label {
            display: block;
            color: #f6b34f;
            font-weight: bold;
            font-size: 20px;
            margin-bottom: 10px;
            margin-left: 15px;
            text-align: center;
        }

        .input-group input {
            width: 100%;
            padding: 15px 25px;
            border-radius: 1000px;
            border: 3px solid #f6b34f;
            background-color: #1d2834;
            color: white;
            font-size: 18px;
            outline: none;
            box-sizing: border-box;
            transition: all 0.3s ease-in-out;
            text-align: center;
        }

        .input-group input:focus {
            border-color: #f6b34f;
            box-shadow: 0 0 15px #f6b34f;
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
            color: #ddcd5a;
        }
    </style>
</head>
<body>
    <div class="titulo">
        <h1>Ashes of the Eternal</h1>
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
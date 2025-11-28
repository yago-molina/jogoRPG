<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Configurações</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap');

    body {
        background: url(background.png) no-repeat center center/cover;
        font-family: Cinzel Decorative;
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
</style>
<body>
    <div class="login-wrapper">
        <div class="login-container">
            <form action="{{ route('combat') }}" method="GET">
                
                <div class="input-group">
                    
                </div>
</body>
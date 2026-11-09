<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticação de Usuário</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f6f9; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); width: 100%; max-width: 400px; }
        h2 { margin-bottom: 20px; color: #333; text-align: center; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; color: #666; }
        input[type="email"], input[type="password"] { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        .btn { width: 100%; background-color: #4f46e5; color: white; border: none; padding: 12px; border-radius: 4px; font-size: 16px; cursor: pointer; }
        .btn:hover { background-color: #4338ca; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Criar Conta</h2>
        <form action="/register" method="POST">
            <!-- Esquema de E-mail -->
            <div class="form-group">
                <label for="email">Endereço de E-mail:</label>
                <input type="email" id="email" name="email" placeholder="seu-email@exemplo.com" required>
            </div>
            
            <div class="form-group">
                <label for="password">Senha (mínimo 8 caracteres):</label>
                <input type="password" id="password" name="password" minlength="8" required>
            </div>

            <!-- Botão de submissão -->
            <button type="submit" class="btn">Cadastrar</button>
        </form>
    </div>
</body>
</html>
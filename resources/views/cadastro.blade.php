<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - SOGA</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>CADASTRO</h2>
            <form id="cadastroForm">
                <label for="nomeCompleto">Nome completo</label>
                <input type="text" id="nomeCompleto" name="nomeCompleto" required>

                <label for="nomeUsuario">Nome do utilizador</label>
                <input type="text" id="nomeUsuario" name="nomeUsuario" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" required>

                <label for="confirmarSenha">Confirmar senha</label>
                <input type="password" id="confirmarSenha" name="confirmarSenha" required>

                <button type="submit">Cadastrar</button>
            </form>
            <p>Já tem uma conta? <a href="/login">Entrar</a></p>
        </div>
        <div class="image-container">
            <img src="./assets/img/logo.png" alt="SOGA" style="width:50%;">
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>

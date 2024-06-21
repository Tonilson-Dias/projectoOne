<?php 
    // validação 
    // filter_input ---> filter var
    
    if(isset($_POST['bt_enviar'])){
        $nome = $_POST['nome'];
        $nome_usuario = $_POST['nomeUsuario'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confirmarSenha = $_POST['confirmarSemha'];
      

       // sanitizar
        require_once "sanitizar.php";  

        // ESCREVER OS DADOS NO VAVEGADOR 
        echo "<p>Nome: $nome</p>";
        echo "<p>E-mail: $email</p>";
    
        
        //filtros
        
        //filtros sanitizados
        require_once "filtros_sanitizados.php";

        //exibe erros
        require_once "exibe_erros.php";
      

    }
    
  
?>

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
            <p>Já tem uma conta? <a href="login.php">Entrar</a></p>
        </div>
        <div class="image-container">
            <img src="/assets/img/logo.png" alt="SOGA" style="width:50%;">
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
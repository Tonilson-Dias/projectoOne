<?php
    // fazer a conexão com a base de dados e depois fazer a cunsulta
    $email_bd = "tonilsondias3@gmail.com";
    $password_bd = '1234';

    if(isset($_POST['bt_entra'])){
        $email = $_POST['email'];
        $passeword = $_POST['senha'];
       
        //Verificar se os dados do formulário são iguas aos do banco de dados 
         
        if($email == $email_bd && $passeword == $password_bd){
            //login

            header('location: soga_principal.php');
        }else{
            // falha no login
            echo "<p>Email e/ou senha erradas!</p>";
        }// fim if verificação


    }// fim if isset


    /*
    // validação do login
    // filter_input -----> filter_var



    if(isset($_POST['bt_enviar'])){
        $email = $_POST['email'];
        $passeword = $_POST['password'];
        
        // ARRAY DE ERROS
        $erros = [];

        // sanitizar limpeza dos dados
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $passeword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_NUMBER_INT);

        // escrever os dados no navegadoer 
        echo "<p>E-mail: $email</p>";
        echo "<p>Password: $password</p>";

        // filtros sanitizados

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $erros[] = "E-email invalido";
        }
        
        if(!filter_var($passeword, FILTER_VALIDATE_INT)){
            $erros[] = "Palavra passe invalida";
        }

        //exibe erros
        
        if(!empty($erros)){
            foreach($erros as $erro){
                echo "<li>$erro</li>";
            }
        }else{
            echo "<p>Dados corretos</p>";
        }


    }
    */
?> 

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SOGA</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    
   

</head>
<body>
    <div class="container">
        <div class="image-container">
            <img src="./assets/img/logo.png" alt="SOGA"  style="width: 50%;">
        </div>
        <div class="form-container" >
            <h2>LOGIN</h2>
            <form id="loginForm" action="login.php" method="post">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" required>

                <button type="submit" name="bt_entrar">Entrar</button>
            </form>
            <a href="#" class="forgot-password">Esqueceu da senha?</a>
            <p>Não tem uma conta? <a href="./cadastro">Cadastrar</a></p>
        </div>
    </div>
    <div class="php">
        <?php 
                    
            if(isset($_POST['bt_entrar'])){
                        $email = $_POST['email'];
                        $password = $_POST['senha'];
                        
                        // ARRAY DE ERROS
                        $erros = [];
                
                        // sanitizar limpeza dos dados
                        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
                        $passeword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_NUMBER_INT);
                
                        // escrever os dados no navegadoer 
                        echo "<p>E-mail: $email</p>";
                        echo "<p>Password: $password</p>";
                
                        // filtros sanitizados
                
                        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                            $erros[] = "E-email invalido";
                        }
                        
                        if(!filter_var($passeword, FILTER_VALIDATE_INT)){
                            $erros[] = "Palavra passe invalida";
                        }
                
                        //exibe erros
                        
                        if(!empty($erros)){
                            foreach($erros as $erro){
                                echo "<li>$erro</li>";
                            }
                         }else{
                            echo "<p>Dados corretos</p>";
                }
           }

        ?>
    </div>
    <script src="Meuscript.js"></script>
</body>
</html>

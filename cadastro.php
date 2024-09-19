
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>-
    <div class="page">
       <form method="POST" action="cadastro.php" class="formLogin">
            <h1>Cadastre-se</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label>nome de usuario</label>
            <input type="text" placeholder="Digite seu usuario" autofocus="true" name="nome_usuario" />
            <label>email</label>
            <input type="email" placeholder="Digite seu e-mail" autofocus="true" name="email" />
            <label>Senha</label>
            <input type="password" placeholder="Digite seu e-mail" name="senha" />
            <input type="submit" value="Acessar" class="btn" />
            <a href="login.php">Cadastre-se</a>
        </form>
        
    </div>
    
</body>
</html>

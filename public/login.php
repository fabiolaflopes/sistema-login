<?php
defined ('CONTROL') or die('Acesso negado!');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    
    <form action="index.php?rota=login" method="post" ></form>  
        <h3>Login</h3>  
        <div>
            <label for="usuario">Usuário</label>
            <input type="text" name="usuario" id="usuario">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="text" name="senha" id="senha">
        </div>    
        <div>
            <button type="submit"Entrar>Entrar</button>
        </div>
    </form>

</body>
</html>
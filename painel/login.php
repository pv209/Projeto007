<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css" rel="stylesheet">
    <title>Painel de controle</title>
</head>
<body>
    <div class="box-login">
        <h2>Efetue o Login</h2>
        <form method="post">
            <input type="text" name="user"  placeholder="Login..."  required>
            <input type="password" name="password"  placeholder="Senha..."  required>
            <input type="submit" name="acao" value="Logar!">
        </form>
    </div><!--box-login-->
</body>
</html>
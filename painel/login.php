<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
    <link href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css" rel="stylesheet">
    
    <title>Painel de controle</title>
</head>
<body>
    <div class="box-login">
        <?php
            if(isset($_POST['acao'])){
                $user = $_POST['user'];
                $password = $_POST['password'];
                $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
                $sql->execute(array($user,$password));
                if($sql->rowCount() == 1) {
                    $info = $sql->fetch();
                     //LOGAMOS COM SUCESSO
                     $_SESSION['login'] = true;
                     $_SESSION['user'] = $user;
                     $_SESSION['password'] = $password;
                     $_SESSION['cargo'] =  $info['cargo'];
                     $_SESSION['nome'] = $info['nome'];
                     $_SESSION['img'] = $_info['img'];
                     header('Location: '.INCLUDE_PATH_PAINEL);
                     die();
                }else{
                    //falhou
                    echo '<div class="erro-box"><i class="fa fa-times"></i> Usuario ou senha incorretos!</div'; 
                }
            }

        ?>
        <h2>Efetue o Login</h2>
        <form method="post">
            <input type="text" name="user"  placeholder="Login..."  required>
            <input type="password" name="password"  placeholder="Senha..."  required>
            <input type="submit" name="acao" value="Logar!">
        </form>
    </div><!--box-login-->
</body>
</html>
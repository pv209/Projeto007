<?php
    if(isset($_GET['loggout'])){
        Painel::loggout();
    }
 ?>   

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
        <div class="menu">
            <div class="menu-wrapper">
                <div class="box-usuario">
                    <?php
                    if($_SESSION['img'] == '') {

                    ?>
                    <div class="avatar-usuario">
                        <i class="fa fa-user"></i>
                    </div><!--avatar-usuario-->
                    <?php }else { ?>
                            <div class="imagem-usuario">
                            <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>" alt="">
                            </div><!--avatar-usuario-->
                    <?php }  ?>
                    <div class="nome-usuario">
                        <p><?php echo $_SESSION['nome']; ?></p>
                        <p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
                    </div><!--nome-usuario-->
                </div><!--box-usuario-->
            </div><!--menu-wrapper-->
          
        </div><!--menu-->
        
        <header>
            <div class="center">
            <div class="menu-btn">
                <i class="fa fa-bars"></i>
            </div>
                <div class="loggout">
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><i class="fa-solid fa-right-from-bracket"></i><span>  Sair</span></a> 
                </div><!--loggout-->
                <div class="clear"></div>
            </div><!--center-->
        </header>
        <div class="clear"></div>          
        <div class="content">
            <div class="box-content left w100">

            </div><!--box-content-->       
        </div><!--content-->
  <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
  <script src="<?php echo INCLUDE_PATH_PAINEL; ?>js/main.js"></script>      
</body>
</html>
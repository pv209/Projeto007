<?php include('config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavaras chave do site">
    <meta name="description" content="Descrcao do meu website" >
    <title>Projeto 01</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/style.css"  >
</head>
<body>
    <?php
         $url = isset($_GET['url']) ? $_GET['url'] : 'home';
         switch ($url) {
            case 'depoimentos':
                echo '<target target="depoimentos" />';
                break;
            case 'servicos':
                echo '<target target="servicos" />';
                break;
         }
    ?>
    <header>
        <div class="center">
            <div class="logo left"><a href="/">Logomarca</a></div><!--logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>home">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Servicos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav> 

            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Servicos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav> 
            <div class="clear"></div>
        </div><!--center--> 
    </header>
     <?php
    
     if(file_exists('pages/'.$url.'.php')){
        include('pages/'.$url.'.php');
     }else{
        if($url != 'depoimentos' && $url != 'servicos'){
            $pagina404 = true;        
            include('pages/404.php');
        }else{
            include('pages/home.php');
        }

     }
     ?>

    <footer <?php if(isset($pagina404)  && $pagina404==true) echo 'class="fixed"' ?>>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div><!--center-->   
    </footer>
    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/myscripts.js"></script>
    <?php
    if(($url == 'contato')) {

        ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCv7xytFuJwok_3Og2HV3CrSgjKrdZOXx8&callback=console.debug&libraries=maps,marker&v=beta">
    </script>
    <script src="<?php echo INCLUDE_PATH; ?>js/mymap.js"> </script>
    <?php  } ?>
</body>
</html>
<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carrinho de Compras</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.minn.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="shortcut icon" type="image/png" href="img/uke.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 <body >
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="../tcc - dashboard/index.php"><i class="fa fa-user"></i> Dashboard </a></li>
                          
                        </ul>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="index.php"><img src="img/logo.png"></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                       <a href="cart.php">Carrinho<i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
           <nav class="navbar navbar-expand-lg navbar-light bg-light">                
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                  </li>                
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Produtos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"  class="mainmenu-area">
                      <a style="color: black; background-color: white" class="dropdown-item" href="shop.php">Celulares Novos</a>
                      <a style="color: black; background-color: white" class="dropdown-item" href="shop_usado.php">Seminovos</a>
                      <a style="color: black; background-color: white" class="dropdown-item" href="shop_acessorios.php">Acessórios</a>
                    </div>
                    </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="cart.php">Carrinho de compras<span class="sr-only">(current)</span></a>
                  </li>
                </ul>              
            </nav>
        </div>
    </div>
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Carrinho de compras</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">  
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Produtos</h2>
                        <div class="thubmnail-recent">
                            <img src="img/iphone7p.jpg" class="recent-thumb" alt="">
                            <h2><a href="shop.php">iPhone 7 Plus - Apple</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$ 1.270,00</ins>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="img/galaxyn10.jpg" class="recent-thumb" alt="">
                            <h2><a href="shop.php">Galaxy S10 - Samsung</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$ 2.849,05</ins>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="img/iphonexs.jpg" class="recent-thumb" alt="">
                            <h2><a href="shop.php">iPhone XS - Apple</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$ 6.649,00</ins>
                            </div>                             
                        </div>
                    </div>
                    
                   
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form method="post" action="#">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            
                                            
                                            <th class="product-name">Produto</th>
                                            <th class="product-price">Preço</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart_item">
                                            <?php
                                    require('conectbdtcc.php');

                                    $query = "SELECT * FROM cadpedido ORDER BY tipo ASC";
                                    $busca = mysqli_query($link, $query);

                                    while($dados = mysqli_fetch_array($busca)){
                                        $id_pedido = $dados['id_pedido'];
                                        $tipo = $dados['tipo'];
                                        $preco = $dados['preco'];
                                        echo "
                                            <td class='product-name'>
                                                <a href='shop.php'>$tipo</a> 
                                            </td>

                                            <td class='product-price'>
                                                <span class='amount'>$preco</span> 
                                            </td>   
                                        </tr>
                                         ";}
                                         ?>
                                    </tbody>
                                </table>
                            </form>
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>

<div style="margin-top: -130px; height: 400px" class="footer-top-area ">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2><a style="height: 50px">A</a><span> Bites</span></h2>
                        <div class="footer-menu">
                        <ul>
                            <p>Trabalhamos com a melhor opção de compra de celulares online através de um atendimento de qualidade. Vendemos os melhores aparelhos das principais marcas. São fabricantes renomados no mercado que o consumidor já conhece e confia.</p>
                        </ul>                        
                    </div>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title" style="height: 50px">Institucional</h2>
                        <ul>
                            <li><a href="sobre.php">Quem somos?</a></li>                           
                            <li><a href="valores.php">Nosso valores</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Serviços</h2>
                        <ul>
                            <li><a href="contato.php">Contato</a></li>
                            <li><a href="conosco.php">Trabalhe conosco</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title" style="height: 50px">Boletim de notícias</h2>
                        <p style="margin-top: 30px">Assine nosso boletim informativo e receba ofertas exclusivas que você não encontrará em nenhum outro lugar diretamente na sua caixa de entrada!</p>
                        <div class="newsletter-form">
                            <form action="res_email.php" method="POST">
                                <input type="email" placeholder="Digite seu email">
                                <input type="submit" value="Se inscrever">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area" style="height: 30px">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2020 Bites. <a href="https://www.instagram.com/pontes.vj_/" target="_blank">Vinicius Pontes</a> & <a href="https://www.instagram.com/_bizutti/" target="_blank">Igor Bizutti</a> </p>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
    <script type="text/javascript" src="js/script.slider.js"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contato</title>
    
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
    </div> 
    
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
                  <li class="nav-item">
                    <a class="nav-link" href="cart.php">Carrinho de compras</a>
                  </li>
                </ul>              
            </nav>
        </div>
    </div>
    
    <div class="slider-area">
        	<!-- Slider -->
			<form style="width: 50%; margin-top: 40px" action="res_contato.php" method="POST" name="contato">
                <h2>Contato</h2>
              <div class="form-row">
                 <div class="form-group col-sm-6">
                <label for="inputAddress">Nome</label>
                <input type="text" class="form-control" id="inputAddress" name="nome">
              </div>
              <div class="form-group col-sm-6">
                <label for="inputAddress">Sobrenome</label>
                <input type="text" class="form-control" id="inputAddress" name="sobrenome">
              </div>
                <div class="form-group col-md-12">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" name="email">
                </div>
                
              </div>
              <div class="form-group">
                <label for="inputAddress">Endereço</label>
                <input type="text" class="form-control" id="inputAddress" name="endereco">
              </div>
              
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity">Cidade</label>
                  <input type="text" class="form-control" id="inputCity" name="cidade">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputState">Estado</label>
                  <select id="inputState" class="form-control" name="estado">
                    <option selected>Escolher...</option>
                    <option>AC</option>
                    <option>AL</option>
                    <option>AP</option>
                    <option>AM</option>
                    <option>BA</option>
                    <option>CE</option>
                    <option>ES</option>
                    <option>GO</option>
                    <option>MA</option>
                    <option>MT</option>
                    <option>MS</option>
                    <option>MG</option>
                    <option>PA</option>
                    <option>PB</option>
                    <option>PR</option>
                    <option>PE</option>
                    <option>PI</option>
                    <option>RJ</option>
                    <option>RN</option>
                    <option>RS</option>
                    <option>RO</option>
                    <option>RR</option>
                    <option>SC</option>
                    <option>SP</option>
                    <option>SE</option>
                    <option>TO</option>
                    <option>DF</option>

                  </select>
                </div>
                <div class="form-group col-md-12">
                <label for="exampleFormControlTextarea1">Sua mensagem</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mensagem"></textarea>
              </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
              
              
            </form>
    </div> <!-- End product widget area -->
   <div style="height: 400px; margin-top: 40px" class="footer-top-area ">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2><a class="footer-wid-title" style="height: 50px">O</a><span> Bites</span></h2>
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
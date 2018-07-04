<!DOCTYPE html>
<html lang="pt-br" class="no-js">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Author Meta -->
        <meta name="author" content="codepixer">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>BPMax</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!-- CSS -->
        <link rel="stylesheet" href="{{ URL::asset('css/linearicons.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/nice-select.css') }}">                  
        <link rel="stylesheet" href="{{ URL::asset('css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">

        <!-- favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('img/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ URL::asset('img/favicon/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ URL::asset('img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>

        <!-- header -->
        <header id="header" id="home">
            <div class="container">
                <div class="row header-top align-items-center">
                    <div class="col-lg-4 col-sm-4 menu-top-left"></div>
                    <div class="col-lg-4 menu-top-middle justify-content-center d-flex">
                        <a href="index.html">
                            <img class="img-fluid imglogo" src="{{ URL::asset('img/logo-bpmax.png') }}" alt=""> 
                        </a>                            
                    </div>
                    <div class="col-lg-4 col-sm-4 menu-top-right"></div>
                </div>
            </div>  
            <hr>
            <div class="container"> 
                <div class="row align-items-center justify-content-center d-flex">
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li class="menu-active"><a href="#home">Home</a></li>
                            <li><a href="#solucao">Solução</a></li>
                            <li><a href="#services">Serviços</a></li>                         
                            <li><a href="#components">Componentes</a></li>
                            <li><a href="#team">Equipe</a></li>
                            <li><a href="#">Ruídos</a></li>
                            <li><a href="#">Login</a></li>
                        </ul>
                    </nav>              
                </div>
            </div>
        </header>
        <!-- fim header -->

        <!-- fonteudo -->
        @yield('content-common')
        <!-- fim fonteudo -->

        <!-- footer -->      
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <img class="img-fluid imglogo" src="img/logo-bpmax.png" alt="">
                            <p class="text-justify mt-20">
                                Lorem ipsum dolor sit amet, lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Mapa do site</h4>
                            
                            <div class="footer-links-frame">
                                <a href="#"><i class="fas fa-arrow-right"></i> Home</a>
                                <a href="#"><i class="fas fa-arrow-right"></i> Solução</a>
                                <a href="#"><i class="fas fa-arrow-right"></i> Serviços</a>
                                <a href="#"><i class="fas fa-arrow-right"></i> Componentes</a>
                                <a href="#"><i class="fas fa-arrow-right"></i> Equipe</a>
                                <a href="#"><i class="fas fa-arrow-right"></i> Ruídos</a>
                                <a href="#"><i class="fas fa-arrow-right"></i> Login</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Parcerias</h4>

                            <div class="footer-links-frame">
                                <a href="https://www.fiap.com.br/" target="_blank"><i class="fas fa-arrow-right"></i> FIAP</a>
                                <a href="http://www.bp.org.br/" target="_blank"><i class="fas fa-arrow-right"></i> Beneficência Portuguesa</a>
                            </div>
                        </div>
                    </div>                      
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Contato</h4>
                            <p>Se tiver qualquer dúvida, não hesite em mandar sua mensagem:</p>

                            <div class="d-flex flex-row" id="mc_embed_signup">
                                <a href="contato.html" class="genric-btn primary btn-footer">Ir para página de contato</a>
                            </div>
                        </div>
                    </div>                      
                </div>

                <hr class="hr-footer mb-0 mt-10">

                <div class="footer-bottom row text-center">
                    <p class="footer-text m-0 col-lg-12">
                        Copyright &copy; <script>document.write(new Date().getFullYear());</script> - Todos os direitos reservados | Desenvolvido pela Equipe BPMax
                    </p>
                </div>
            </div>
        </footer>   
        <!-- fim footer -->

        <script src="{{ URL::asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="{{ URL::asset('js/vendor/bootstrap.min.js') }}"></script>          
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="{{ URL::asset('js/easing.min.js') }}"></script>            
        <script src="{{ URL::asset('js/hoverIntent.js') }}"></script>
        <script src="{{ URL::asset('js/superfish.min.js') }}"></script> 
        <script src="{{ URL::asset('js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script> 
        <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>          
        <script src="{{ URL::asset('js/jquery.sticky.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.nice-select.min.js') }}"></script>            
        <script src="{{ URL::asset('js/parallax.min.js') }}"></script>  
        <script src="{{ URL::asset('js/waypoints.min.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.counterup.min.js') }}"></script>          
        <script src="{{ URL::asset('js/mail-script.js') }}"></script>   
        <script src="{{ URL::asset('js/main.js') }}"></script>  

        <script type="text/javascript">
            $(function(){
                $("#btn-home").click(function (event) {
                    event.preventDefault();
                    var idElemento = $(this).attr("href");
                        var deslocamento = $(idElemento).offset().top;
                    $('html, body').animate({ scrollTop: deslocamento }, 'slow');
                });
              });
        </script>
    </body>
</html>
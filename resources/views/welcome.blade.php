<!DOCTYPE html>
<html lang="pt-br" class="no-js">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Author Meta -->
        <meta name="author" content="giocavallari">
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
        <header id="header" id="navbar">
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
                            <li><a href="#home">Home</a></li>
                            <li><a href="#solucao">Solução</a></li>
                            <li><a href="#services">Serviços</a></li>                         
                            <li><a href="#components">Componentes</a></li>
                            <li><a href="#team">Equipe</a></li>
                            <li><a href="{{route('ruidos')}}">Ruídos</a></li>
                            <li><a href="{{route('login')}}">Login</a></li>
                        </ul>
                    </nav>              
                </div>
            </div>
        </header>
        <!-- fim header -->

        <!-- banner -->
        <section class="banner-area relative pb-30" id="home">
            <div class="overlay overlay-bg"></div>      
            <div class="container">
                <div class="row fullscreen d-flex align-items-center justify-content-start">
                    <div class="banner-content col-lg-12 col-md-12">
                        <h1 class="text-uppercase">
                            Robô BPMax                  
                        </h1>
                        <p class="text-white text-uppercase text-bold pt-20 pb-20">
                            Projeto desenvolvido por alunos FIAP em parceria com a Beneficência Portuguesa
                        </p>
                        <a href="#solucao" id="btn-home" class="genric-btn primary btn-home">Conheça nosso projeto</a>
                    </div>                                              
                </div>
            </div>
        </section>
        <!-- fim banner --> 

        <!-- soluções -->
        <section class="offer-area pt-40 pb-30" id="solucao">
            <div class="container"> 
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-40 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Nossa solução</h1>
                            <p>Solução para o problema apresentado pela Beneficência Portuguesa</p>
                        </div>
                    </div>
                </div>                                  
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6">
                        <div class="solution-frame">
                            <img class="solution-image" src="img/robo.jpg" style="width: 470px" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p class="mt-3">
                            Para solucionar o problema apresentado pela BP, desenvolvemos o BPMax. &nbsp; O BPMax é um robô que fará a ronda nos leitos do hospital para detectar os altos niveis de ruído e identificar os causadores. Ele possui o formato de ambulância para ser visualmente mais amigável e compativel com o ambiente.
                        </p>
                        <br>
                        <p>
                            Ao fazer a ronda, o BPMax vai captar os colaboradores que fazem os ruídos e enviar suas informações para um banco de dados. Com esse banco, tais dados podem ser organizados para consulta posteriormente, identificando quem faz mais e menos barulho. Dessa forma, é possivel agir mais precisamente para que o som ambiente fique dentro do limite.
                        </p>
                    </div>                                          
                </div>
            </div>  
        </section>
        <!-- fim soluções -->

        <!--serviços -->
        <section class="offer-area section-gap" id="services">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-40 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Nossos serviços</h1>
                            <p>Serviços oferecidos pela nossa solução</p>
                        </div>
                    </div>
                </div>                                          
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-offer">
                            <i class="fas fa-microphone-alt icon-services"></i>
                            <h4>Medir quantidade de ruído</h4>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-offer">
                            <i class="fas fa-lightbulb icon-services"></i>
                            <h4>Emissões de alerta</h4>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-offer">
                            <i class="fas fa-user-edit icon-services"></i>
                            <h4>Dados dos colaboradores</h4>
                        </div>
                    </div>                                              
                </div>

                <div class="row mt-30">
                    <div class="col-lg-4">
                        <div class="single-offer">
                            <i class="fas fa-tags icon-services"></i>
                            <h4>Tags RFID</h4>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-offer">
                            <i class="fas fa-gamepad icon-services"></i>
                            <h4>Gamificação</h4>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-offer">
                            <i class="fas fa-clock icon-services"></i>
                            <h4>Acesso em tempo real</h4>
                        </div>
                    </div>                                              
                </div>
            </div>  
        </section>
        <!-- fim serviços -->   

        <!-- componentes -->
        <section class="schedule-area section-gap" id="components">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-40 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Componentes</h1>
                            <p>Orçamento dos componentes usados para a construção e funcionamento do robô</p>
                        </div>
                    </div>
                </div>                      
                <div class="row">
                    <div class="table-wrap col-lg-12">
                        <table class="schdule-table table table-bordered align-items-center">
                            <thead class="thead-light">
                                <tr>
                                    <th class="head" scope="col">Produto</th>
                                    <th class="head" scope="col">Quantidade</th>
                                    <th class="head" scope="col">Preço unitário (R$)</th>
                                    <th class="head" scope="col">Subtotal (R$)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="name" scope="row">Arduino Uno</th>
                                    <td class="name" scope="row">2</td>                     
                                    <td class="name" scope="row">56,00</td>                     
                                    <td class="name" scope="row">112,00</td>                 
                                </tr>

                                <tr>
                                    <th class="name" scope="row">Motores</th>
                                    <td class="name" scope="row">4</td>                     
                                    <td class="name" scope="row">17,80</td>                     
                                    <td class="name" scope="row">71,20</td>                 
                                </tr>

                                <tr>
                                    <th class="name" scope="row">Rodas</th>
                                    <td class="name" scope="row">4</td>                     
                                    <td class="name" scope="row">16,50</td>                     
                                    <td class="name" scope="row">66,00</td>                 
                                </tr>               

                                <tr>
                                    <th class="name" scope="row">Microfone MAX4466</th>
                                    <td class="name" scope="row">1</td>                     
                                    <td class="name" scope="row">30,00</td>                     
                                    <td class="name" scope="row">30,00</td>                 
                                </tr>

                                <tr>
                                    <th class="name" scope="row">ESP-8266</th>
                                    <td class="name" scope="row">1</td>                     
                                    <td class="name" scope="row">32,00</td>                     
                                    <td class="name" scope="row">32,00</td>                 
                                </tr>

                                <tr>
                                    <th class="name" scope="row">HC-05</th>
                                    <td class="name" scope="row">1</td>                     
                                    <td class="name" scope="row">36,90</td>                     
                                    <td class="name" scope="row">36,90</td>                 
                                </tr>

                                <tr>
                                    <th class="name" scope="row">Sensor infravermelho 4 sondas</th>
                                    <td class="name" scope="row">1</td>                     
                                    <td class="name" scope="row">25,00</td>                     
                                    <td class="name" scope="row">25,00</td>                 
                                </tr>

                                <tr>
                                    <th class="name" scope="row">Interruptor</th>
                                    <td class="name" scope="row">1</td>                     
                                    <td class="name" scope="row">6,50</td>                     
                                    <td class="name" scope="row">6,50</td>                 
                                </tr>

                                <tr>
                                    <th class="name" scope="row">Kit de cabos</th>
                                    <td class="name" scope="row">2</td>                     
                                    <td class="name" scope="row">10,00</td>                     
                                    <td class="name" scope="row">20,00</td>                 
                                </tr>

                                <tr>
                                    <th class="name" scope="row">Kit de resistores</th>
                                    <td class="name" scope="row">1</td>                     
                                    <td class="name" scope="row">10,00</td>                     
                                    <td class="name" scope="row">10,00</td>                 
                                </tr>

                                <tr>
                                    <th class="name" scope="row">L239B</th>
                                    <td class="name" scope="row">1</td>                     
                                    <td class="name" scope="row">34,80</td>                     
                                    <td class="name" scope="row">34,80</td>                 
                                </tr>

                                <tr>
                                    <th class="name" scope="row">Bateria LIPO 2S 5000mAh</th>
                                    <td class="name" scope="row">1</td>                     
                                    <td class="name" scope="row">150,00</td>                     
                                    <td class="name" scope="row">150,00</td>                 
                                </tr>

                                <tr>
                                    <th class="name" scope="row">Carregador para bateria LIPO</th>
                                    <td class="name" scope="row">1</td>                     
                                    <td class="name" scope="row">45,90</td>                     
                                    <td class="name" scope="row">45,90</td>                 
                                </tr>

                                <tr>
                                    <th class="name" scope="row">Tablet</th>
                                    <td class="name" scope="row">1</td>                     
                                    <td class="name" scope="row">270,00</td>                     
                                    <td class="name" scope="row">270,00</td>                 
                                </tr>

                                <tr>
                                    <th class="name" scope="row">Kit chassi</th>
                                    <td class="name" scope="row">1</td>                     
                                    <td class="name" scope="row">70,00</td>                     
                                    <td class="name" scope="row">70,00</td>                 
                                </tr>

                                <tr>
                                    <th class="name" scope="row">HC-SR04</th>
                                    <td class="name" scope="row">1</td>                     
                                    <td class="name" scope="row">15,00</td>                     
                                    <td class="name" scope="row">15,00</td>                 
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="4" class="total" scope="row">TOTAL &nbsp; R$ 995,30</th>                 
                                </tr>
                            </tfoot>
                        </table>                            
                    </div>
                </div>
            </div>  
        </section>
        <!-- fim componentes -->

        <!-- equipe -->
        <section class="team-area section-gap pb-40" id="team">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-40 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Nossa equipe</h1>
                            <p>Pessoas responsáveis pela idealização e realização do robô</p>
                        </div>
                    </div>
                </div>                      
                <div class="row justify-content-center d-flex align-items-center">
                    <div class="col-md-2 single-team">
                        <div class="thumb">
                            <img class="img-fluid" src="img/team/pedro.jpg" alt="">
                            <div class="align-items-center justify-content-center d-flex">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="meta-text mt-30 text-center">
                            <h4>Pedro Henrique</h4>
                            <p>Analista Técnico</p>                                         
                        </div>
                    </div>

                    <div class="col-md-2 single-team">
                        <div class="thumb">
                            <img class="img-fluid" src="img/team/joba.jpg" alt="">
                            <div class="align-items-center justify-content-center d-flex">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="meta-text mt-30 text-center">
                            <h4>Giovanni</h4>
                            <p>Analista Desenvolvedor</p>                   
                        </div>
                    </div>

                    <div class="col-md-2 single-team">
                        <div class="thumb">
                            <img class="img-fluid" src="img/team/edilson.jpg" alt="">
                            <div class="align-items-center justify-content-center d-flex">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="meta-text mt-30 text-center">
                            <h4>Edilson</h4>
                            <p>Gerende de Projetos</p>                                          
                        </div>
                    </div>  

                    <div class="col-md-2 single-team">
                        <div class="thumb">
                            <img class="img-fluid" src="img/team/gustavo.jpg" alt="">
                            <div class="align-items-center justify-content-center d-flex">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="meta-text mt-30 text-center">
                            <h4>Gustavo</h4>
                            <p>Analista Desenvolvedor</p>                   
                        </div>
                    </div>

                    <div class="col-md-2 single-team">
                        <div class="thumb">
                            <img class="img-fluid" src="img/team/vitor.jpg" alt="">
                            <div class="align-items-center justify-content-center d-flex">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="meta-text mt-30 text-center">
                            <h4>Vitor</h4>
                            <p class="font-team">Analista Técnico</p>                   
                        </div>
                    </div>                                                                  
                </div>
            </div>  
        </section>
        <!-- fim equipe -->

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
                  var cotaMenu   = $('#navbar').height();
                  var deslocamento = $(idElemento).offset().top - cotaMenu - 130;
                  $('html, body').animate({ scrollTop: deslocamento }, 'slow');
                });
              });
        </script>
    </body>
</html>
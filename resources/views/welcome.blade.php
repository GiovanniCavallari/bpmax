@extends('layouts.common')

@section('content-common')

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
                    <a href="#offer" id="btn-home" class="genric-btn primary btn-home">Conheça nosso projeto</a>
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
                        <img class="solution-image" src="https://static.vecteezy.com/system/resources/previews/000/108/504/non_2x/vector-ambulances.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sem felis, laoreet a tincidunt eget, placerat eget sapien. Etiam ut fringilla massa, vitae convallis augue. Ut ipsum ex, hendrerit in risus nec, molestie tempus purus. Vestibulum eget erat sit amet libero porta vestibulum.
                    </p>
                    <br>
                    <p>
                        Praesent nibh justo, faucibus malesuada urna id, viverra posuere magna. Praesent rutrum felis eu sollicitudin euismod. Fusce sed consectetur est. Ut et posuere risus. Nullam tortor risus, tempus sit amet nunc tincidunt, vehicula consequat ante. Cras sagittis accumsan varius. Praesent ac lorem nec erat gravida viverra eu ut odio. Sed facilisis vehicula libero. Morbi cursus sapien non neque volutpat, sed consequat tortor venenatis. Ut pellentesque ac justo in tincidunt. Nunc id lorem at est finibus suscipit nec a nunc. Duis lobortis sed quam in aliquet.
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
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore 
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-offer">
                        <i class="fas fa-lightbulb icon-services"></i>
                        <h4>Emissões de alerta</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore 
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-offer">
                        <i class="fas fa-user-edit icon-services"></i>
                        <h4>Dados dos colaboradores</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        </p>
                    </div>
                </div>                                              
            </div>

            <div class="row mt-30">
                <div class="col-lg-4">
                    <div class="single-offer">
                        <i class="fas fa-tags icon-services"></i>
                        <h4>Tags RFID</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore 
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-offer">
                        <i class="fas fa-gamepad icon-services"></i>
                        <h4>Gamificação</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore 
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-offer">
                        <i class="fas fa-clock icon-services"></i>
                        <h4>Acesso em tempo real</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        </p>
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
                                <th class="head" scope="col">Preço unitário</th>
                                <th class="head" scope="col">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="name" scope="row">Fitness Aero</th>
                                <td class="name" scope="row">10.00 02.00</td>                     
                                <td class="name" scope="row">10.00 02.00</td>                     
                                <td class="name" scope="row">10.00 02.00</td>                 
                            </tr>

                            <tr>
                                <th class="name" scope="row">Fitness Aero</th>
                                <td class="name" scope="row">10.00 02.00</td>                     
                                <td class="name" scope="row">10.00 02.00</td>                     
                                <td class="name" scope="row">10.00 02.00</td>                 
                            </tr>

                            <tr>
                                <th class="name" scope="row">Fitness Aero</th>
                                <td class="name" scope="row">10.00 02.00</td>                     
                                <td class="name" scope="row">10.00 02.00</td>                     
                                <td class="name" scope="row">10.00 02.00</td>                 
                            </tr>

                            <tr>
                                <th class="name" scope="row">Fitness Aero</th>
                                <td class="name" scope="row">10.00 02.00</td>                     
                                <td class="name" scope="row">10.00 02.00</td>                     
                                <td class="name" scope="row">10.00 02.00</td>                 
                            </tr>

                            <tr>
                                <th class="name" scope="row">Fitness Aero</th>
                                <td class="name" scope="row">10.00 02.00</td>                     
                                <td class="name" scope="row">10.00 02.00</td>                     
                                <td class="name" scope="row">10.00 02.00</td>                 
                            </tr>               
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="4" class="total" scope="row">TOTAL &nbsp; R$ 644,91</th>                 
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

@endsection
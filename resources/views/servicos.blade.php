@extends('layouts.common')

@section('content-common')

<!--serviços -->
<section class="offer-area section-gap" id="services">
    <div class="container pb-20">
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

@endsection
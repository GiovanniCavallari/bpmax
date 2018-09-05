@extends('layouts.common')

@section('content-common')

<!-- equipe -->
<section class="team-area section-gap pb-40 pb-mobile" id="team">
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
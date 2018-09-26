@extends('layouts.common')

@section('content-common')

<!--ruidos -->
<section class="offer-area section-gap pb-mobile" id="services">
    <div class="container pb-20">
        
    	<div class="row d-flex justify-content-center">
			<div class="menu-content pb-40 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Nivel de ruído ambiente</h1>
				</div>
			</div>
		</div>  

		<div class="row justify-content-center d-flex align-items-center">
			<div class="col-md-12 text-center">
				<div id="label-dblevel" class="label-dblevel {{$label}}">
					<h1 class="title text-dblevel">{{round($measure->decibels, 2)}} dB</h1>
				</div>
			</div>
		</div>

    </div>  
</section>
<!-- fim ruidos -->

@endsection
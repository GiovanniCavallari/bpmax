@extends('layouts.admin')

@section('content-admin')

<!-- titulo -->
<header class="page-header">
	<div class="container-fluid">
		<h2 class="no-margin-bottom">Gerenciar robôs</h2>
	</div>
</header>
<!-- fim titulo -->

<!-- formulario-->
<section class="forms"> 
	<div class="container-fluid">
		<div class="row">

			<div class="col-lg-12">

				@if(Session::has('mensagem_sucesso'))
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					{{ Session::get('mensagem_sucesso') }}
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				@endif

				<div class="card">

					<div class="card-header d-flex align-items-center">
						<h3 class="h4">Cadastrar robô</h3>
					</div>

					<div class="card-body">

						<form class="form-horizontal" action="{{ route('config.submit') }}" method="post">
							@csrf

							<div class="row">
								<div class="form-group col-md-12">
									<label class="form-control-label">Ala</label>
									<div class="select">
										<select name="wing_id" class="form-control">
											@foreach($wings as $wing)
												<option value="{{$wing->id}}">{{$wing->nome}}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-md-12">
									<label class="form-control-label">Status</label>
									<div class="select">
										<select name="power" class="form-control">
											<option value="1">Ligado</option>
											<option value="0">Desligado</option>
										</select>
									</div>
								</div>
							</div>

							<div class="line"></div>
							<div class="form-group row col-md-12 text-center">
								<div class="col-md-12">
									<a href="{{ route('config') }}" style="color: #fff" class="btn btn-secondary col-md-2">
										Voltar
									</a>
									<button type="submit" class="btn btn-primary col-md-4">Cadastrar</button>
								</div>
							</div>

						</form>
						

					</div>

				</div>
			</div>

		</div>
	</div>
</section>

@endsection
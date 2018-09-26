@extends('layouts.admin')

@section('content-admin')

<!-- titulo -->
<header class="page-header">
	<div class="container-fluid">
		<h2 class="no-margin-bottom">Gerenciar alas do hospital</h2>
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
						<h3 class="h4">{{$button}} ala</h3>
					</div>

					<div class="card-body">

						@if(Request::is('*/editar'))
							<form class="form-horizontal" action="{{ url('admin/alas/'.$wing->id.'/update') }}" method="post">
								@csrf

								<div class="row">
									<div class="form-group col-md-12">
										<label for="nome" class="form-control-label">Nome</label>
										<input id="nome" type="text" name="nome" class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" value="{{ $wing->nome }}">
										@if ($errors->has('nome'))
									       <small class="help-block-none helpform mt-1" style="color: red">
												{{ $errors->first('nome') }}
											</small>
									    @endif
									</div>
								</div>

								<div class="row">
									<div class="form-group col-md-12">
										<label for="description" class="form-control-label">Descrição</label>
										<input id="description" type="text" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" value="{{ $wing->description }}">
										@if ($errors->has('description'))
									       <small class="help-block-none helpform mt-1" style="color: red">
												{{ $errors->first('description') }}
											</small>
									    @endif
									</div>
								</div>

								<div class="line"></div>
								<div class="form-group row col-md-12 text-center">
									<div class="col-md-12">
										<a href="{{ route('admin.alas.listar') }}" style="color: #fff" class="btn btn-secondary col-md-2">
											Cancelar
										</a>
										<button type="submit" class="btn btn-primary col-md-4">{{$button}}</button>
									</div>
								</div>

							</form>
						@else
							<form class="form-horizontal" action="{{route('admin.alas.submit')}}" method="post">
								@csrf

								<div class="row">
									<div class="form-group col-md-12">
										<label for="nome" class="form-control-label">Nome</label>
										<input id="nome" type="text" name="nome" class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" value="{{ old('nome') }}" autofocus>
										@if ($errors->has('nome'))
									       <small class="help-block-none helpform mt-1" style="color: red">
												{{ $errors->first('nome') }}
											</small>
									    @endif
									</div>
								</div>

								<div class="row">
									<div class="form-group col-md-12">
										<label for="description" class="form-control-label">Descrição</label>
										<input id="description" type="text" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" value="{{ old('description') }}">
										@if ($errors->has('description'))
									       <small class="help-block-none helpform mt-1" style="color: red">
												{{ $errors->first('description') }}
											</small>
									    @endif
									</div>
								</div>

								<div class="line"></div>
								<div class="form-group row col-md-12 text-center">
									<div class="col-md-12">
										<a href="{{ route('admin.alas.listar') }}" style="color: #fff" class="btn btn-secondary col-md-2">
											Voltar
										</a>
										<button type="submit" class="btn btn-primary col-md-4">{{$button}}</button>
									</div>
								</div>

							</form>
						@endif

					</div>

				</div>
			</div>

		</div>
	</div>
</section>

@endsection
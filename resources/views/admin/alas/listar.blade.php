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
						<h3 class="h4">Alas cadastradas</h3>
					</div>

					<div class="card-body">
						<div class="table-responsive table-hover">
							<table class="table text-center">
								<thead>
									<tr>
										<th>Nome</th>
										<th>Data de Cadastro</th>
										<th>Ações</th>
									</tr>
								</thead>
								<tbody>

									@foreach($wings as $wing)
									<tr>
										<td class="linetable borderbottom">{{$wing->nome}}</td>
										<td class="linetable borderbottom">{{$wing->created_at->format('d/m/Y')}}</td>
										<td class="linetable borderbottom">
											<a href="{{$wing->id}}/editar" class="btn btn-sm btn-outline-primary">
												Editar
											</a>
										</td>
									</tr>
									@endforeach

								</tbody>
							</table>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
</section>

@endsection
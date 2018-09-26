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
						<h3 class="h4">Robôs cadastrados</h3>
					</div>

					<div class="card-body">
						<div class="table-responsive table-hover">
							<table class="table text-center">
								<thead>
									<tr>
										<th>ID</th>
										<th>Ala</th>
										<th>Status</th>
										<th>Ações</th>
									</tr>
								</thead>
								<tbody>

									@foreach($devices as $device)

									@php
										if($device->power == 0){
											$strpower = 'Desligado';
										}
										else{
											$strpower = 'Ligado';
										}
									@endphp

									<tr>
										<td class="linetable borderbottom">{{$device->id}}</td>

										<td class="linetable borderbottom">{{$device->nome}}</td>
										
										<td class="linetable borderbottom">{{$strpower}}</td>
										<td class="linetable borderbottom">
											<a href="configuration/{{$device->id}}/editar" class="btn btn-sm btn-outline-primary">
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
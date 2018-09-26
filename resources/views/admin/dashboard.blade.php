@extends('layouts.admin')

@section('content-admin')

<!-- titulo -->
<header class="page-header">
	<div class="container-fluid">
		<h2 class="no-margin-bottom">Painel de Controle</h2>
	</div>
</header>
<!-- fim titulo -->

<!-- estatísticas -->
<section class="dashboard-counts no-padding-bottom">
	<div class="container-fluid">
		<div class="row bg-white has-shadow">
			<!-- Item -->
			<div class="col-xl-3 col-sm-6">
				<div class="item d-flex align-items-center">
					<div class="icon bg-violet"><i class="fa fa-user-md"></i></div>
					<div class="title"><span style="font-size: 15px; font-weight: 600">25 Colaboradores</span>
						<div class="progress">
							<div role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- Item -->
			<div class="col-xl-3 col-sm-6">
				<div class="item d-flex align-items-center">
					<div class="icon bg-red"><i class="fa fa-robot"></i></div>
					<div class="title"><span style="font-size: 15px; font-weight: 600">1 robô BPMax</span>
						<div class="progress">
							<div role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- Item -->
			<div class="col-xl-3 col-sm-6">
				<div class="item d-flex align-items-center">
					<div class="icon bg-green"><i class="fa fa-briefcase-medical"></i></div>
					<div class="title"><span style="font-size: 15px; font-weight: 600">1 ala de hospital</span>
						<div class="progress">
							<div role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- Item -->
			<div class="col-xl-3 col-sm-6">
				<div class="item d-flex align-items-center">
					<div class="icon bg-orange"><i class="fa fa-users"></i></div>
					<div class="title"><span style="font-size: 15px; font-weight: 600">10 Usuários</span>
						<div class="progress">
							<div role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- fim estatísticas -->

<!-- graficos ruídos -->
<section class="charts no-padding-bottom">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="line-chart-example card no-margin-bottom">
					<div class="card-header d-flex align-items-center">
						<h3 class="h4">Pontuação dos colaboradores</h3>
					</div>
					<div class="card-body">
						<canvas id="barChart1"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- graficos ruídos -->

<!-- robos -->
<section class="tables margintopupdates no-padding-bottom">   
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header d-flex align-items-center">
						<h3 class="h4">Robôs cadastrados recentemente</h3>
					</div>
					<div class="card-body">
						<div class="col-lg-6">
							<div class="line-chart-example card no-margin-bottom">
								<div class="card-body">
									<canvas id="barChart2"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- fim robos -->

<!-- alas -->
<section class="tables no-padding-bottom pt-3">   
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header d-flex align-items-center">
						<h3 class="h4">Alas cadastradas recentemente</h3>
					</div>
					<div class="card-body">
						<div class="table-responsive table-hover">
							<table class="table text-center">
								<thead>
									<tr>
										<th>Nome</th>
										<th>Data de cadastro</th>
										<th>Ações</th>
									</tr>
								</thead>
								<tbody>
									<tr class="borderbottom">
										<td class="linetable">Ala dos idosos</td>
										<td class="linetable">13/04/2018 - 09:12</td>
										<td>
											<a href="" class="btn btn-sm btn-outline-primary">
												Detalhes
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- fim alas -->

<!-- atividades recentes -->
<section class="tables marginactivities">   
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header d-flex align-items-center">
						<h3 class="h4">Atividades recentes</h3>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table text-center">
								<thead>
									<tr>
										<th>Data</th>
										<th>Registro</th>
										<th>Usuário</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>13/04/2018 - 09:12</td>
										<td>Login do usuário</td>
										<td>Giovanni Cavallari</td>
									</tr>
									<tr>
										<td>13/04/2018 - 09:12</td>
										<td>Login do usuário</td>
										<td>Giovanni Cavallari</td>
									</tr>
									<tr class="borderbottom">
										<td>13/04/2018 - 09:12</td>
										<td>Login do usuário</td>
										<td>Giovanni Cavallari</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- fim atividades recentes -->
@endsection
@section('scripts')
	<script type="text/javascript" src="{{ URL::asset('admin-assets/js/dashboard.js') }}"></script>
@endsection
@extends('layouts.common')

@section('content-common')

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

@endsection
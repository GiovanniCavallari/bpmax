$(document).ready(function(){
	getPontuacao(function(data){
		// ------------------------------------------------------- //
		// Bar Chart 1
		// ------------------------------------------------------ //
		var BARCHART1 = $('#barChart1');
		window.barChartHome = new Chart(BARCHART1, {
			type: 'bar',
			options:
			{
				scales:
				{
					xAxes: [{
						display: true
					}],
					yAxes: [{
						display: true
					}],
				},
				legend: {
					display: false
				}
			},
			data: {
				labels: data['nomes'],
				datasets: [
				{
					label: "Pontuação de acordo com a medição dos decibéis no período",
					backgroundColor: [
					'#44b2d7',
					'#44b2d7',
					'#44b2d7',
					'#44b2d7',
					'#44b2d7',
					'#44b2d7',
					'#44b2d7',
					'#44b2d7'
					],
					borderColor: [
					'#44b2d7',
					'#44b2d7',
					'#44b2d7',
					'#44b2d7',
					'#44b2d7',
					'#44b2d7',
					'#44b2d7',
					'#44b2d7'
					],
					borderWidth: 0,
					data: data['pontos']
				}
				]
			}
		});
	});

	setInterval(function(){
		//atualiza o gráfico através do callback da função getPontuação.
		getPontuacao(function(data){
			//substitui os dados e atualiza o gráfico
			window.barChartHome.data.labels.pop();
			window.barChartHome.data.datasets.forEach((dataset) => {
				dataset.data.pop();
			});
			window.barChartHome.update();

			window.barChartHome.data.labels.push(data['nomes']);
			window.barChartHome.data.datasets.forEach((dataset) => {
				dataset.data.push(data['pontos']);
			});
			window.barChartHome.update();
		});
	}, 5000);
});

function getPontuacao(callback){
	var url = 'admin/colaboradores/pontuacao';
	$.get(url, function(data){	
		//realiza o callback após coletar os dados e passa como parametro data		
		callback(data);
	});
}
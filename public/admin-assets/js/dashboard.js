$(document).ready(function(){
	setTimeout(function(){
		var url = 'admin/colaboradores/pontuacao';
		$.get(url, function(data){
			data = JSON.parse(data);
			//recupera json com pontuação e nomes

		});
	}, 1000);
});
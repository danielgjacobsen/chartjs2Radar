$(document).ready(function() {

	/**
	 * call the data.php file to fetch the result from db table.
	 */
	$.ajax({
		url : "http://svn.sicredi.net/sonarEvolution/chartjs2/api/data.php",
		type : "GET",
		success : function(data){
			console.log(data);
			
			var colors = ['purple', 'yellow', 'orange', 'brown', 'black'];
			var len = data.length;
			
			var ctx1 = $("#radar-chartcanvas-1");

			var datasetValue = [];
			
			for (var i=0; i<len; i++) {
				datasetValue[i] = {
					label : data[i].nome,
					backgroundColor : colors[i],
					data : [data[i].agressividade, data[i].extroversao, data[i].dominancia, data[i].exatidao, data[i].empatia, data[i].entusiasmo, data[i].multitarefas],
				}
			}
			
			var data1 = {
				labels : ["agressividade", "extroversao", "dominancia", "exatidao", "empatia", "entusiasmo", "multitarefas"],
				datasets : datasetValue
			};

			var options = {
				title : {
					display : true,
					position : "top",
					text : "Radar Chart",
					fontSize : 18,
					fontColor : "#111"
				},
				legend : {
					display : true,
					position : "bottom"
				}
			};


			var chart1 = new Chart( ctx1, {
				type : "radar",
				data : data1,
				options : options
			});


		},
		error : function(data) {
			console.log(data);
		}
	});

});
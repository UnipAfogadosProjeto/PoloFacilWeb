(function ($) {
 "use strict";
	 /*----------------------------------------*/
	/*  1.  Bar Chart
	/*----------------------------------------*/

	var ctx = document.getElementById("barchart1");

	var custo = <?php $_SESSION["Custo"];?>;
	var despesa = <?php $_SESSION["Despesa"];?>;

	var fixo = <?php $_SESSION["Fixo"];?>;
	var variavel = <?php $_SESSION["Variavel"];?>;

	var mensal = <?php $_SESSION["Mensal"];?>;
	var eventual = <?php $_SESSION["Eventual"];?>;

	var barchart1 = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["Custo", "Despesa"],
			datasets: [{
				label: 'Custo / Despesa',
				data: [custo, despesa],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				xAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}],
				yAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}]
			}
		}
	});

	var ctx = document.getElementById("barchart2");
	var barchart1 = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["Fixo", "Variável"],
			datasets: [{
				label: 'Fixo / Variável',
				data: [fixo, variavel],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				xAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}],
				yAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}]
			}
		}
	});

	var ctx = document.getElementById("barchart3");
	var barchart1 = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["Mensal", "Eventual"],
			datasets: [{
				label: 'Mensal / Eventual',
				data: [mensal, eventual],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)'
				],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				xAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}],
				yAxes: [{
					ticks: {
						autoSkip: false,
						maxRotation: 0
					},
					ticks: {
					  fontColor: "#fff", // this here
					}
				}]
			}
		}
	});	
		
})(jQuery); 

<?php
  include "koneksi.php";
  include "assets/sidebar.php";
  include "assets/footer.php";
  include "assets/header.php";
?>


<body>
	  <style type="text/css">
	body{
		
	}

	table{
		margin: 0px auto;
	}
	
</style>

 

 <body id="page-top">
    




<center>
<h2>DAFTAR JAWABAN QUESIONER<br/>- SMANESTA -</h2>
 </center>
  <?php 
	include 'koneksi.php';
	?>

	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>

	<br/>
	<br/>

 
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: [" >SATU BULAN", "> TIGA BULAN" ,"6 - 12 BULAN", "LEBIH DARI 12 BULAN","TIDAK BEKERJA"],
				datasets: [{
					label: 'SOAL SATU of votes',
					data: [  "12", "13", "29","39","21" ],
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
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>


</body
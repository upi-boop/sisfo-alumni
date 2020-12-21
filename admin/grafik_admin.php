
 <?php
  
 
  include "assets/footer.php";
  include "assets/header.php";
  include "assets/sidebar.php";
  ?>

<body>
	  <style type="text/css">
	body{
		
	}

	table{
		margin: 0px auto;
	}
	
</style>

           
            <div id="alumni" class="card text-center m-5">
              <div class="card-header bg-info text-white shadow">
                  GRAFIK OUTCOME ALUMNI 
                    </div>
                 <div class="card-body m-5">
                  <div class="chart-pie pt-9" style="width: 400px; height: 400px;  margin: 0px auto;"> 
                    <canvas id="myChart"></canvas>
                  </div>
                  <hr>
                 <center>
                <a class="btn btn-primary btn-lg" href="biodata_alumni.php" role="button">Registrasi Alumni </a><br>
                <h2 class="btn text-sm text-primary">Jika Kamu Alumni silahkan mengisi Data Diri</h2>
                  </center>
                </div>
              </div>
            </div>
          </div>

        </div>






 
  <?php 
  include 'koneksi.php';
    
      $no = 1;
      $data = mysqli_query($link,"select * from biodata");
      while($d=mysqli_fetch_array($data))
        ?>
      


 

 
  <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: ["bekerja", "kuliah" ,"lainlain"],
        datasets: [{
          label: '# of votes',
  data: [  
      <?php 
        $jumlah = mysqli_query($link,"select * from biodata where status='kerja'");
          echo mysqli_num_rows($jumlah);
          ?>,

      <?php 
        $jumlah = mysqli_query($link,"select * from biodata where status='kuliah'");
          echo mysqli_num_rows($jumlah);
          ?>,
      <?php 
        $jumlah = mysqli_query($link,"select * from biodata where status='lain'");
          echo mysqli_num_rows($jumlah);
          ?>
          ],

    backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 20,
  },
});

 </script>

   <?php
  include "footer.php";
  include "header.php";
  ?>




 
<nav class="navbar navbar-light bg-info text-white shadow">
  
    <a class="navbar-brand">SMAN 1 Rawamerta</strong></a>
    <span class="small">jl.rawamerta desa sindangkarya kec.kutawaluya kab.karawang 41358</span>

 
     
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav mx-auto">
      <a class="nav-item nav-link ml-3" href="#navbarNavAltMarkup">BERANDA <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link ml-3" href="#event">EVENT</a>
      <a class="nav-item nav-link ml-3" href="#alumni">ALUMNI</a>
       <a class="nav-item nav-link ml-3" href="#">INFORMASI</a>
    </div>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="admin/assets/img/slider1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="admin/assets/img/slider2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="admin/assets/img/slider3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>





<div class="card text-center m-5">
  <div class="card-header bg-info text-white shadow">
    TENTANG SEKOLAH
  </div>
  <div class="card-body">
    
  <p class="card-text">


tidak ada informasi pasti tetntang sekola ini karna ini hanya ilustrasi agarterlihat keren saja untuk itu saya tidak inin berpanjang lebar mengenai hal ini, namun agar terlihat menarik elemen ini harus tetap ada ,karena untuk hiasan saja jika tidak suka close saja terima kasih

</p>
  </div>
  </div>
  </div>



 <!-- Color System -->
              <div id="event" class="row m-5">
                <div class="col-lg-6 mb-4">
                  <div class="card bg-info text-white shadow">
                    <div class="card-body">
                      RAPAT ORANG TUA
                      <div class="text-right"><a href="#" class="btn btn-primary">Go somewhere</a></div>
                      <div class="text-white-50 small">#4e73df</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-info text-white shadow">
                    <div class="card-body">
                      MAULID NABI
                      <div class="text-right"><a href="#" class="btn btn-primary">Go somewhere</a></div>
                      <div class="text-white-50 small">#1cc88a</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-info text-white shadow">
                    <div class="card-body">
                      CLASS METTING
                      <div class="text-right"><a href="#" class="btn btn-primary">Go somewhere</a></div>
                      <div class="text-white-50 small">#36b9cc</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-info text-white shadow">
                    <div class="card-body">
                      MILAD SEKOLAH
                      <div class="text-right"><a href="#" class="btn btn-primary">Go somewhere</a></div>
                      <div class="text-white-50 small">#f6c23e</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-info text-white shadow">
                    <div class="card-body">
                      PERPISAHAN SEKOLAH
                      <div class="text-right"><a href="#" class="btn btn-primary">Go somewhere</a></div>
                      <div class="text-white-50 small">#e74a3b</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="card bg-info text-white shadow">
                    <div class="card-body">
                      PEMBAGIAN IJAZAH 
                        <div class="text-right"><a href="#" class="btn btn-primary">Go somewhere</a></div>
                      <div class="text-white-50 small">#858796</div>
                    </div>
                  </div>
                </div>
              </div>

            </div>


           
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




            

 <div id="fh5co-footer" style="padding-bottom: 0;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p style="font-size: 13px;">&copy;  All Rights Reserved.  <span class="" style="font-weight: 500;">Made with <i class="fa fa-heart" style="color: #333;"></i> by <a href="https://api.whatsapp.com/send?phone=+6285694603421&text=Hi WEB Develover">Contact Develover</a> </span></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="gototop js-top">
                <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
            </div>



  
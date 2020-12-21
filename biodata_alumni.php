

 <?php
  
 
  include "footer.php";
  include "header.php";
  ?>

 <body id="page-top">
 
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

<?php
include "koneksi.php";
?>
 

          


<form method="POST" action="action_bio.php">
  
  <div class="row m-5">
    <div class="col-md-12">
      <div class="alert alert-primary">
       
      
        <div class="form-group">
          <label>Nama Lengkap</label>
          <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
        </div>
        <div class="form-group">
          <label>Jurusan</label>
           <select name="jurusan" class="form-control">
          <option values="ipa">--IPA--</option>
          <option values="ips">--IPS--</option>
        </select>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" placeholder="Email" class="form-control">
        </div>
        <div class="form-group">
          <label>Alamat Lengkap</label>
          <input type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control">
        </div>
        <div class="form-group">
          <label>Jenis Kelamin</label>
          <select name="jns_kelamin" class="form-control">
            <option  values="laki-laki">--Laki-Laki--</option>
            <option values="perempuan">--Perempuan--</option>
          </select>
        </div>
        <div class="form-group">
          <label>Status Anda Saat Ini </label>
          <select name="status" class="form-control">
            <option  values="kerja">--Kerja--</option>
            <option values="kuliah">--kuliah--</option>
            <option values="lainya">--Lain-lain--</option>
          </select>
        </div>
        <div class="form-group">
          <label>No Telepon</label>
          <input type="text" class="form-control" name="no_tlp" placeholder="No Telepon">
        </div>

          <button type="submit" name="Submit" class="btn btn-info">Kirim</button>


  </div>
  </div>
  </div>
  </form>


 
   <?php

    // memasukan data
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $jns_kelamin = $_POST['jns_kelamin'];
        $status = $_POST['status'];
        $no_tlp = $_POST['no_tlp'];


      
      

        // masuk ke database
        $result = mysqli_query($mysqli, "INSERT INTO biodata(name,jurusan,email,alamat, jns_kelamin, status, no_tlp) VALUES('$name','$jurusan','$email','$alamat','$jns_kelamin','$status','$no_tlp')")

        // pesan 
       
or die("menyimpan data gagal <meta http-equiv=refresh content=3;url=biodata_alumni.php>");
echo " <meta http-equiv=refresh content=3;url=pertanyaan.php>";

    }
    ?>
                           
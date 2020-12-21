 	<?php
  include "koneksi.php";
  include "footer.php";
  include "header.php";
  ?>

  





  <body>

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

                           <div id="content">
                    <div class="outer">
                        <header class="head">
                            <div class="main-bar ">
                            <ol class="breadcrumb">
                             
                              
                            </ol>
                            </div>
                        </header>




    
<form method="POST" action="action_pertanyaan.php">
  <table border="0" align="center">
    <tr>
    <td colspan="3" align="center"><h2> KUISIONER </h2>
    
   <div align="justify" class="text text-dark">
    <p>
1.  Lama waktu tunggu yang anda perlukan untuk mendapatkan pekerjaan/studi lanjut terhitung sejak waktu wisuda adalah  <br><br>

<label><input type="checkbox" name="s_satu" value="0 bulan">0 Bulan (Jika sudah bekerja saat wisuda atau sebelumnya)</label><br>
 <label><input type="checkbox" name="s_satu" value="-3 bulan">Kurang dari 3 bulan</label><br>
 <label><input type="checkbox" name="s_satu" value="3-6 bulan">3-6 bulan setelah lulus </label><br>
 <label><input type="checkbox" name="s_satu" value="6-12 bulan">6-12 bulan setelah lulus</label><br>
  <label><input type="checkbox" name="s_satu" value="+12 bulan">Lebih dari 12 tahun</label><br>
   <label><input type="checkbox" name="s_satu" value="tidak bekerja">Tidak bekerja sama sekali</label><br>
  <br><br><br>
</p>
2.  Jenis pekerjaan pertama yang didapatkan setelah lulus dari SMAN 1 RAWAMERTA :<br>
 (beri ceklis [ √ ]  pada salah satu pilihan dibawah ini)<br><br>


 <label><input type="checkbox" name="s_dua" value="pengajar">Tenaga Pengajar</label><br>
     <label><input type="checkbox" name="s_dua" value="wirausaha">Wirausaha </label><br>
     <label><input type="checkbox" name="s_dua" value="mahasiswa">Mahasiswa</label><br>
     <label><input type="checkbox" name="s_dua" value="pns">Pegawai negeri sipil</label><br>
     <label><input type="checkbox" name="s_dua" value="dll">DLL</label><br><br>

 3. Cara mendapatkan informasi pekerjaan / study lanjut stelah lulus SMA ?<br>

 <label><input type="checkbox" name="s_tiga" value="promosi">Promosi intansi</label><br>
     <label><input type="checkbox" name="s_tiga" value="media">Media cetak maupun online </label><br>
     <label><input type="checkbox" name="s_tiga"value="sosialisasi">Sosialisasi individu seperti teman atupun keluarga</label><br>
     <label><input type="checkbox" name="s_tiga" value="wirausaha">Menciptakan pekerjaan sendiri (wirausaha)</label><br>
     <label><input type="checkbox" name="s_tiga" value="dll">DLL</label><br>
    <br>

4. (Jika sudah bekerja) Besar Gaji (Per-Bulan) <i>fresh graduate</i>/awal setelah lulus sekolah adalah :<br>


<label><input type="checkbox" name="s_empat" value="1jt">Kurang dari 1jt</label><br>
     <label><input type="checkbox" name="s_empat" value="1-2jt">1-2jt </label><br>
     <label><input type="checkbox" name="s_empat" value="2-4jt">2-4jt</label><br>
     <label><input type="checkbox" name="s_empat" value="4-5jt">4-5jt</label><br>
     <label><input type="checkbox" name="s_empat" value="5jt++">Lebih dari 5jt</label><br>
     <br>
5. (Jika kuliah) Instansi manakah yang di pilih ? beserta jurusan yang di ambil!<br>
<div class="container">
<div class="form-check">
  <input class="input" type="text" name="jurusan">
 </div>
</div><br>
<br>

6. Kesesuaian bidang jurusan sekolah dengan bidang kerja maupun kuliah ?
<br>





 <label><input type="checkbox" name="bidang" value="sesauai">Sesuai</label><br>
     <label><input type="checkbox" name="bidang" value="tidak_sesuai">Tidak Sesuai </label><br>
    <br>

</td></tr>



    <tr>
  
      <td><div class="container">
  <button type="submit" value="selesai" name="pilih" class="btn btn-primary" >Konfirmasi Jawaban</button>
  </div></td>
      </tr>


    </div></td></tr></table></form>
















